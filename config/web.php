<?php

use kartik\mpdf\Pdf;

$params = require(__DIR__ . '/params.php');

$config = [
    'id' => 'basic',
    'language' => 'pt-BR',
    'sourceLanguage' => 'pt-BR',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'name' => 'consultorioWeb',

    'components' => [
		'authManager' => [
			'class' => 'yii\rbac\DbManager',
		],
		'listcontrollers' => [
			// lista funciona com
			'class' => 'app\components\listcontrollers',
			'deny'=>['gii','gridview','debug','*'],
			'cache'=>2592000,

		],
		'request' => [
            //!!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'L5zNCQx0wXfQtfW5rjxZQ-PNMBzHIqUB',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'user' => [
            'identityClass' => 'app\modules\auth\models\AuthUser',
       		'enableAutoLogin' => true,
            'authTimeout' => 60*60, //seconds
			'identityCookie' => [
				'name' => 'consultorioWeb', // unique for backend
				'path'=>'/basic/web'  // correct path for the backend app.
			]
		],
		'session' => [
		    'class' => 'yii\web\CacheSession',
			'name' => 'consultorioWeb', // unique for backend
			'cache' => 'cache',
		    'cookieParams' => ['httponly' => true, 'lifetime' => 3600 * 4],
		    'timeout' => 3600*4,
		    'useCookies' => true,
		],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => false,
       		'transport' => [
        				'class' => 'Swift_SmtpTransport',
        				'host' => 'smtp.gmail.com',
        				'username' => 'paulorobto11@gmail.com',
        				'password' => 'windows@3456',
        				'port' => '465',
        				'encryption' => 'ssl',
        		],        		
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
		'urlManager' => [
		    'class' => 'yii\web\UrlManager',
		    'showScriptName' => false,
			'enablePrettyUrl' => true,
			'rules' => [
                '<controller:\w+>/<id:\d+>'             => '<controller>/view',
                '<controller:\w+>/<action>/<id:\d+>'    => '<controller>/<action>',
			    '<controller:[\w-]+>/<action>/<id:\d+>' => '<controller>/<action>',
                '<controller:\w+>/<action:\w+>'         => '<controller>/<action>',
				'<controller:[\w-]+>/update/<id:\d+>'   => '<controller>/update',
				'<controller:[\w-]+>/delete/<id:\d+>'   => '<controller>/delete',
    			'<controller:[\w-]+>/<id:\d+>'          => '<controller>/view',
			    'pedido-pagamento/incluir/<idPedido:\d+>/<idPagamento:\d+>' => 'pedido-pagamento/incluir',
			],
		],
   		'pdf' => [
			'class' => Pdf::classname(),
			'format' => Pdf::FORMAT_A4,
			'orientation' => Pdf::ORIENT_PORTRAIT,
			'destination' => Pdf::DEST_BROWSER,
		],    		
        'messages' => [
            'class' => 'CPhpMessageSource'
		],
        'formatter' => [
            'class' => 'yii\i18n\Formatter',
            'defaultTimeZone' => 'America/Sao_Paulo',
            'dateFormat' => 'd/m/Y',
            'datetimeFormat' => 'd/m/Y H:i:s',
            'thousandSeparator' => '.',
            'decimalSeparator' => ',',
            'currencyCode' => 'BRL',
        ],
        'db' => require(__DIR__ . '/db.php'),
    ],
    'params' => $params,
    'modules' => [
		'auth' => [
            'class' => 'app\modules\auth\auth',
		],
        'gridview' =>  [
            'class' => '\kartik\grid\Module',
            // enter optional module parameters below - only if you need to
            // use your own export download action or custom translation
            // message source
            'downloadAction' => 'gridview/export/download',
            'i18n' => [
                'class' => 'yii\i18n\PhpMessageSource',
                'basePath' => '@kvgrid/messages',
                'forceTranslation' => true
            ]
        ]
    ]
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
    ];
}

return $config;
