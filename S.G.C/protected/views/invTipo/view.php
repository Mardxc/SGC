<?php
/* @var $this InvTipoController */
/* @var $model InvTipo */

$this->breadcrumbs=array(
	'Inv Tipos'=>array('index'),
	$model->id_tipo,
);

$this->menu=array(
	array('label'=>'List InvTipo', 'url'=>array('index')),
	array('label'=>'Create InvTipo', 'url'=>array('create')),
	array('label'=>'Update InvTipo', 'url'=>array('update', 'id'=>$model->id_tipo)),
	array('label'=>'Delete InvTipo', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_tipo),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage InvTipo', 'url'=>array('admin')),
);
?>

<h1>View InvTipo #<?php echo $model->id_tipo; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_tipo',
		'tipo',
	),
)); ?>
