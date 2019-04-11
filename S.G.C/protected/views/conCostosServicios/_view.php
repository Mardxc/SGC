<?php
/* @var $this ConCostosServiciosController */
/* @var $data ConCostosServicios */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_costo')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_costo), array('view', 'id'=>$data->id_costo)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('costo')); ?>:</b>
	<?php echo CHtml::encode($data->costo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha')); ?>:</b>
	<?php echo CHtml::encode($data->fecha); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />


</div>