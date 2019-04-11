<?php
/* @var $this ConServiciosController */
/* @var $model ConServicios */

$this->menu=array(
	array('label'=>'Contratos', 'url'=>array('ConContrato/admin')),
	array('label'=>'Cliente', 'url'=>array('ConCliente/admin')),
	array('label'=>'Servicios', 'url'=>array('ConServicios/admin')),
);
?>

<h1>Actualizar <?php echo $model->servicio; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>