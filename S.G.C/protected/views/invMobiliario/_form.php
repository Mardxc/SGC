<script>
	function guardar(){
		var guarda=$('#guardar').val();
		var id_mobiliario=$('#mobiliario').val();
		var id_tipo=$('#tipo').val();	
		var id_categoria=$('#categoria').val();
		var descripcion=$('#descripcion').val();
		var id_inv_lugar=$('#lugar').val();
		var cantidad=$('#cantidad').val();

		<?php echo CHtml::ajax(array(
            'url'=>array('InvMobiliario/guardar'),
            'data'=> array(
            	'guarda'=>"js:guarda",
            	'id_mobiliario'=>'js:id_mobiliario',
            	'id_tipo'=>'js:id_tipo',
            	'id_categoria'=>'js:id_categoria',
            	'descripcion'=>'js:descripcion',
            	'id_inv_lugar'=>'js:id_inv_lugar',
            	'cantidad'=>'js:cantidad'

            ),
            'type'=>'post',
            'dataType'=>'json',
            'success'=>"function(data)
            {	
				alert('La información ha sido guardada');
            } "
            ))
    	?>;
    	window.location="index.php?r=InvMobiliario/admin";
        return false; 		
	}
</script>
<script>
	$(document).ready(function(){
		$('#tipo').change(function(){
			$('#id_tipo').val($("#tipo option:selected").text());
		});

		$('#categoria').change(function(){
			$('#id_categoria').val($("#categoria option:selected").text());
		});

		$('#lugar').change(function(){
			$('#id_inv_lugar').val($("#lugar option:selected").text());
		});
	});
	function fijarDatos() {
		var id_tipo=$('#id_tipo').val();
		var id_categoria=$('#id_categoria').val();
		var id_inv_lugar=$('#id_inv_lugar').val();

		$('#tipo option').each(function(){
			if ($(this).text() == id_tipo)
				$(this).attr('selected','selected');
		});

		$('#categoria option').each(function(){
			if ($(this).text() == id_categoria)
				$(this).attr('selected','selected');
		});

		$('#lugar option').each(function(){
			if ($(this).text() == id_inv_lugar)
				$(this).attr('selected','selected');
		});

	}
</script>
<?php  
	if ($model->id_mobiliario!='')  {
		$id_mobiliario=$model->id_mobiliario;
		$descripcion=$model->descripcion;
		$id_tipo=InvMobiliario::getTipo($model->id_tipo);
		$id_categoria=InvMobiliario::getCategoria($model->id_categoria);
		$id_inv_lugar=InvMobiliario::getLugar($model->id_inv_lugar);
		$cantidad=$model->cantidad;

	} else{ 
		$id_mobiliario='';
		$descripcion='';
		$id_tipo='';
		$id_categoria='';
		$id_inv_lugar='';
		$cantidad='';
	}
?>
<?php echo CHtml::textField('mobiliario',$id_mobiliario,array('style'=>'display:none;')); ?>
<?php echo CHtml::textField('id_tipo',$id_tipo,array('style'=>'display:none;')); ?>
<?php echo CHtml::textField('id_categoria',$id_categoria,array('style'=>'display:none;')); ?>
<?php echo CHtml::textField('id_inv_lugar',$id_inv_lugar,array('style'=>'display:none;')); ?>
<div class="form">
<table>
	<tr>
		<td>
			Descripcion
		</td>
		<td>
			<?php echo CHtml::textField('descripcion',$descripcion,array('style'=>'display:block;')); ?>
		</td>
	</tr>
	<tr>
		<td>
			Tipo
		</td>
		<td>
			<?php 
				echo CHtml::dropDownList(
					'tipo',
					'', 
	              	InvMobiliario::listTipo(),
	              	array('empty' => 'Selecciona una Opcion')
	             );
			?>
		</td>
	</tr>
	<tr>
		<td>
			Categoria
		</td>
		<td>
			<?php 
				echo CHtml::dropDownList(
					'categoria',
					'', 
	              	InvMobiliario::listCategoria(),
	              	array('empty' => 'Selecciona una Opcion')
	             );
			?>
		</td>
	</tr>
	<tr>
		<td>
			Lugar del Mobiliario
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
			Cantidad
		</td>
		<td>
			
			<input type="number" id='cantidad' value='<?php echo $cantidad; ?>'>
		</td>
	</tr>
	<tr>
		<td align="center" colspan="2">
			<?php if($id_mobiliario=='') { ?>
				<button id="guardar" class="btn btn-success" value="guardar" onclick="guardar()">Guardar</button>
			<?php } else { ?>
				<button id="guardar" class="btn btn-success" value="actualizar" onclick="guardar()">Actualizar</button>
			<?php } ?>
		</td>
	</tr>
</table>
</div><!-- form -->
<script> fijarDatos();</script>