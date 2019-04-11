<?php
/* @var $this ConEventoMobiliarioController */
/* @var $model ConEventoMobiliario */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'con-evento-mobiliario-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id_evento_mobiliario'); ?>
		<?php echo $form->textField($model,'id_evento_mobiliario'); ?>
		<?php echo $form->error($model,'id_evento_mobiliario'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_mobiliario'); ?>
		<?php echo $form->textField($model,'id_mobiliario'); ?>
		<?php echo $form->error($model,'id_mobiliario'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cantidad'); ?>
		<?php echo $form->textField($model,'cantidad'); ?>
		<?php echo $form->error($model,'cantidad'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->