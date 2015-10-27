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
 * DWZ UI Xheditor的资源包
 * @author TongKe Chen <chentongke@tksoft.cn>
 *
 */
class DwzXheditorAsset extends AssetBundle
{
    public $sourcePath = '@tksoftcn/yii2-dwz/assets';

    public $js = [
        'xheditor/xheditor-1.2.1.min.js',
        'xheditor/xheditor_lang/zh-cn.js',
    ];
    public $jsOptions = [
        'position' => View::POS_HEAD
    ];
}