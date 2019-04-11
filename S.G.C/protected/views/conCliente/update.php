<?php
/* @var $this ConClienteController */
/* @var $model ConCliente */

$this->menu=array(
	array('label'=>'Contratos', 'url'=>array('ConContrato/admin')),
	array('label'=>'Cliente', 'url'=>array('ConCliente/admin')),
	array('label'=>'Servicios', 'url'=>array('ConServicios/admin')),
);
?>

<h1>Actualizar <?php echo $model->nombre, " ", $model->ape_pat, " ", $model->ape_mat; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>