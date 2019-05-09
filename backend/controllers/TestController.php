<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/5/9 0009
 * Time: 15:59
 */

namespace backend\controllers;

use common\models\Message;
use yii\web\controller;

class TestController extends Controller
{
    public function actionIndex(){
        return Message::jsonReturn(1,'success');
    }
}