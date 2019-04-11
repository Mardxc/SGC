<?php
/* @var $this ConEventoMobiliarioController */
/* @var $model ConEventoMobiliario */

$this->breadcrumbs=array(
	'Con Evento Mobiliarios'=>array('index'),
	$model->id_evento_mobiliario,
);

$this->menu=array(
	array('label'=>'List ConEventoMobiliario', 'url'=>array('index')),
	array('label'=>'Create ConEventoMobiliario', 'url'=>array('create')),
	array('label'=>'Update ConEventoMobiliario', 'url'=>array('update', 'id'=>$model->id_evento_mobiliario)),
	array('label'=>'Delete ConEventoMobiliario', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_evento_mobiliario),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ConEventoMobiliario', 'url'=>array('admin')),
);
?>

<h1>View ConEventoMobiliario #<?php echo $model->id_evento_mobiliario; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_evento_mobiliario',
		'id_mobiliario',
		'cantidad',
	),
)); ?>
