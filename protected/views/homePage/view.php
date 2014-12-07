<?php
/* @var $this HomePageController */
/* @var $model HomePage */

$this->breadcrumbs=array(
	'Home Pages'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List HomePage', 'url'=>array('index')),
	array('label'=>'Create HomePage', 'url'=>array('create')),
	array('label'=>'Update HomePage', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete HomePage', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage HomePage', 'url'=>array('admin')),
);
?>

<h1>View HomePage #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'alliance',
		'content',
		'status',
	),
)); ?>
