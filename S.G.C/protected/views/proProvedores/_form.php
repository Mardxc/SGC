<?php
/* @var $this ProProvedoresController */
/* @var $model ProProvedores */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'pro-provedores-form',
	'enableAjaxValidation'=>false,
)); ?>

	<?php echo $form->errorSummary($model); ?>
<table>
	<tr>
		<td>
			<?php echo $form->labelEx($model,'nombre'); ?>
		</td>
		<td>
			<?php echo $form->textField($model,'pro_nombre',array('size'=>45,'maxlength'=>45)); ?>
			<?php echo $form->error($model,'pro_nombre'); ?>
		</td>
	</tr>
	<tr>
		<td>
			<?php echo $form->labelEx($model,'direccion'); ?>
		</td>
		<td>
			<?php echo $form->textField($model,'pro_direccion',array('size'=>45,'maxlength'=>45)); ?>
			<?php echo $form->error($model,'pro_direccion'); ?>
		</td>
	</tr>
	<tr>
		<td>
			<?php echo $form->labelEx($model,'telefono'); ?>
		</td>
		<td>
			<?php echo $form->textField($model,'pro_telefono',array('size'=>45,'maxlength'=>45)); ?>
			<?php echo $form->error($model,'pro_telefono'); ?>
		</td>
	</tr>
	<tr>
		<td>
			<?php echo $form->labelEx($model,'producto'); ?>
		</td>
		<td>
			<?php echo $form->textField($model,'pro_producto',array('size'=>45,'maxlength'=>45)); ?>
			<?php echo $form->error($model,'pro_producto'); ?>
		</td>
	</tr>
	<tr>
		<td align="center" colspan="2">
			<?php echo CHtml::submitButton($model->isNewRecord ? 'Guardar' : 'Actualizar'); ?>
		</td>
	</tr>
</table>
<?php $this->endWidget(); ?>

</div><!-- form -->