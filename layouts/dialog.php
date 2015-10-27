<?php
/**
 * 这个是DWZ的dialog 表单页面layout
 */
$this->beginPage();
$this->head();
$this->beginBody();
?>

<div class="pageContent">
<? //这里一般放activeform
/*
<?php $form = ActiveForm::begin();?>
    <div class="pageFormContent" layoutH="58">
    <?= $form->field($model, 'name')?>
    <?= $form->field($model, 'regid')?>
    <?= $form->field($model, 'jgid')?>
    
    <?//= $form->field($model, 'product_id')->dropDownList(ProductTable::productList(),['prompt'=>'===请选择==='])?>
    <?= $form->field($model, 'displayorder')?>
    <?= $form->field($model, 'description')->textarea(['col'=>10, 'rows'=>"4"])?>
    </div>
	<div class="formBar">
		<ul>
			<li><div class="buttonActive">
					<div class="buttonContent">
						<button type="submit">提交</button>
					</div>
				</div></li>
			<li><div class="button">
					<div class="buttonContent">
						<button type="button" class="close">取消</button>
					</div>
				</div></li>
		</ul>
	</div>
<?php ActiveForm::end(); ?>
 */
?>
<?=$content; ?>

</div>
 
<?php $this->endBody() ?>
<?php $this->endPage() ?>