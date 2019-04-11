<?php
/* @var $this ConCostosServiciosController */
/* @var $model ConCostosServicios */

$this->breadcrumbs=array(
	'Con Costos Servicioses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ConCostosServicios', 'url'=>array('index')),
	array('label'=>'Manage ConCostosServicios', 'url'=>array('admin')),
);
?>

<h1>Create ConCostosServicios</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>