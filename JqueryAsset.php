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
 * DWZ UI Jquery的资源包
 * @author TongKe Chen <chentongke@tksoft.cn>
 *
 */
class JqueryAsset extends AssetBundle
{
    public $sourcePath = '@tksoftcn/yii2-dwz/assets';

    public $js = [
        'js/jquery-1.7.2.js',
        'js/jquery.cookie.js',
        'js/jquery.validate.js',
        'js/jquery.bgiframe.js',
    ];
    public $jsOptions = [
        'position' => View::POS_HEAD
    ];
}