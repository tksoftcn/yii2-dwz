<?php
/**
 * @link http://framework.tksoft.cn
 * @copyright Copyright (c) 2015 TongKe Software CO.,Ltd.
 * @license http://framework.tksoft.cn/license
 */
namespace tksoftcn\dwz;

use Yii;

/**
 * Dwz的Crud控制器
 * 
 * @author tongke
 *        
 */
class CrudController extends \tksoftcn\yii2\web\CrudController
{

    public $createLayoutFile = '@tksoftcn/dwz/layouts/dialog';

    public $updateLayoutFile = '@tksoftcn/dwz/layouts/dialog';

    public $viewLayoutFile = '@tksoftcn/dwz/layouts/dialog';

    public $indexLayoutFile = '@tksoftcn/dwz/layouts/list';
    
    public function actions() {
        return [
        'delete' => [
            'class' => 'tksoftcn\yii2\web\DeleteAction',
            'scenarioName' => $this->deleteScenario,
            'extraReturnParam' => ['callbackType'=>'']
        ],
            'create' => [
                'class' => 'tksoftcn\yii2\web\CreateAction',
                'layoutFile' => $this->createLayoutFile,
                'viewFile' => $this->createViewFile,
                'scenarioName' => $this->createScenario,
            ],
            'update' => [
                'class' => 'tksoftcn\yii2\web\UpdateAction',
                'layoutFile' => $this->updateLayoutFile,
                'viewFile' => $this->updateViewFile,
                'scenarioName' => $this->updateScenario,
            ],

            'index' => [
                'class' => 'tksoftcn\yii2\web\IndexAction',
                'layoutFile' => $this->indexLayoutFile,
                'viewFile' => $this->indexViewFile,
                'scenarioName' => $this->indexScenario,
            ],
            'view' => [
                'class' => 'tksoftcn\yii2\web\ViewAction',
                'layoutFile' => $this->viewLayoutFile,
                'viewFile' => $this->viewViewFile,
            ],
        ];
    }
    
    public function init() {
        parent::init();
        //这里转换一下DWZ分页的参数是通过POST，但是YII2是通过GET
        if(isset($_POST['pageNum'])) {
            $_GET['page'] = $_GET['pageNum'] = intval($_POST['pageNum']);
        }
        if(isset($_POST['numPerPage'])) {
            $_GET['per-page'] = $_GET['numPerPage'] = intval($_POST['numPerPage']);
        }
    }
    
    /**
     * @inheritdoc
     */
    public function returnSuccess($message = '操作成功', $url = '', $extra = [])
    {
        $arr = array(
            'statusCode' => '200',
            'message' => $message,
            'navTabId' => $url,
            'rel' => '',
            'callbackType' => 'closeCurrent',
            'forwardUrl' => '',
            'confirmMsg' => ''
        );
        if (! empty($extra)) {
            foreach ($extra as $k => $v) {
                $arr[$k] = $v;
            }
        }
        echo json_encode($arr);
        exit();
    }
    /**
     * @inheritdoc
     */
    public function returnFail($message= '操作失败', $detailErrors = [], $extra = []) {
        $retmsg = '';
        if (!empty($detailErrors)) {
            foreach ($detailErrors as $error) {
                //detailError一般由model传过来，这里取0作为错误消息
                $retmsg .= $error[0] .'<br>'; 
            }
        } else {
            $retmsg = $message;
        }
        $arr = array (
            'statusCode' => '300',
            'message' => $retmsg
        );
        echo json_encode ( $arr );
        exit ();
    }
}