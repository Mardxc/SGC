<?php
/* @var $this InvTipoController */
/* @var $model InvTipo */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'inv-tipo-form',
	'enableAjaxValidation'=>false,
)); ?>

	<?php echo $form->errorSummary($model); ?>
<table class="table table-responsive form">
	<tr>
		<td>
			<?php echo $form->labelEx($model,'tipo'); ?>
		</td>
		<td>
			<?php echo $form->textField($model,'tipo',array('size'=>45,'maxlength'=>45)); ?>
			<?php echo $form->error($model,'tipo'); ?>			
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