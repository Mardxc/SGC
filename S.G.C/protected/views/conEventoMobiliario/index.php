<?php
/* @var $this ConEventoMobiliarioController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Con Evento Mobiliarios',
);

$this->menu=array(
	array('label'=>'Create ConEventoMobiliario', 'url'=>array('create')),
	array('label'=>'Manage ConEventoMobiliario', 'url'=>array('admin')),
);
?>

<h1>Con Evento Mobiliarios</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
