<?php
/**
 * @link http://framework.tksoft.cn
 * @copyright Copyright (c) 2015 TongKe Software CO.,Ltd.
 * @license http://framework.tksoft.cn/license
 */
namespace tksoftcn\dwz;

use Yii;
use yii\base\Action;

/**
 * DWZ框架中刷新TAB的action
 * @author TongKe Chen <chentongke@tksoft.cn>
 *
 */
class RefreshtabAction extends Action {
    public function run() {
        $tabId = Yii::$app->request->getQueryParam('tabId','');
        if (!empty($tabId)) {
            $tabId = $_GET [ 'tabId' ];
            $this->controller->returnSuccess ( array (
                'navTabId' => $tabId,
                'callbackType' => ''
            ) );
        } else
            $this->controller->returnFail ();
    }
}