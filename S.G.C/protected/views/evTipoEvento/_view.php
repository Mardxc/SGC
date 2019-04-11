<?php
/* @var $this EvTipoEventoController */
/* @var $data EvTipoEvento */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_eve_tipo_evento')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_eve_tipo_evento), array('view', 'id'=>$data->id_eve_tipo_evento)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipo')); ?>:</b>
	<?php echo CHtml::encode($data->tipo); ?>
	<br />


</div>