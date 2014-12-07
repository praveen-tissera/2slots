<?php
/* @var $this SdlcController */
/* @var $model Sdlc */

$this->breadcrumbs=array(
	'Sdlcs'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Sdlc', 'url'=>array('index')),
	array('label'=>'Create Sdlc', 'url'=>array('create')),
	array('label'=>'View Sdlc', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Sdlc', 'url'=>array('admin')),
);
?>

<h1>Update Sdlc <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>