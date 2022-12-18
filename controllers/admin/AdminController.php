<?php

namespace app\controllers\admin;

use Yii;
use yii\web\Controller;

class AdminController extends Controller
{
    public function actionIndex()
    {
        return $this->render('@app/views/admin/index');
    }

    public function actionDocx()
    {
        return $this->render('@app/views/admin/docx');
    }

    public function actionDocx2() {
        if (Yii::$app->user->identity->username) {
            $uername == 'admin';
            return $this->render('');
        }
        return $this->render('index');
    }
}