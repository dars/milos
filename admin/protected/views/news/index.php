<?php
$this->breadcrumbs=array(
	'最新消息',
);

$this->menu=array(
	array('label'=>'建立最新消息', 'url'=>array('create'))
);
?>

<h1>最新消息列表</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
