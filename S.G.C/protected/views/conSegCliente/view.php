<?php
/* @var $this ConSegClienteController */
/* @var $model ConSegCliente */

$this->breadcrumbs=array(
	'Con Seg Clientes'=>array('index'),
	$model->id_seg_cliente,
);

$this->menu=array(
	array('label'=>'List ConSegCliente', 'url'=>array('index')),
	array('label'=>'Create ConSegCliente', 'url'=>array('create')),
	array('label'=>'Update ConSegCliente', 'url'=>array('update', 'id'=>$model->id_seg_cliente)),
	array('label'=>'Delete ConSegCliente', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_seg_cliente),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ConSegCliente', 'url'=>array('admin')),
);
?>

<h1>View ConSegCliente #<?php echo $model->id_seg_cliente; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_seg_cliente',
		'id_cliente',
		'id_contrato',
	),
)); ?>
