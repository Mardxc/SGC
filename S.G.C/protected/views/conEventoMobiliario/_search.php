<?php
/* @var $this ConEventoMobiliarioController */
/* @var $model ConEventoMobiliario */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_evento_mobiliario'); ?>
		<?php echo $form->textField($model,'id_evento_mobiliario'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_mobiliario'); ?>
		<?php echo $form->textField($model,'id_mobiliario'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cantidad'); ?>
		<?php echo $form->textField($model,'cantidad'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->