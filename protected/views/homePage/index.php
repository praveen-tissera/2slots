<?php
/* @var $this HomePageController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Home Pages',
);

$this->menu=array(
	array('label'=>'Create HomePage', 'url'=>array('create')),
	array('label'=>'Manage HomePage', 'url'=>array('admin')),
);
?>

<h1>Home Pages</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
