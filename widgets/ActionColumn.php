<?php
/**
 * @link http://framework.tksoft.cn
 * @copyright Copyright (c) 2015 TongKe Software CO.,Ltd.
 * @license http://framework.tksoft.cn/license
 */
namespace tksoftcn\dwz\widgets;
use Yii;
use Closure;
use yii\helpers\Html;
/**
 * DWZ风格的ActionColumn部件
 * @author TongKe Chen <chentongke@tksoft.cn>
 *
 */
class ActionColumn extends \yii\grid\ActionColumn {
    public $template = ' {update} {delete}';
    protected function initDefaultButtons()
    {
        if (!isset($this->buttons['view'])) {
            $this->buttons['view'] = function ($url, $model, $key) {
                $options = array_merge([
                    'title' => Yii::t('yii', 'View'),
                    'aria-label' => Yii::t('yii', 'View'),
                    'data-pjax' => '0',
                    'class'=>'btnEdit',
                    'target'=> 'navTab',                    
                ], $this->buttonOptions);
                return Html::a('<span class="glyphicon glyphicon-eye-open"></span>', $url, $options);
            };
        }
        if (!isset($this->buttons['update'])) {
            $this->buttons['update'] = function ($url, $model, $key) {
                $options = array_merge([
                    'title' => Yii::t('yii', 'Update'),
                    'aria-label' => Yii::t('yii', 'Update'),
                    'data-pjax' => '0',
                    'class'=>'btnEdit',
                    'target'=> 'dialog',
                ], $this->buttonOptions);
                return Html::a(Yii::t('yii', 'Update'), $url, $options);
            };
        }
        if (!isset($this->buttons['delete'])) {
            $this->buttons['delete'] = function ($url, $model, $key) {
                $options = array_merge([
                    'title' => Yii::t('yii', 'Are you sure you want to delete this item?'),//Yii::t('yii', 'Delete'),
                    'aria-label' => Yii::t('yii', 'Delete'),
                    //'data-confirm' => Yii::t('yii', 'Are you sure you want to delete this item?'),
                    //'data-method' => 'post',
                    'data-pjax' => '0',
                    'class'=>'btnDel',
                    'target'=> 'ajaxTodo',
                ], $this->buttonOptions);
                return Html::a(Yii::t('yii', 'Delete'), $url, $options);
            };
        }
    }
}