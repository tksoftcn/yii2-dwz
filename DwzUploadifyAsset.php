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
 * DWZ UI Uploadify的资源包
 * 
 * @author TongKe Chen <chentongke@tksoft.cn>
 *        
 */
class DwzUploadifyAsset extends AssetBundle
{

    public $sourcePath = '@tksoft/yii2-dwz/assets';

    public $css = [
        'uploadify/css/uploadify.css'
    ];

    public $js = [
        'uploadify/scripts/jquery.uploadify.js'
    ];

    public $cssOptions = [
        'media' => 'screen'
    ];
    public $jsOptions = [
        'position' => View::POS_HEAD
    ];
}