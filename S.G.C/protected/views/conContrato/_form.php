<?php
/* @var $this ConContratoController */
/* @var $model ConContrato */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'con-contrato-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha_evento'); ?>
		<?php echo $form->textField($model,'fecha_evento'); ?>
		<?php echo $form->error($model,'fecha_evento'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'hora_inicial'); ?>
		<?php echo $form->textField($model,'hora_inicial'); ?>
		<?php echo $form->error($model,'hora_inicial'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_inv_lugar'); ?>
		<?php echo $form->textField($model,'id_inv_lugar'); ?>
		<?php echo $form->error($model,'id_inv_lugar'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tipo_evento'); ?>
		<?php echo $form->textField($model,'tipo_evento',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'tipo_evento'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'asistentes'); ?>
		<?php echo $form->textField($model,'asistentes'); ?>
		<?php echo $form->error($model,'asistentes'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'hora_final'); ?>
		<?php echo $form->textField($model,'hora_final'); ?>
		<?php echo $form->error($model,'hora_final'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'direccion_evento'); ?>
		<?php echo $form->textField($model,'direccion_evento',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'direccion_evento'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->