<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'boards-form',
	'enableClientValidation'=>true,
)); ?>

	<p class="note"><span class="required">*</span> 為必填欄位.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'title'); ?>
		<?php echo $form->textField($model,'title',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tips'); ?>
		<?php echo $form->textArea($model,'tips',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'tips'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'content'); ?>
		<?php echo $form->textArea($model,'content',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'content'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'publish'); ?>
		<?php echo $form->dropDownList($model,'publish',array(0=>'下架',1=>'上架')); ?>
		<?php echo $form->error($model,'content'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'weight'); ?>
		<?php echo $form->textField($model,'weight',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'weight'); ?>
	</div>
	
	<div class="row buttons">
		<?php echo $form->hiddenField($model,'taxonomy_id',array('value'=>1)); ?>
		<?php echo CHtml::submitButton($model->isNewRecord ? '新增' : '儲存'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
<script type="text/javascript">
$(function(){
	$('#Boards_content').ckeditor({
		width:'650px',
		height:'200px'
	});
});
</script>
