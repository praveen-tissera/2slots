<?php
/* @var $this HomePageController */
/* @var $model HomePage */

$this->breadcrumbs=array(
	'Home Pages'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List HomePage', 'url'=>array('index')),
	array('label'=>'Manage HomePage', 'url'=>array('admin')),
);
?>

<h1>Create HomePage</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>