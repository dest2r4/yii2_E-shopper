<?php
/**
 * Created by PhpStorm.
 * User: dest2r4
 * Date: 20.10.2017
 * Time: 17:20
 */

namespace app\controllers;
use app\models\Category;
use app\models\Product;
use Yii;



class CategoryController extends AppController
{
    public function actionIndex(){
        $hits=Product::find()->where(['hit'=>'1'])->limit(6)->all();
        debug($hits);
        return $this->render('index',compact('hits'));
    }
}