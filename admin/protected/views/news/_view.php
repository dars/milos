<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('title')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->title), array('update', 'id'=>$data->id)); ?>
	<br /><br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('content')); ?>:</b>
	<?php echo CHtml::encode(mb_substr(strip_tags($data->content),0,70,'utf8')); ?>...
	<br />
	
	<div style="text-align:right;padding-right:10px;">
		<b><?php echo CHtml::encode($data->getAttributeLabel('created_at')); ?>:</b>
		<?php echo CHtml::encode($data->created_at); ?>
		<b><?php echo CHtml::encode($data->getAttributeLabel('updated_at')); ?>:</b>
		<?php echo CHtml::encode($data->updated_at); ?>
	</div>
</div>