<?php
/**
 * Created by PhpStorm.
 * User: dest2r4
 * Date: 25.10.2017
 * Time: 12:04
 */

namespace app\models;


use yii\base\Model;
use yii\db\ActiveRecord;

class Cart extends ActiveRecord
{
    public function addToCart($product,$quantity=1)
    {
        if(isset($_SESSION['cart'][$product->id]))$_SESSION['cart'][$product->id]['qty']+=$quantity;
        else
        {
            $_SESSION['cart'][$product->id]=[
                    'qty'=>$quantity,
                    'name'=> $product->name,
                    'price'=> $product->price,
                    'img' => $product->img


            ];
        }

        # numbrer of products
        $_SESSION['cart.qty']=isset($_SESSION['cart.qty'])?$_SESSION['cart.qty']+$quantity:$quantity;
        $_SESSION['cart.sum']=isset($_SESSION['cart.sum'])?$_SESSION['cart.sum']+$quantity*$product->price:$quantity*$product->price;










    }





















































}