<?php
/* @var $this ConCostosServiciosController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Con Costos Servicioses',
);

$this->menu=array(
	array('label'=>'Create ConCostosServicios', 'url'=>array('create')),
	array('label'=>'Manage ConCostosServicios', 'url'=>array('admin')),
);
?>

<h1>Con Costos Servicioses</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
