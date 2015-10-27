<?php
/**
 * @link http://framework.tksoft.cn
 * @copyright Copyright (c) 2015 TongKe Software CO.,Ltd.
 * @license http://framework.tksoft.cn/license
 */
namespace tksoftcn\dwz\widgets;

use Yii;
use yii\helpers\Html;
use yii\helpers\ArrayHelper;

/**
 * DWZ风格的分页组件
 * 
 * @author TongKe Chen <chentongke@tksoft.cn>
 *        
 */
class LinkPager extends \yii\widgets\LinkPager
{

    /**
     * DWZ中的ajax刷新标记
     * 
     * @var unknown
     */
    public $rel = 'jbsxBox';

    public $targetType = 'navTab';
    /**
     * Renders the page buttons.
     * 
     * @return string the rendering result
     */
    protected function renderPageButtons()
    {
        // <div class="pagination" rel="jbsxBox" totalCount="<?php echo $totalCount;"
        // numPerPage=" echo $numPerPage;" pageNumShown="5"
        // currentPage=" echo $currentPage;"></div>
        
        //总条数
        $totalCount = $this->pagination->totalCount;
        // 总页数        
        $pageCount = $this->pagination->getPageCount();
        // 当前页
        $currentPage = $this->pagination->getPage() + 1;
        // 每页大小
        $pageSize = $this->pagination->getPageSize();
        
        $options = ArrayHelper::merge([
            'rel' => $this->rel,
            'totalCount' => $totalCount,
            'numPerPage' => $pageSize,
            'currentPage' => $currentPage,
            'pageNumShown' => 5,
            'targetType'=> $this->targetType
        ], $this->options);
        
        $pagerForm = '';
        $pagerForm.=Html::beginForm(Yii::$app->request->absoluteUrl,'POST', ['id'=>'pagerForm']);
        $pagerForm.=Html::hiddenInput('pageNum', 1);
        $pagerForm.=Html::hiddenInput('numPerPage', $pageSize);
        $pagerForm.=Html::endForm();
        
        $html = '<div class="'.$this->options['class'].'" targetType="'.$this->targetType.'" totalCount="'.$totalCount.'" numPerPage="'.$pageSize.'" pageNumShown="10" currentPage="'.$currentPage.'"></div>';
        return $pagerForm.$html;
        //return $pagerForm.Html::tag('div', '',$options);
    }
}