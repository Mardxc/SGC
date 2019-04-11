<?php
/* @var $this ConEventoMobiliarioController */
/* @var $data ConEventoMobiliario */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_evento_mobiliario')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_evento_mobiliario), array('view', 'id'=>$data->id_evento_mobiliario)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_mobiliario')); ?>:</b>
	<?php echo CHtml::encode($data->id_mobiliario); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cantidad')); ?>:</b>
	<?php echo CHtml::encode($data->cantidad); ?>
	<br />


</div>