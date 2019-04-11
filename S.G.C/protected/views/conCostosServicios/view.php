<?php
/* @var $this ConCostosServiciosController */
/* @var $model ConCostosServicios */

$this->breadcrumbs=array(
	'Con Costos Servicioses'=>array('index'),
	$model->id_costo,
);

$this->menu=array(
	array('label'=>'List ConCostosServicios', 'url'=>array('index')),
	array('label'=>'Create ConCostosServicios', 'url'=>array('create')),
	array('label'=>'Update ConCostosServicios', 'url'=>array('update', 'id'=>$model->id_costo)),
	array('label'=>'Delete ConCostosServicios', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_costo),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ConCostosServicios', 'url'=>array('admin')),
);
?>

<h1>View ConCostosServicios #<?php echo $model->id_costo; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_costo',
		'costo',
		'fecha',
		'status',
	),
)); ?>
