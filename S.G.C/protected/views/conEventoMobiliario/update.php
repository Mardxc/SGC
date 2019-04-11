<?php
/* @var $this ConEventoMobiliarioController */
/* @var $model ConEventoMobiliario */

$this->breadcrumbs=array(
	'Con Evento Mobiliarios'=>array('index'),
	$model->id_evento_mobiliario=>array('view','id'=>$model->id_evento_mobiliario),
	'Update',
);

$this->menu=array(
	array('label'=>'List ConEventoMobiliario', 'url'=>array('index')),
	array('label'=>'Create ConEventoMobiliario', 'url'=>array('create')),
	array('label'=>'View ConEventoMobiliario', 'url'=>array('view', 'id'=>$model->id_evento_mobiliario)),
	array('label'=>'Manage ConEventoMobiliario', 'url'=>array('admin')),
);
?>

<h1>Update ConEventoMobiliario <?php echo $model->id_evento_mobiliario; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>