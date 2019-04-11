<script>
	function guardarContrato(){
		var guarda=$('#guardarContrato').val();
		var id_contrato=$('#id_contrato').val();
		var fecha_evento=$('#fecha_evento').val();	
		var id_inv_lugar=$('#lugar').val();
		var id_eve_tipo_evento=$('#tipo').val();
		var hora_inicial=$('#hora_inicial').val();
		var asistentes=$('#asistentes').val();
		var hora_final=$('#hora_final').val();
		var direccion_evento=$('#direccion_evento').val();
		<?php echo CHtml::ajax(array(
            'url'=>array('ConContrato/guardar'),
            'data'=> array(
            	'guarda'				=>"js:guarda",
            	'id_contrato'			=>'js:id_contrato',
            	'fecha_evento'			=>'js:fecha_evento',
            	'id_inv_lugar'			=>'js:id_inv_lugar',
            	'id_eve_tipo_evento'	=>'js:id_eve_tipo_evento',
            	'hora_inicial'			=>'js:hora_inicial',
            	'asistentes'			=>'js:asistentes',
            	'hora_final'			=>'js:hora_final',
            	'direccion_evento'		=>'js:direccion_evento'

            ),
            'type'=>'post',
            'dataType'=>'json',
            'success'=>"function(data)
            {	
				alert('La información ha sido guardada');
				$('#id_contrato').val(data.id_contrato);

			    if(data.status=='guardar'){
					$('#guardar').html('actualizar');
					$('#guardar').val('actualizar');

					var id_alu=$('#id_contrato').val();
					alert(id_alu);
					alert(id_contrato);
					window.location='index.php?r=ConContrato/admin';
					//window.location='index.php?r=ConContrato/detail&id='+id_alu;
			    }
            } "
            ))
    	?>;
        return false; 		
	}
</script>

<script>
	$(document).ready(function(){
		$('#lugar').change(function(){
			$('#id_inv_lugar').val($("#lugar option:selected").text());
		});
		$('#tipo').change(function(){
			$('#id_eve_tipo_evento').val($("#tipo option:selected").text());
		});
	});
	function fijarDatos() {
		var id_inv_lugar=$('#id_inv_lugar').val();
		var id_eve_tipo_evento=$('#id_eve_tipo_evento').val();

		$('#lugar option').each(function(){
			if ($(this).text() == id_inv_lugar)
				$(this).attr('selected','selected');
		});

		$('#tipo option').each(function(){
			if ($(this).text() == id_eve_tipo_evento)
				$(this).attr('selected','selected');
		});
	}
</script>
<style>
	#promedio,#fecha_evento,#hora_inicial,#hora_final,#lugar,#direccion_evento,#asistentes{
		width: 100%;
	}>
</style>
<?php 
	if (isset($model->id_contrato)) {
		$contrato=$model->id_contrato;
		
		$fecha_evento=$model->fecha_evento;
		$hora_inicial=$model->hora_inicial;
		$hora_final=$model->hora_final;

		$id_inv_lugar=InvMobiliario::getLugar($model->id_inv_lugar);
		$id_eve_tipo_evento=EvTipoEvento::getTipoEvento($model->id_eve_tipo_evento);

		$direccion_evento=ConContrato::setDireccion($model->id_inv_lugar);
		$asistentes=$model->asistentes;
	}else{
		$contrato=0;
		
		$fecha_evento='';
		$hora_inicial='';
		$hora_final='';

		$id_inv_lugar='';
		$id_eve_tipo_evento='';
		$direccion_evento='';
		$asistentes='';
	}
 ?>
<?php echo CHtml::textField('id_contrato',$contrato,array('style'=>'display:none;')); ?>
<?php echo CHtml::textField('id_inv_lugar',$id_inv_lugar,array('style'=>'display:none;')); ?>
<?php echo CHtml::textField('id_eve_tipo_evento',$id_eve_tipo_evento,array('style'=>'display:none;')); ?>
<table>
	<tr>
		<td>
			Fecha del Evento
		</td>
		<td>
			<?php 
			 	$this->widget('zii.widgets.jui.CJuiDatePicker', array(
				'name'=>'fecha_evento',
			 	'value'=>$fecha_evento,
			 	'language' => 'es',
			 	'htmlOptions'=> array('style'=>'width:90%'),
			 	'options'=>array(
			 		'autoSize'=>false,
			 		'defaultDate'=>$fecha_evento,
			 		'dateFormat'=>'yy/mm/dd',
			 		'buttonImage'=>Yii::app()->baseUrl.'/images/calendar.gif',
			 		'buttonImageOnly'=>true,
			 		'buttonText'=>'Fecha',
			 		'yearRange'=>'1970:2099',
			 		'selectOtherMonths'=>true,
			 		'showAnim'=>'slide',
			 		'showButtonPanel'=>true,
			 		'showOn'=>'button',
			 		'showOtherMonths'=>true,
			 		'changeMonth' => true,
			 		'changeYear' => true,
			 		),
			 	));
		 	?>
		</td>
	</tr>
	<tr>
		<td>
			Hora de Inicio
		</td>
		<td>
			<input type="time" id="hora_inicial" value="<?php echo $hora_inicial; ?>">
		</td>
	</tr>
	<tr>
		<td>
			Hora de Fin
		</td>
		<td>
			<input type="time" id="hora_final" value="<?php echo $hora_final; ?>">
		</td>
	</tr>
	<tr>
		<td>
			Lugar del Evento
		</td>
		<td>
			<?php 
				echo CHtml::dropDownList(
					'lugar',
					'', 
	              	InvMobiliario::listLugar(),
	              	array('empty' => 'Selecciona una Opcion')
	             );
			?>
		</td>
	</tr>
	<tr>
		<td>
			Tipo del Evento
		</td>
		<td>
			<?php 
				echo CHtml::dropDownList(
					'tipo',
					'', 
	              	EvTipoEvento::listTipoEvento(),
	              	array('empty' => 'Selecciona una Opcion')
	             );
			?>
		</td>
	</tr>
	<tr>
		<td>
			Direccion del Evento
		</td>
		<td>
			<?php 
				echo CHtml::textField(
					'direccion_evento',
					$direccion_evento,
					array(
						'style'=>'display:block;'
					)
				); 
			?>
		</td>
	</tr>
	<tr>
		<td>
			Asistentes
		</td>
		<td>
			<input type="number" id="asistentes" value="<?php echo $asistentes ?>">
		</td>
	</tr>
	<tr>
		<td align="center" colspan="2">
			<?php if($id_contrato==0) { ?>
				<button id="guardarContrato" class="btn btn-success" value="guardar" onclick="guardarContrato()">Guardar</button>
			<?php } else { ?>
				<button id="guardarContrato" class="btn btn-success" value="actualizar" onclick="guardarContrato()">Actualizar</button>
			<?php } ?>
		</td>
	</tr>
</table>
<script>
	fijarDatos();
</script>