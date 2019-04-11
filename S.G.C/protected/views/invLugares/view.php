<?php
/* @var $this InvLugaresController */
/* @var $model InvLugares */

$this->breadcrumbs=array(
	'Inv Lugares'=>array('index'),
	$model->id_inv_lugar,
);

$this->menu=array(
	array('label'=>'List InvLugares', 'url'=>array('index')),
	array('label'=>'Create InvLugares', 'url'=>array('create')),
	array('label'=>'Update InvLugares', 'url'=>array('update', 'id'=>$model->id_inv_lugar)),
	array('label'=>'Delete InvLugares', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_inv_lugar),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage InvLugares', 'url'=>array('admin')),
);
?>

<h1>View InvLugares #<?php echo $model->id_inv_lugar; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_inv_lugar',
		'nombre',
		'calle',
		'numero',
		'telefono',
	),
)); ?>
