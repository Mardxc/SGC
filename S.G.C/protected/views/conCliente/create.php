<?php
/* @var $this ConClienteController */
/* @var $model ConCliente */

$this->breadcrumbs=array(
	'Con Clientes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ConCliente', 'url'=>array('index')),
	array('label'=>'Manage ConCliente', 'url'=>array('admin')),
);
?>

<h1>Create ConCliente</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>