<?php
/* @var $this ConSegClienteController */
/* @var $data ConSegCliente */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_seg_cliente')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_seg_cliente), array('view', 'id'=>$data->id_seg_cliente)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_cliente')); ?>:</b>
	<?php echo CHtml::encode($data->id_cliente); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_contrato')); ?>:</b>
	<?php echo CHtml::encode($data->id_contrato); ?>
	<br />


</div>