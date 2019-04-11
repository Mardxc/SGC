<?php
/* @var $this ConDetServiciosController */
/* @var $model ConDetServicios */

$this->breadcrumbs=array(
	'Con Det Servicioses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ConDetServicios', 'url'=>array('index')),
	array('label'=>'Manage ConDetServicios', 'url'=>array('admin')),
);
?>

<h1>Create ConDetServicios</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>