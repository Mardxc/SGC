<?php
/* @var $this InvLugaresController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Inv Lugares',
);

$this->menu=array(
	array('label'=>'Create InvLugares', 'url'=>array('create')),
	array('label'=>'Manage InvLugares', 'url'=>array('admin')),
);
?>

<h1>Inv Lugares</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
