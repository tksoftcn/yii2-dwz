<?php
/**
 * @link http://framework.tksoft.cn
 * @copyright Copyright (c) 2015 TongKe Software CO.,Ltd.
 * @license http://framework.tksoft.cn/license
 */
namespace tksoftcn\dwz\widgets;
use Yii;
/**
 * dwz ui的menu widget
 * @author TongKe Chen <chentongke@tksoft.cn>
 *
 */
class Menu extends \yii\widgets\Menu {
    public $options = ['class'=> 'tree treeFolder expand'];
    public $linkTemplate = '<a href="{url}" target="navTab" rel="{url}">{label}</a>';
    public $labelTemplate = '<a>{label}</a>';
    public $activateParents = true;
}