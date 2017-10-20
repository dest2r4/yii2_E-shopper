<?php
/**
 * Created by PhpStorm.
 * User: dest2r4
 * Date: 19.10.2017
 * Time: 20:56
 */

namespace app\components;
use yii\base\Widget;


class MenuWidget extends Widget
{
    public $tpl;

    public function init()
    {
        parent::init();
        if ($this->tpl===null)
        {
            $this->tpl='menu';
        }
        $this->tpl.='.php';

    }

    public function run()
    {
        return $this->tpl;
    }
}