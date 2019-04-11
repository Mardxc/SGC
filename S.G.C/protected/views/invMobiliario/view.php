<?php
/* @var $this InvMobiliarioController */
/* @var $model InvMobiliario */

$this->breadcrumbs=array(
	'Inv Mobiliarios'=>array('index'),
	$model->id_mobiliario,
);

$this->menu=array(
	array('label'=>'List InvMobiliario', 'url'=>array('index')),
	array('label'=>'Create InvMobiliario', 'url'=>array('create')),
	array('label'=>'Update InvMobiliario', 'url'=>array('update', 'id'=>$model->id_mobiliario)),
	array('label'=>'Delete InvMobiliario', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_mobiliario),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage InvMobiliario', 'url'=>array('admin')),
);
?>

<h1>View InvMobiliario #<?php echo $model->id_mobiliario; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_mobiliario',
		'descripcion',
		'id_tipo',
		'id_categoria',
		'id_inv_lugar',
	),
)); ?>
