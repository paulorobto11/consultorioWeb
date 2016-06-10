<?php


namespace app\components;

use Yii;
use yii\base\Component;
use yii\helpers\Inflector;
use yii\helpers\Json;
use yii\helpers\VarDumper;
use yii\caching\TagDependency;
use Exception;


class listcontrollers extends Component
{
    public $deny;
    public $cache;

    public function getList($deny = [], $term = '', $cache = null)
    {


        if (empty($deny)) {
            $deny = $this->deny;
        }
        if ($cache == null) {
            $cache = $this->cache;

        } else {

            if ($cache === 1) {
                TagDependency::invalidate(Yii::$app->cache, '_listcontrollers');
            }
        }
        if (empty(Yii::$app->cache->get('_listcontrollers'))) {

            $value = $this->returnList($deny, $term);
            Yii::$app->cache->set('_listcontrollers', $value, $cache, new TagDependency(['tags' => '_listcontrollers']));
        } else {

            if (is_array(Yii::$app->cache->get('_listcontrollers'))) {
                $value = Yii::$app->cache->get('_listcontrollers');
            } else {
                $value = Json::decode(Yii::$app->cache->get('_listcontrollers'));
            }

        }

        return Json::encode($value);
    }

    private function returnList($deny = [], $term = '')
    {
        $model = $this->search($term);

//        print '<pre>';
//        print_r($model);
//        exit;

        $arr_out = ['total' => 0, 'list' => []];


        if (is_array($model) && empty($model) == false) {

            foreach ($model as $id => $m) {
                $_test = explode('/', $id);
                foreach ($deny as $_deny) {

                    if ($_test[1] == $_deny) {


                        unset($model[$id]);
                    }
                }

            }
            $_totalmodel = count($model);



            foreach ($model as $_id => $_m) {
                $_idtest = explode('/', $_id);


                if (strpos("/$_idtest[1]/#", $_id) == 0)
                {
                    $_textName = explode('/#', $_id);
                    if (isset($_textName[1]))
                    {
                        $_name = $_textName[1];
                        $_totalmodel = $_totalmodel - 1;

                    } else {
                        $arr_list[$_name][] = $_id;
                    }


                }


            }

            $arr_out = ['total' => $_totalmodel, 'list' => $arr_list];
        }


        return $arr_out;
    }


    private function search($term = '')
    {

        $result = [];
        $manager = Yii::$app->getAuthManager();
        $exists = array_keys($manager->getPermissions());
        $routes = $this->getAppRoutes();

        foreach ($routes as $route) {
            if (in_array($route, $exists)) {
                continue;
            }
            if (empty($term) or strpos($route, $term) !== false) {
                $result[$route] = true;
            }
        }

        return $result;
    }


    public function getAppRoutes()
    {
        $result = [];
        $this->getRouteRecrusive(Yii::$app, $result);
        return $result;
    }


    private function getRouteRecrusive($module, &$result)
    {
        $token = "Get Route of '" . get_class($module) . "' with id '" . $module->uniqueId . "'";
        Yii::beginProfile($token, __METHOD__);
        try {
            foreach ($module->getModules() as $id => $child) {
                if (($child = $module->getModule($id)) !== null) {
                    $this->getRouteRecrusive($child, $result);
                }
            }

            foreach ($module->controllerMap as $id => $type) {
                $this->getControllerActions($type, $id, $module, $result);
            }

            $namespace = trim($module->controllerNamespace, '\\') . '\\';
            $this->getControllerFiles($module, $namespace, '', $result);
            $result[] = ($module->uniqueId === '' ? '' : '/' . $module->uniqueId) . '/*';
        } catch (\Exception $exc) {
            Yii::error($exc->getMessage(), __METHOD__);
        }
        Yii::endProfile($token, __METHOD__);
    }

    private function getControllerFiles($module, $namespace, $prefix, &$result)
    {
        $path = @Yii::getAlias('@' . str_replace('\\', '/', $namespace));
        $token = "Get controllers from '$path'";
        Yii::beginProfile($token, __METHOD__);
        try {
            if (!is_dir($path)) {
                return;
            }
            foreach (scandir($path) as $file) {
                if ($file == '.' || $file == '..') {
                    continue;
                }
                if (is_dir($path . '/' . $file)) {
                    $this->getControllerFiles($module, $namespace . $file . '\\', $prefix . $file . '/', $result);
                } elseif (strcmp(substr($file, -14), 'Controller.php') === 0) {
                    $id = Inflector::camel2id(substr(basename($file), 0, -14));
                    $className = $namespace . Inflector::id2camel($id) . 'Controller';
                    if (strpos($className, '-') === false && class_exists($className) && is_subclass_of($className, 'yii\base\Controller')) {
                        $this->getControllerActions($className, $prefix . $id, $module, $result);
                    }
                }
            }
        } catch (\Exception $exc) {
            Yii::error($exc->getMessage(), __METHOD__);
        }
        Yii::endProfile($token, __METHOD__);
    }


    private function getControllerActions($type, $id, $module, &$result)
    {
        $token = "Create controller with cofig=" . VarDumper::dumpAsString($type) . " and id='$id'";
        Yii::beginProfile($token, __METHOD__);
        try {
            /* @var $controller \yii\base\Controller */
            $controller = Yii::createObject($type, [$id, $module]);
            $this->getActionRoutes($controller, $result);
            $result[] = '/' . $controller->uniqueId . '/*';
        } catch (\Exception $exc) {
            Yii::error($exc->getMessage(), __METHOD__);
        }
        Yii::endProfile($token, __METHOD__);
    }


    private function getActionRoutes($controller, &$result)
    {
        $token = "Get actions of controller '" . $controller->uniqueId . "'";
        Yii::beginProfile($token, __METHOD__);
        try {
            $prefix = '/' . $controller->uniqueId . '/';
            foreach ($controller->actions() as $id => $value) {
                $result[] = $prefix . $id;
            }
            $class = new \ReflectionClass($controller);
            $_docpai = $class->getDocComment();
            preg_match_all('#@(.*?)\n#s', $_docpai, $_annotationspai);


            $_annpai = $_annotationspai[1][0];
            $_explode = explode(':', $_annpai);
            $_nameController = null;
            if ($_explode[0] == 'resolveName') {
                $_nameController = $_explode[1];
            }

            foreach ($class->getMethods() as $method) {
                $name = $method->getName();
                $result[] = $prefix . '#' . $_nameController;

                if ($method->isPublic() && !$method->isStatic() && strpos($name, 'action') === 0 && $name !== 'actions') {
                    $_docfilho = $method->getDocComment();

                    preg_match_all('#@(.*?)\n#s', $_docfilho, $_annotationsfilho);

                    if (is_array($_annotationsfilho[1]) && !empty($_annotationsfilho[1])) {
                        $_count = 0;
                        $_endcount = count($_annotationsfilho[1]);

                        foreach ($_annotationsfilho[1] as $_annfilho) {
                            $_valuearry=[];

                            $_explodefilho = explode(':', $_annfilho);
                            if (is_array($_explodefilho)) {


                                if (!empty($_explodefilho)) {

                                    //passa nome
                                    if ($_count <= $_endcount) {
                                        if ($_count == 0) {

                                            if (isset($_explodefilho[1])) {
                                                if (in_array('nome', $_explodefilho)) {
                                                    if ($_explodefilho[0] == 'nome') {
                                                        $_nomefilho = $_explodefilho[1];

                                                    }
                                                } else {
                                                    $_nomefilho = '';
                                                }

                                            } else {
                                                $_nomefilho = '';
                                            }

                                        }

                                    }
                                    if ($_count <= $_endcount) {
                                        //passada id
                                        if ($_count == 1) {
                                            if (isset($_explodefilho[1])) {
                                                if (in_array('id', $_explodefilho)) {
                                                    if ($_explodefilho[0] == 'id') {
                                                        $_idfilho = $_explodefilho[1];
                                                    }
                                                } else {
                                                    $_idfilho = '';
                                                }
                                            } else {
                                                $_idfilho = '';
                                            }

                                        }

                                    }

                                    if ($_count <= $_endcount) {
                                        if ($_count == 2) {
                                            //passada descr
                                            if (isset($_explodefilho[1])) {
                                                if (in_array('descr', $_explodefilho)) {
                                                    if ($_explodefilho[0] == 'descr') {
                                                        $_descrfilho = $_explodefilho[1];
                                                    }
                                                } else {
                                                    $_descrfilho = '';
                                                }

                                            } else {
                                                $_descrfilho = '';
                                            }
                                        }

                                    }


                                }

                            }


                            $_count++;
                        }
                        $_valuearry=['nome'=>$_nomefilho,'id'=>$_idfilho,'descr'=>$_descrfilho];

                        $_valuearry=Json::encode($_valuearry);

                        $result[] = $prefix . Inflector::camel2id(substr($name, 6)) . '/value#/' . $_valuearry;
                    }


                }


            }


        } catch (\Exception $exc) {
            Yii::error($exc->getMessage(), __METHOD__);
        }
        Yii::endProfile($token, __METHOD__);
    }


}

