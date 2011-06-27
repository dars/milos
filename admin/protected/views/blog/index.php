<style type="text/css">
label{
	display:block;
	margin-bottom:3px;
	margin-top:5px;
}
textarea,input[type='text']{
	width:400px;
}
.data-list div{
	float:left;
}
.data-list{
	padding-left:150px;
	border-bottom:1px #CCC dotted;
	margin-bottom:15px;
	padding-bottom:10px;
}
.num{
	text-align:right;
	font-size: 30px;
	width:100px;
	background:#EEE;
	padding:15px;
	height:auto;
	border-right:5px #CCC solid;
	margin-right:10px;
}
.up_pix_btn{
	font-size: 12px;
	display:block;
	text-decoration:none;
	color:#5F597E;
}
.up_pix_btn:hover{
	color:#00F;
}
</style>
<form method="post" name="form1" id="form1">
	<?php
		$i=0;
		foreach($model as $m):
			echo '<div class="data-list">';
			echo '<input type="hidden" name="id[]" value='.$m->id.'>';
			echo '<div class="num">'.($i+1).'.';
			echo '<a id="up_'.$i.'" href="javascript:void(0)" class="up_pix_btn">上傳圖片</a>';
			echo '<input type="hidden" id="name_'.$i.'" name="uuid[]">';
			echo '<div id="pix_'.$i.'">';
			if($m->uuid != ''){
				echo '<img src='.Yii::app()->request->baseUrl.'/upload/'.$m->uuid.' class="up_pix">';
			}
			echo '</div>';
			echo '</div>';
			echo '<div>';
			echo '<label>標題</label>';
			echo '<input type="text" name="tips[]" id="tips_'.$i.'" value=\''.$m->tips.'\'>';
			echo '<label>簡介</label>';
			echo '<textarea name="content[]" id="content_'.$i.'">'.$m->content.'</textarea>';
			echo '<label>連結網址</label>';
			echo '<input type="text" name="service[]" id="service_'.$i.'" value='.$m->service.'>';
			echo '</div>';
			echo '<div style="float:none;clear:both"></div>';
			echo '</div>';
			$i++;
		endforeach;
	?>
	<?php echo CHtml::button('儲存',array('id'=>'form_sub_btn')); ?>
</form>
<script type="text/javascript">
var curr;
$('.up_pix_btn').click(function(){
	curr = $(this).attr('id').split('_')[1];
	$.fancybox({
		'scrolling':'no',
		'type':'iframe',
		'autoScale':true,
		'href':'<?php echo Yii::app()->request->baseUrl?>/filehandler/'
	});
});
function savePix(f){
	var tmp = new Image();
	$('#name_'+curr).val(f[0].target_name);
	tmp.src = base_url + 'upload/' + f[0].target_name;
	tmp.onload = function(){
		$('#pix_'+curr).html('<img src='+tmp.src+' class="up_pix">');
	}
}
$('#form_sub_btn').click(function(){
	var params = $('#form1').serialize();
	$.ajax({
		url:base_url + 'blog/',
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
})
</script>