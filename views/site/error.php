<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Url;

?>
<div class="site-error">

    <div class="alert alert-warning">
    	<h4><i class="fa fa-warning"></i> <?php echo $message ?></h4>
    </div>
    
    <div class="row">
    	<div class="col-md-12">
        	<a class="btn btn-default pull-left" href="javascript:history.go('-1');"><i class="fa fa-arrow-left"></i> Voltar</a>
        	
        	<a class="btn btn-default pull-right" href="<?= Url::to(Url::base().'/')?>"><i class="fa fa-home"></i> Página Inicial</a>
    	</div>
    </div>
</div>
