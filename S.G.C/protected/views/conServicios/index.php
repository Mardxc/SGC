<?php
/* @var $this ConServiciosController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Con Servicioses',
);

$this->menu=array(
	array('label'=>'Create ConServicios', 'url'=>array('create')),
	array('label'=>'Manage ConServicios', 'url'=>array('admin')),
);
?>

<h1>Con Servicioses</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
