<?php
/* @var $this ConDetServiciosController */
/* @var $data ConDetServicios */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_det_servicios')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_det_servicios), array('view', 'id'=>$data->id_det_servicios)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_contrato')); ?>:</b>
	<?php echo CHtml::encode($data->id_contrato); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_servicio')); ?>:</b>
	<?php echo CHtml::encode($data->id_servicio); ?>
	<br />


</div>