<?php
/* @var $this InvLugaresController */
/* @var $data InvLugares */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_inv_lugar')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_inv_lugar), array('view', 'id'=>$data->id_inv_lugar)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('calle')); ?>:</b>
	<?php echo CHtml::encode($data->calle); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('numero')); ?>:</b>
	<?php echo CHtml::encode($data->numero); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('telefono')); ?>:</b>
	<?php echo CHtml::encode($data->telefono); ?>
	<br />


</div>