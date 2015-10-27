<?php 
/*
 * 这是DWZ的列表页模板
 */
$this->beginPage();
$this->head();
$this->beginBody();
?>

<?
/*
<!-- //这里一般放搜索框，activeform -->
<div class="pageHeader">
    <?php $form = ActiveForm::begin(['options'=>['onsubmit'=>"return navTabSearch(this);"]]);?>
	 <div class="searchBar">
		<ul class="searchContent">
			<li>
				<?= $form->field($model, 'name')->textInput(['size'=>20])?>
			</li>
			<li>
			<select class="combox" name="CustomerTable[area_id]">
				<option value="">所有省市</option>
				<option value="1">北京</option>
				<option value="2">上海</option>
				<option value="3">天津</option>
				<option value="4">重庆</option>
				<option value="5">广东</option>
			</select>
			</li>
		</ul>
		<div class="subBar">
			<ul>
				<li><div class="buttonActive"><div class="buttonContent"><button type="submit">搜索</button></div></div></li>
				<li><a class="button" href="demo_page6.html" target="dialog" mask="true" title="查询框"><span>查询全部</span></a></li>
			</ul>
		</div>
	</div>
	</form>
	<?php ActiveForm::end(); ?> 
</div>

<div class="pageContent">
	<div class="panelBar">
		<ul class="toolBar">
			<li><a class="add" href="<?=Url::toRoute('/customer/customer/create') ?>" target="dialog" mask="true"><span>添加客户</span></a></li>
            <li><a class="icon" href="<?=Url::toRoute(['/customer/customer/refreshtab','tabId'=>'']) ?>" target="ajaxTodo"><span>刷新</span></a></li>
		</ul>
	</div>

	    <?= GridView::widget([
    'dataProvider' => $dataProvider,
    //'filterModel' => $model,
    'sorter' => ['name','id','regid','jgid','product_name'],
    'columns' => [
        [
            'attribute' => 'id',
        ],
        [
            'attribute' => 'name',
        ],
        [
            'attribute' => 'regid',
            'options'=> ['style'=>'width:100px']
        ],
        [
            'attribute' => 'jgid',
            'options'=> ['style'=>'width:100px']
        ],
        [
            'header' => '软件版本',
            'attribute' => 'product_name',
            'value' => 'products.name'
        ],
        [
            'header' => '操作',
            'class' => 'tksoft\dwz\widgets\ActionColumn',
        ],
    ],
]);
    
</div>
*/
?>	
<?=$content; ?>

<?php $this->endBody() ?>
<?php $this->endPage() ?>