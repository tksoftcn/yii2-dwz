<?php
/**
 * @link http://framework.tksoft.cn
 * @copyright Copyright (c) 2015 TongKe Software CO.,Ltd.
 * @license http://framework.tksoft.cn/license
 */
namespace tksoftcn\dwz;

use Yii;
use yii\web\AssetBundle;

/**
 * DWZ UI的资源包全集，引用这个即可
 * 
 * @author TongKe Chen <chentongke@tksoft.cn>
 *        
 */
class DwzAsset extends AssetBundle
{
    public $sourcePath = '@tksoftcn/yii2-dwz/assets';

    public $depends = [
        'tksoftcn\dwz\JqueryAsset',
        'tksoftcn\dwz\DwzCoreAsset',
        'tksoftcn\dwz\DwzPrintAsset',
        'tksoftcn\dwz\DwzXheditorAsset',
        'tksoftcn\dwz\DwzUploadifyAsset'
    ];
}