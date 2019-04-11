<?php
/* @var $this RhPersonalController */
/* @var $model RhPersonal */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_personal'); ?>
		<?php echo $form->textField($model,'id_personal'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'rh_nombre'); ?>
		<?php echo $form->textField($model,'rh_nombre',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'rh_ape_pat'); ?>
		<?php echo $form->textField($model,'rh_ape_pat',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'rh_ape_mat'); ?>
		<?php echo $form->textField($model,'rh_ape_mat',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'rh_telefono'); ?>
		<?php echo $form->textField($model,'rh_telefono',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->