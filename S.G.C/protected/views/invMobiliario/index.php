<?php
/* @var $this InvMobiliarioController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Inv Mobiliarios',
);

$this->menu=array(
	array('label'=>'Create InvMobiliario', 'url'=>array('create')),
	array('label'=>'Manage InvMobiliario', 'url'=>array('admin')),
);
?>

<h1>Inv Mobiliarios</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
