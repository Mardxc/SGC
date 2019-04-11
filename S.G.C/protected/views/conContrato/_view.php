<?php
/* @var $this ConContratoController */
/* @var $data ConContrato */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_contrato')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_contrato), array('view', 'id'=>$data->id_contrato)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_evento')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_evento); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hora_inicial')); ?>:</b>
	<?php echo CHtml::encode($data->hora_inicial); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_inv_lugar')); ?>:</b>
	<?php echo CHtml::encode($data->id_inv_lugar); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipo_evento')); ?>:</b>
	<?php echo CHtml::encode($data->tipo_evento); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('asistentes')); ?>:</b>
	<?php echo CHtml::encode($data->asistentes); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hora_final')); ?>:</b>
	<?php echo CHtml::encode($data->hora_final); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('direccion_evento')); ?>:</b>
	<?php echo CHtml::encode($data->direccion_evento); ?>
	<br />

	*/ ?>

</div>