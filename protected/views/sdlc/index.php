<?php
/* @var $this SdlcController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Sdlcs',
);

$this->menu=array(
	array('label'=>'Create Sdlc', 'url'=>array('create')),
	array('label'=>'Manage Sdlc', 'url'=>array('admin')),
);
?>

<h1>Sdlcs</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
