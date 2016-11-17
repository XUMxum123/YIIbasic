<?php

$params = require(__DIR__ . '/params.php');

$config = [
    'id' => 'basic',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => '1357924680', // add secret key by myself[xum]
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
    		
    	/*  add by xum --- start --- [add redis plugin]  */	
    	'redis' => [
    		'class' => 'yii\redis\Connection',
    		'hostname' => 'localhost', // server address
    		'port' => 6379,  // server port
    		'database' => 0,
    	],
    	'cache' => [
    		'class' => 'yii\redis\Cache',
    	],
    	'session' => [
    		'class' => 'yii\redis\Session',
    	],
    	/*  add by xum --- end --- [add redis plugin]  */
    		
        'user' => [
            'identityClass' => 'app\models\User',
            'enableAutoLogin' => true,
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
        	
        	/*  add by xum --- start --- */
        	'transport' => [
        			'class' => 'Swift_SmtpTransport',
        			'host' => 'smtp.163.com',  
        			'username' => '18850337241@163.com',     
        			'password' => 'xu1332080218',    // Authorization Codes
        			'port' => '25',   
        			'encryption' => 'tls',      				 
        	],
        	'messageConfig'=>[
        			'charset'=>'UTF-8',  
        			'from'=>['18850337241@163.com'=>'admin'], 
        	],
           /*  add by xum --- end --- */       		
        ],
    		
    	/*  add by xum --- start --- */
/*     	'assetManager'=>[
    		'bundles'=>[
    			'yii\web\JqueryAsset'=>[
    				'jsOptions'=>[
    					'position'=>\yii\web\View::POS_HEAD,
    				]
    			]
    		]
    	], */
    	/*  add by xum --- end --- */
    		
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
    		
    	/*  add by xum --- start --- */
/*     	'log' => [
    		'class'=>'CLogRouter',
    		'routes'=>[
    				[
    					//'class'=>'CFileLogRoute',
    					'class'=>'ext.yii-debug-toolbar.YiiDebugToolbarRoute',
    					'levels'=>'error, warning',
    					'ipFilters'=>array('127.0.0.1','192.168.1.*'), //配置可以查看debug面板的ip
    				]
    		 ],
    	 ], */
    	/*  add by xum --- end --- */
    		    		
        'db' => require(__DIR__ . '/db.php'),
        /*
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
            ],
        ],
        */
    ],
    'params' => $params,
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
/*     	'panels' => [
    		'views' => ['class' => 'app\panels\ViewsPanel'],
    	], */
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
    ];
}

return $config;
