<?php
/* @var $this ConContratoController */
/* @var $model ConContrato */

$this->breadcrumbs=array(
	'Con Contratos'=>array('index'),
	$model->id_contrato=>array('view','id'=>$model->id_contrato),
	'Update',
);

$this->menu=array(
	array('label'=>'List ConContrato', 'url'=>array('index')),
	array('label'=>'Create ConContrato', 'url'=>array('create')),
	array('label'=>'View ConContrato', 'url'=>array('view', 'id'=>$model->id_contrato)),
	array('label'=>'Manage ConContrato', 'url'=>array('admin')),
);
?>

<h1>Update ConContrato <?php echo $model->id_contrato; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>