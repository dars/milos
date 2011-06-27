<?php foreach($model as $m){?>
	<div class="his_block" id="pix_<?php echo $m->id?>">
		<div><a href="javascript:void(0)" class="del_his"><img src="<?php echo Yii::app()->request->baseUrl?>/images/del_pix.png"></a></div>
		<div><img src="<?php echo Yii::app()->request->baseUrl?>/upload/<?php echo $m->name?>"></div>
		<div>
			<input type="hidden" name="his[id][]" value=<?php echo $m->id?>>
			<input type="hidden" name="his[name][]" value='<?php echo $m->name?>'>
			<textarea name="his[content][]"><?php echo $m->content?></textarea>
		</div>
		<div style="float:none;"></div>
	</div>
<?php }?>