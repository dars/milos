<?php
$this->breadcrumbs=array(
	'最新消息'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'返回列表', 'url'=>array('index')),
	array('label'=>'建立最新消息', 'url'=>array('create')),
	array('label'=>'修改最新消息', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'刪除最新消息', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'確定刪除此筆資料?'))
);
?>

<h1>檢視最新消息 #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'title',
		'content:html',
		'created_at',
		'updated_at'
	),
)); ?>
