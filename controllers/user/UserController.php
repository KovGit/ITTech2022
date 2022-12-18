<?php

namespace app\controllers\user;

use Yii;
use yii\web\Controller;

class UserController extends Controller
{
    public function actionIndex()
    {
        return $this->render('@app/views/user/index');
    }

    
}