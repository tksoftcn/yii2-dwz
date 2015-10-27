<?php
/**
 * @link http://framework.tksoft.cn
 * @copyright Copyright (c) 2015 TongKe Software CO.,Ltd.
 * @license http://framework.tksoft.cn/license
 */
namespace tksoftcn\dwz\widgets;
use Yii;

/**
 * DWZ风格的gridview部件
 * @author TongKe Chen <chentongke@tksoft.cn>
 *
 */
class GridView extends \yii\grid\GridView {
    public $tableOptions = ['class' => 'table','width'=>"100%",'layoutH'=>"138",'id'=>'jbsxBox'];
    //public $layout = "{summary}\n{items}\n{summary}\n{pager}";
    public $layout = "\n{items}\n
        <div class=\"panelBar\">\n
            <div class=\"pages\">{summary} \n
			<span>&nbsp;&nbsp;每页显示</span>
			<select class=\"combox\" name=\"numPerPage\" onchange=\"navTabPageBreak({numPerPage:this.value})\">
				<option value=\"20\">20</option>
				<option value=\"50\">50</option>
				<option value=\"100\">100</option>
				<option value=\"200\">200</option>
                <option value=\"1000\">1000</option>
			</select>        
            </div>\n
            \n{pager}
        </div>";
    public $summaryOptions = ['tag' => 'span'];
    public $pager = ['class'=>'tksoft\dwz\widgets\LinkPager',
        'pagination'=>['pageSizeParam'=>'numPerPage',
                'pageParam'=>'pageNum',]
    ];
}