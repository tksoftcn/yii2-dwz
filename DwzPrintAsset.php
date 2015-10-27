<?php
/**
 * @link http://framework.tksoft.cn
 * @copyright Copyright (c) 2015 TongKe Software CO.,Ltd.
 * @license http://framework.tksoft.cn/license
 */
namespace tksoftcn\dwz;

use Yii;
use yii\web\AssetBundle;
use yii\web\View;

/**
 * DWZ UI Print的资源包
 * @author TongKe Chen <chentongke@tksoft.cn>
 *
 */
class DwzPrintAsset extends AssetBundle
{
    public $sourcePath = '@tksoftcn/yii2-dwz/assets';
    public $css = [
        'themes/css/print.css',
    ];
    public $cssOptions = [
        'media' => 'print'
    ];
    public $jsOptions = [
        'position' => View::POS_HEAD
    ];
}