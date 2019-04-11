<?php
/* @var $this ConCostosServiciosController */
/* @var $model ConCostosServicios */

$this->breadcrumbs=array(
	'Con Costos Servicioses'=>array('index'),
	$model->id_costo=>array('view','id'=>$model->id_costo),
	'Update',
);

$this->menu=array(
	array('label'=>'List ConCostosServicios', 'url'=>array('index')),
	array('label'=>'Create ConCostosServicios', 'url'=>array('create')),
	array('label'=>'View ConCostosServicios', 'url'=>array('view', 'id'=>$model->id_costo)),
	array('label'=>'Manage ConCostosServicios', 'url'=>array('admin')),
);
?>

<h1>Update ConCostosServicios <?php echo $model->id_costo; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>