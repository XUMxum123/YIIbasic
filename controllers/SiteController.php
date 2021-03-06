<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

use yii\web\UploadedFile;
use app\models\EntryForm; // add xum
use app\models\UploadForm; // add xum

class SiteController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    /**
     * Login action.
     *
     * @return string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return string
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return string
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }
    
    /**
     * Displays hello world.
     * # 
     * # [author: meng.xu]
     *   if actionSay, the url is http://localhost/basic/web/index.php?r=site/say
     *   if actionSayHello, the the url is http://localhost/basic/web/index.php?r=site/say-hello
     *   if want to detail, you can see study.pdf [pages 11-12]
     * #
     * @return string
     */  
    public function actionSayHello(){
    	$message = "hello world!";
    	return $this->render('say',['message'=>$message]);
    }
    
    /**
     * Verify the use information.
     *
     * @return string
     */
    public function actionEntry(){
    	$model = new EntryForm();
    	if($model->load(Yii::$app->request->post()) && $model->validate()){
    		return $this->render("entry-confirm",["model"=>$model]);
    	}else{
    		return $this->render("entry",["model"=>$model]);
    	}
    }
    
    /**
     * Upload image.
     * Just to test it --- [meng.xu]
     * @return string
     */
    public function actionUpload()
    {
    	$model = new UploadForm();
    	/*
    	 * note: [need to auto create file] solving?
    	 * @param $subfileName must be create at uploads before save file
    	 * */
    	$subfileName = "site";
    	if (Yii::$app->request->isPost) {
    		$model->imageFiles = UploadedFile::getInstances($model, 'imageFiles');
    		if ($model->upload($subfileName)) {
    			// 文件上传成功
    			return $this->render('upload', ['model' => $model]);
    		}
    	}
    	return $this->render('upload', ['model' => $model]);
    }
}
