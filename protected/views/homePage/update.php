<?php
/* @var $this HomePageController */
/* @var $model HomePage */

$this->breadcrumbs=array(
	'Home Pages'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List HomePage', 'url'=>array('index')),
	array('label'=>'Create HomePage', 'url'=>array('create')),
	array('label'=>'View HomePage', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage HomePage', 'url'=>array('admin')),
);
?>

<h1>Update HomePage <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>