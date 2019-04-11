<?php
/* @var $this ConSegClienteController */
/* @var $model ConSegCliente */

$this->breadcrumbs=array(
	'Con Seg Clientes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ConSegCliente', 'url'=>array('index')),
	array('label'=>'Manage ConSegCliente', 'url'=>array('admin')),
);
?>

<h1>Create ConSegCliente</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>