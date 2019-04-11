<?php
/* @var $this InvMobiliarioController */
/* @var $data InvMobiliario */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_mobiliario')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_mobiliario), array('view', 'id'=>$data->id_mobiliario)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_tipo')); ?>:</b>
	<?php echo CHtml::encode($data->id_tipo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_categoria')); ?>:</b>
	<?php echo CHtml::encode($data->id_categoria); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_inv_lugar')); ?>:</b>
	<?php echo CHtml::encode($data->id_inv_lugar); ?>
	<br />


</div>