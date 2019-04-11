<?php
/* @var $this ProProvedoresController */
/* @var $data ProProvedores */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_proveedor')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_proveedor), array('view', 'id'=>$data->id_proveedor)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pro_nombre')); ?>:</b>
	<?php echo CHtml::encode($data->pro_nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pro_direccion')); ?>:</b>
	<?php echo CHtml::encode($data->pro_direccion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pro_telefono')); ?>:</b>
	<?php echo CHtml::encode($data->pro_telefono); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pro_producto')); ?>:</b>
	<?php echo CHtml::encode($data->pro_producto); ?>
	<br />


</div>