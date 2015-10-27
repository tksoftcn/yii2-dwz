<?php
/**
 * @link http://framework.tksoft.cn
 * @copyright Copyright (c) 2015 TongKe Software CO.,Ltd.
 * @license http://framework.tksoft.cn/license
 */
namespace tksoftcn\dwz\widgets;

use Yii;
/**
 * dwz的表单组件
 * @author TongKe Chen <chentongke@tksoft.cn>
 *
 */
class ActiveForm extends \yii\widgets\ActiveForm
{
    public $options = [
        'class' => 'pageForm required-validate',
        //'enctype' => 'multipart/form-data',
        'onsubmit'=>'return validateCallback(this, dialogAjaxDone)'
    ];

    public $fieldConfig = [
        //'template' => "{label}\n<div class=\"am-u-sm-8 am-u-md-4\">{input}</div><div class=\"am-hide-sm-only am-u-md-6\">{hint}{error}</div>",
        //'labelOptions' => [
        //    'class' => 'am-u-sm-4 am-u-md-2 am-text-right'
        //],
        'options' => ['class' => 'unit'],
        //'inputOptions' =>['size'=>'40'],
    ];
}