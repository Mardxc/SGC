<?php
/* @var $this InvCategoriaController */
/* @var $model InvCategoria */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'inv-categoria-form',
	'enableAjaxValidation'=>false,
)); ?>
<table>
	<tr>
		<td>
			Categoria
		</td>
		<td>
			<?php echo $form->textField($model,'categoria',array('size'=>45,'maxlength'=>45)); ?>			
			<?php echo $form->error($model,'categoria'); ?>
		</td>
	</tr>
	<tr>
		<td align="center" colspan="2">
			<?php echo CHtml::submitButton($model->isNewRecord ? 'Guardar' : 'Actualizar', array('class'=>'btn btn-success')); ?>
		</td>
	</tr>
</table>
<?php $this->endWidget(); ?>

</div><!-- form -->