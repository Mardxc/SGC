<?php
/* @var $this RhPersonalController */
/* @var $model RhPersonal */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'rh-personal-form',
	'enableAjaxValidation'=>false,
)); ?>
<table>
	<?php echo $form->errorSummary($model); ?>
	<tr>
		<td>
			<?php echo $form->labelEx($model,'nombre'); ?>
		</td>
		<td>
			<?php echo $form->textField($model,'rh_nombre',array('size'=>45,'maxlength'=>45)); ?>
			<?php echo $form->error($model,'rh_nombre'); ?>
		</td>
	</tr>
	<tr>
		<td>
			<?php echo $form->labelEx($model,'Apellido Paterno'); ?>
		</td>
		<td>
			<?php echo $form->textField($model,'rh_ape_pat',array('size'=>45,'maxlength'=>45)); ?>
			<?php echo $form->error($model,'rh_ape_pat'); ?>
		</td>
	</tr>
	<tr>
		<td>
			<?php echo $form->labelEx($model,'Apellido Materno'); ?>
		</td>
		<td>
			<?php echo $form->textField($model,'rh_ape_mat',array('size'=>45,'maxlength'=>45)); ?>
			<?php echo $form->error($model,'rh_ape_mat'); ?>
		</td>
	</tr>
	<tr>
		<td>
			<?php echo $form->labelEx($model,'telefono'); ?>
		</td>
		<td>
			<?php echo $form->textField($model,'rh_telefono',array('size'=>45,'maxlength'=>45)); ?>
			<?php echo $form->error($model,'rh_telefono'); ?>
		</td>
	</tr>
	<tr>
		<td>
			<?php echo CHtml::submitButton($model->isNewRecord ? 'Guardar' : 'Actualizar'); ?>
		</td>
	</tr>
</table>
	
	<div class="row buttons">
		
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->