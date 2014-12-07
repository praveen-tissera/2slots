<?php
/* @var $this SdlcController */
/* @var $model Sdlc */

$this->breadcrumbs=array(
	'Sdlcs'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Sdlc', 'url'=>array('index')),
	array('label'=>'Create Sdlc', 'url'=>array('create')),
	array('label'=>'Update Sdlc', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Sdlc', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Sdlc', 'url'=>array('admin')),
);
?>

<h1>View Sdlc #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
	),
)); ?>
