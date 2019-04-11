<?php
/* @var $this ConDetServiciosController */
/* @var $model ConDetServicios */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'con-det-servicios-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id_det_servicios'); ?>
		<?php echo $form->textField($model,'id_det_servicios'); ?>
		<?php echo $form->error($model,'id_det_servicios'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_contrato'); ?>
		<?php echo $form->textField($model,'id_contrato'); ?>
		<?php echo $form->error($model,'id_contrato'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_servicio'); ?>
		<?php echo $form->textField($model,'id_servicio'); ?>
		<?php echo $form->error($model,'id_servicio'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->