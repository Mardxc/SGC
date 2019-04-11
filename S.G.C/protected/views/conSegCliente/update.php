<?php
/* @var $this ConSegClienteController */
/* @var $model ConSegCliente */

$this->breadcrumbs=array(
	'Con Seg Clientes'=>array('index'),
	$model->id_seg_cliente=>array('view','id'=>$model->id_seg_cliente),
	'Update',
);

$this->menu=array(
	array('label'=>'List ConSegCliente', 'url'=>array('index')),
	array('label'=>'Create ConSegCliente', 'url'=>array('create')),
	array('label'=>'View ConSegCliente', 'url'=>array('view', 'id'=>$model->id_seg_cliente)),
	array('label'=>'Manage ConSegCliente', 'url'=>array('admin')),
);
?>

<h1>Update ConSegCliente <?php echo $model->id_seg_cliente; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>