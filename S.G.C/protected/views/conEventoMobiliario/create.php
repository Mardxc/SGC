<?php
/* @var $this ConEventoMobiliarioController */
/* @var $model ConEventoMobiliario */

$this->breadcrumbs=array(
	'Con Evento Mobiliarios'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ConEventoMobiliario', 'url'=>array('index')),
	array('label'=>'Manage ConEventoMobiliario', 'url'=>array('admin')),
);
?>

<h1>Create ConEventoMobiliario</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>