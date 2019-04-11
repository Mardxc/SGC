<?php
/* @var $this EvTipoEventoController */
/* @var $model EvTipoEvento */

$this->breadcrumbs=array(
	'Ev Tipo Eventos'=>array('index'),
	$model->id_eve_tipo_evento,
);

$this->menu=array(
	array('label'=>'List EvTipoEvento', 'url'=>array('index')),
	array('label'=>'Create EvTipoEvento', 'url'=>array('create')),
	array('label'=>'Update EvTipoEvento', 'url'=>array('update', 'id'=>$model->id_eve_tipo_evento)),
	array('label'=>'Delete EvTipoEvento', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_eve_tipo_evento),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage EvTipoEvento', 'url'=>array('admin')),
);
?>

<h1>View EvTipoEvento #<?php echo $model->id_eve_tipo_evento; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_eve_tipo_evento',
		'tipo',
	),
)); ?>
