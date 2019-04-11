<?php
/* @var $this EvTipoEventoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Ev Tipo Eventos',
);

$this->menu=array(
	array('label'=>'Create EvTipoEvento', 'url'=>array('create')),
	array('label'=>'Manage EvTipoEvento', 'url'=>array('admin')),
);
?>

<h1>Ev Tipo Eventos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
