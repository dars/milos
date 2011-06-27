<?php
$this->breadcrumbs=array(
	'最新消息'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'最新消息列表', 'url'=>array('index')),
	array('label'=>'建立最新消息', 'url'=>array('create')),
	array('label'=>'檢視最新消息', 'url'=>array('view', 'id'=>$model->id)),
);
?>

<h1>編輯最新消息 #<?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>