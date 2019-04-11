<?php
/* @var $this ConDetServiciosController */
/* @var $model ConDetServicios */

$this->breadcrumbs=array(
	'Con Det Servicioses'=>array('index'),
	$model->id_det_servicios=>array('view','id'=>$model->id_det_servicios),
	'Update',
);

$this->menu=array(
	array('label'=>'List ConDetServicios', 'url'=>array('index')),
	array('label'=>'Create ConDetServicios', 'url'=>array('create')),
	array('label'=>'View ConDetServicios', 'url'=>array('view', 'id'=>$model->id_det_servicios)),
	array('label'=>'Manage ConDetServicios', 'url'=>array('admin')),
);
?>

<h1>Update ConDetServicios <?php echo $model->id_det_servicios; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>