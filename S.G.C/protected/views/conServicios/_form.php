<script>
	$(document).ready(function(){
		$('#status').change(function(){
			$('#stattus').val($("#status option:selected").val());
		});
	});
	function fijarDatos() {
		var status=$('#status').val();

		$('#stattus option').each(function(){
			if ($(this).text() == stattus)
				$(this).attr('selected','selected');
		});
	}
</script>
<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'con-servicios-form',
	'enableAjaxValidation'=>false,
)); ?>
<?php echo $form->errorSummary($model); ?>
<table>
	<tr>
		<td>
			<?php echo $form->labelEx($model,'servicio'); ?>
		</td>
		<td>
			<?php echo $form->textField($model,'servicio',array('size'=>45,'maxlength'=>45)); ?>
			<?php echo $form->error($model,'servicio'); ?>
		</td>
	</tr>
	<tr>
		<td>
			<?php echo $form->labelEx($model,'descripcion'); ?>
		</td>
		<td>
			<?php echo $form->textField($model,'descripcion',array('size'=>45,'maxlength'=>45)); ?>
			<?php echo $form->error($model,'descripcion'); ?>
		</td>
	</tr>
	<tr>
		<td>
			<?php echo $form->labelEx($model,'costo'); ?>
		</td>
		<td>
			<?php echo $form->textField($model,'costo'); ?>
			<?php echo $form->error($model,'costo'); ?>
		</td>
	</tr>
	<tr>
		<td>
			<?php echo $form->labelEx($model,'statuss'); ?>
		</td>
		<td>
			<?php 
				echo CHtml::dropDownList(
					'status',
					$model->status, 
	              	array('empty' => 'Selecciona una Opcion',
	              		'0'=>"NO DISPONIBLE",
	              		'1'=>"DISPONIBLE",)
	             );
			?>
			<?php  CHtml::textField('stattus',$model->status,array('style'=>'display:none;')); ?>
		</td>
	</tr>
	<tr>
		<td align="center" colspan="2">
			<?php echo CHtml::submitButton($model->isNewRecord ? 'Guardar' : 'Actualizar'); ?>
		</td>
	</tr>
</table>
	
<script>
	fijarDatos();
</script>

<?php $this->endWidget(); ?>

</div><!-- form -->