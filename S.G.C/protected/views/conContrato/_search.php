<?php
/* @var $this ConContratoController */
/* @var $model ConContrato */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_contrato'); ?>
		<?php echo $form->textField($model,'id_contrato'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fecha_evento'); ?>
		<?php echo $form->textField($model,'fecha_evento'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'hora_inicial'); ?>
		<?php echo $form->textField($model,'hora_inicial'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_inv_lugar'); ?>
		<?php echo $form->textField($model,'id_inv_lugar'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tipo_evento'); ?>
		<?php echo $form->textField($model,'tipo_evento',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'asistentes'); ?>
		<?php echo $form->textField($model,'asistentes'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'hora_final'); ?>
		<?php echo $form->textField($model,'hora_final'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'direccion_evento'); ?>
		<?php echo $form->textField($model,'direccion_evento',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->