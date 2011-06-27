<?php
$this->breadcrumbs=array(
	'整形手術',
);?>
<h1>內容編輯</h1>
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'plastic-form',
	'enableAjaxValidation'=>false,
)); ?>
<div class="form">
	<label>類別：</label>
	<?php echo $form->dropDownList($model,'taxonomy_id', CHtml::listData(Taxonomy::model()->findAll(array('condition'=>'parent_id=10')), 'id', 'name'), array('empty'=>'---')); ?>
</div>
<div class="form">
	<label>圖片：</label>
	<div id="uuid_pix"></div>
	<?php echo $form->hiddenField($model,'uuid');?>
	<a href="javascript:void(0)" class="up_pix_btn">上傳圖檔</a>
</div>
<div class="form">
	<label>簡介：</label>
	<?php echo $form->textArea($model,'tips');?>
</div>
<div class="form">
	<label>內容：</label>
	<?php echo $form->textArea($model,'content');?>
</div>
<div class="form">
	<label>服務項目：</label>
	<?php echo $form->textField($model,'service');?>
</div>
<div class="form">
	<label>精選術前術後：</label>
	<a href="javascript:void(0)" id="up_his_pix_btn">上傳術前術後圖片</a>
	<div id="hisBlocks">
		
	</div>
</div>
<div class="row buttons">
	<?php echo CHtml::button('儲存',array('id'=>'form_sub_btn')); ?>
</div>
<?php $this->endWidget();?>
<script type="text/javascript">
function refresh_his(){
	$.ajax({
		url:base_url+'pix/'+$('#Content_taxonomy_id').val(),
		success:function(data){
			$('#hisBlocks').html(data);
		}
	});
}
$('#up_his_pix_btn').click(function(){
	if($('#Content_taxonomy_id').val() == ''){
		alert('請先選擇類別');
		return false;
	}
	$.fancybox({
		'scrolling':'no',
		'type':'iframe',
		'autoScale':true,
		'href':'<?php echo Yii::app()->request->baseUrl?>/filehandler/?type=his'
	});
});
$('.del_his').live('click',function(){
	var flag = confirm('確定刪除？');
	if(flag){
		$(this).parent().parent().fadeOut();
		$.ajax({
			url:base_url + 'pix/delete/',
			data:'id='+$(this).parent().parent().attr('id').split('_')[1],
			success:function(){
				
			}
		});
	}
});
$('#Content_content').ckeditor();
$('.up_pix_btn').click(function(){
	if($('#Content_taxonomy_id').val() == ''){
		alert('請先選擇類別');
		return false;
	}
	$.fancybox({
		'scrolling':'no',
		'type':'iframe',
		'autoScale':true,
		'href':'<?php echo Yii::app()->request->baseUrl?>/filehandler/'
	});
});
function savePix(f,type){
	if(type != 'his'){
		var tmp = new Image();
		$('#Content_uuid').val(f[0].target_name);
		tmp.src = base_url + 'upload/' + f[0].target_name;
		tmp.onload = function(){
			$('#uuid_pix').html('<img src='+tmp.src+' class="up_pix">');
		}
	}else{
		$.ajax({
			url:base_url+'pix/',
			type:'post',
			dataType:'json',
			data:'f='+f[0].target_name+'&taxonomy_id='+$('#Content_taxonomy_id').val(),
			success:function(){
				refresh_his()
			}
		});
	}
}
function getData(id){
	$.ajax({
		url:base_url+'plastic/'+id,
		dataType:'json',
		success:function(data){
			if(data != null){
				if(data.uuid != null){
					$('#Content_uuid').val(data.uuid);
					var tmp = new Image();
					tmp.src = base_url + 'upload/' + data.uuid;
					$('#uuid_pix').html('<img src='+tmp.src+' class="up_pix">');
				}else{
					$('#Content_uuid').val('');
					$('#uuid_pix').html('');
				}
				$('#Content_tips').val(data.tips);
				$('#Content_uuid').val(data.uuid);
				$('#Content_content').val(data.content);
				$('#Content_service').val(data.service);
				refresh_his();
			}else{
				$('#uuid_pix').html('');
				$('#Content_tips').val('');
				$('#Content_uuid').val('');
				$('#Content_content').val('');
				$('#Content_service').val('');
				alert('it\'s new data!!');
			}
		}
	});
}
$('#Content_taxonomy_id').change(function(){
	if($(this).val() !== ''){
		getData($(this).val());
	}
});
$('#form_sub_btn').click(function(){
	if($('#Content_taxonomy_id').val() == ''){
		alert('請先選擇類別');
		return false;
	}
	if($('#Content_tips').val()<1){
		alert('請輸入簡介文字');
		return false;
	}
	if($('#Content_content').val()<1){
		alert('請輸入內容文字');
		return false;
	}
	if($('#Content_service').val()<1){
		alert('請輸入服務內容');
		return false;
	}
	var params = $('#plastic-form').serialize();
	$.ajax({
		url:base_url + 'plastic/',
		type:'post',
		dataType:'json',
		data:params,
		success:function(data){
			if(data.success){
				alert('儲存完成');
			}else{
				alert('儲存失敗');
			}
		}
	});
});
</script>