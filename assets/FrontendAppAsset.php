<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class FrontendAppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $jsOptions = ['position' => \yii\web\View::POS_HEAD]; // 用$jsOption把js脚本加载到head里, 反之加载到body的最底部(默认)
    public $css = [ // 个人定义的
    	   'frontend/css/xgxt_login.css',
    ];
    public $js = [ // 个人定义的
           'frontend/js/frontend.js',
    ];
    public $depends = [  // 加载yii2框架自带的css和js文件
    	'yii\web\JqueryAsset',
        //'yii\web\YiiAsset',
        //'yii\bootstrap\BootstrapAsset',
    ];   
}
