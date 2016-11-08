<?php

namespace app\controllers\channel;

use yii\web\Controller;

class ChannelController extends Controller
{
   public function actionIndex()
   {
   	  return $this->render('index');
   }
}
