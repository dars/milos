<?php
$this->breadcrumbs=array(
	'最新消息'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'最新消息列表', 'url'=>array('index')),
	array('label'=>'編輯最新消息', 'url'=>array('admin')),
);
?>
<h1>新增最新消息</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>