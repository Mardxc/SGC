<?php
/* @var $this ConClienteController */
/* @var $model ConCliente */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'con-cliente-form',
	'enableAjaxValidation'=>false,
)); ?>
<?php echo $form->errorSummary($model); ?>
<table>
	<tr>
		<td>
			<?php echo $form->labelEx($model,'nombre'); ?>	
		</td>
		<td>
			<?php echo $form->textField($model,'nombre',array('size'=>45,'maxlength'=>45)); ?>
			<?php echo $form->error($model,'nombre'); ?>	
		</td>
	</tr>
	<tr>
		<td>
			<?php echo $form->labelEx($model,'Apellido Paterno'); ?>		
		</td>
		<td>
			<?php echo $form->textField($model,'ape_pat',array('size'=>45,'maxlength'=>45)); ?>
			<?php echo $form->error($model,'ape_pat'); ?>
		</td>
	</tr>
	<tr>
		<td>
			<?php echo $form->labelEx($model,'Apellido Materno'); ?>
		</td>
		<td>
			<?php echo $form->textField($model,'ape_mat',array('size'=>45,'maxlength'=>45)); ?>
			<?php echo $form->error($model,'ape_mat'); ?>
		</td>
	</tr>
	<tr>
		<td>
			<?php echo $form->labelEx($model,'domicilio'); ?>
		</td>
		<td>
			<?php echo $form->textField($model,'domicilio',array('size'=>45,'maxlength'=>45)); ?>
			<?php echo $form->error($model,'domicilio'); ?>
		</td>
	</tr>
	<tr>
		<td>
			<?php echo $form->labelEx($model,'colonia'); ?>
		</td>
		<td>
			<?php echo $form->textField($model,'colonia',array('size'=>45,'maxlength'=>45)); ?>
			<?php echo $form->error($model,'colonia'); ?>
		</td>
	</tr>
	<tr>
		<td>
			<?php echo $form->labelEx($model,'telefono'); ?>
		</td>
		<td>
			<?php echo $form->textField($model,'telefono'); ?>
			<?php echo $form->error($model,'telefono'); ?>
		</td>
	</tr>
	<tr>
		<td align="center" colspan="2">
			<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Actualizar'); ?>
		</td>
	</tr>
</table>

	
	<div class="row">
		<?php $form->labelEx($model,'id_contrato'); ?>
		<?php $form->textField($model,'id_contrato'); ?>
		<?php $form->error($model,'id_contrato'); ?>
	</div>

	<div class="row buttons">
		
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->