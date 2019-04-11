<?php
/* @var $this RhPersonalController */
/* @var $data RhPersonal */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_personal')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_personal), array('view', 'id'=>$data->id_personal)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rh_nombre')); ?>:</b>
	<?php echo CHtml::encode($data->rh_nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rh_ape_pat')); ?>:</b>
	<?php echo CHtml::encode($data->rh_ape_pat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rh_ape_mat')); ?>:</b>
	<?php echo CHtml::encode($data->rh_ape_mat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rh_telefono')); ?>:</b>
	<?php echo CHtml::encode($data->rh_telefono); ?>
	<br />


</div>