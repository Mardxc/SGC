<?php
/* @var $this ConDetServiciosController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Con Det Servicioses',
);

$this->menu=array(
	array('label'=>'Create ConDetServicios', 'url'=>array('create')),
	array('label'=>'Manage ConDetServicios', 'url'=>array('admin')),
);
?>

<h1>Con Det Servicioses</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
