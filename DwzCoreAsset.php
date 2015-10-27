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
 * DWZ UI Core的资源包
 * 
 * @author TongKe Chen <chentongke@tksoft.cn>
 *        
 */
class DwzCoreAsset extends AssetBundle
{

    public $sourcePath = '@tksoftcn/yii2-dwz/assets';

    public $css = [
        'themes/default/style.css',
        'themes/css/core.css'
    ];

    public $js = [
        'js/dwz.min.js',
        'js/dwz.regional.zh.js'
    ];

    public $cssOptions = [
        'media' => 'screen'
    ];

    public $jsOptions = [
        'position' => View::POS_HEAD
    ];
}