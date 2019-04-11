<?php
/* @var $this ProProvedoresController */
/* @var $model ProProvedores */

$this->breadcrumbs=array(
	'Pro Provedores'=>array('index'),
	$model->id_proveedor,
);

$this->menu=array(
	array('label'=>'List ProProvedores', 'url'=>array('index')),
	array('label'=>'Create ProProvedores', 'url'=>array('create')),
	array('label'=>'Update ProProvedores', 'url'=>array('update', 'id'=>$model->id_proveedor)),
	array('label'=>'Delete ProProvedores', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_proveedor),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ProProvedores', 'url'=>array('admin')),
);
?>

<h1>View ProProvedores #<?php echo $model->id_proveedor; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_proveedor',
		'pro_nombre',
		'pro_direccion',
		'pro_telefono',
		'pro_producto',
	),
)); ?>
