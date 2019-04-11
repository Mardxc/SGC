<?php
/* @var $this ConContratoController */
/* @var $model ConContrato */

$this->breadcrumbs=array(
	'Con Contratos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ConContrato', 'url'=>array('index')),
	array('label'=>'Manage ConContrato', 'url'=>array('admin')),
);
?>

<h1>Create ConContrato</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>