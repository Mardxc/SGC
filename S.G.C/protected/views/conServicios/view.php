<?php
/* @var $this ConServiciosController */
/* @var $model ConServicios */

$this->breadcrumbs=array(
	'Con Servicioses'=>array('index'),
	$model->id_servicio,
);

$this->menu=array(
	array('label'=>'List ConServicios', 'url'=>array('index')),
	array('label'=>'Create ConServicios', 'url'=>array('create')),
	array('label'=>'Update ConServicios', 'url'=>array('update', 'id'=>$model->id_servicio)),
	array('label'=>'Delete ConServicios', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_servicio),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ConServicios', 'url'=>array('admin')),
);
?>

<h1>View ConServicios #<?php echo $model->id_servicio; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_servicio',
		'servicio',
		'descripcion',
		'costo',
		'status',
	),
)); ?>
