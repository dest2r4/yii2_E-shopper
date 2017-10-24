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
use yii\data\Pagination;


class CategoryController extends AppController
{
    public function actionIndex(){
        $hits=Product::find()->where(['hit'=>'1'])->limit(6)->all();
        #debug($hits);
        $this->setMeta('new Title');
        return $this->render('index',compact('hits'));
    }

    public function actionView($id)
    {
        # pagination
        $query=Product::find()->where(['category_id'=>$id]);
        $pages= new Pagination(['totalCount'=>$query->count(),'pageSize'=>3,
            'forcePageParam'=>false,
            'pageSizeParam'=>false
            ]);
        $products=$query->offset($pages->offset)->limit($pages->limit)->all();





        $id=Yii::$app->request->get('id');

        $category=Category::findOne($id);
        $this->setMeta("E-Shopper |{$category['name']}",$category["keywords"],$category['description']);
        return $this->render('view',compact('products','pages','category'));

    }















}