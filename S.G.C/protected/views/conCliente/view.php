<script>
	function guardarCliente(){
		var guarda=$('#guardarCliente').val();
		var id_contrato=$('#id_contrato').val();
		var id_cliente=$('#id_cliente').val();
		var nombre=$('#nombre').val();	
		var ape_pat=$('#ape_pat').val();
		var ape_mat=$('#ape_mat').val();
		var domicilio=$('#domicilio').val();
		var colonia=$('#colonia').val();
		var telefono=$('#telefono').val();
		
		<?php echo CHtml::ajax(array(
            'url'=>array('ConCliente/guardar'),
            'data'=> array(
            	'guarda'=>"js:guarda",
            	'id_contrato'=>'js:id_contrato',
            	'id_cliente'=>'js:id_cliente',
            	'nombre'=>'js:nombre',
            	'ape_pat'=>'js:ape_pat',
            	'ape_mat'=>'js:ape_mat',
            	'domicilio'=>'js:domicilio',
            	'colonia'=>'js:colonia',
            	'telefono'=>'js:telefono'

            ),
            'type'=>'post',
            'dataType'=>'json',
            'success'=>"function(data)
            {	
				alert('La información ha sido guardada');
            } "
            ))
    	?>;
        return false; 		
	}
</script>

<?php 
if (isset($model->id_cliente)) {
	$contrato=$model->id_contrato;
	$id_cliente=$model->id_cliente;;
	$nombre=$model->nombre;
	$ape_pat=$model->ape_pat;
	$ape_mat=$model->ape_mat;
	$domicilio=$model->domicilio;
	$colonia=$model->colonia;
	$telefono=$model->telefono;
}else{
	$contrato=$id_contrato;
	$id_cliente=0;
	$nombre='';
	$ape_pat='';
	$ape_mat='';
	$domicilio='';
	$colonia='';
	$telefono='';
}
 ?>

<?php echo CHtml::textField('id_cliente',$id_cliente,array('style'=>'display:none;')); ?>
<?php echo CHtml::textField('id_contrato',$contrato,array('style'=>'display:none;')); ?>

<?php if($id_cliente=='') { ?>
	<table>
		<tr>
			<td>
				<h4>¿El cliente ha contratado anteriormente? Buscalo!!</h4>
				<?php echo CHtml::textField('buscar','',array('style'=>'display:none;')); ?>	
			</td>
			<td align="center">
					<button id="buscarCliente" class="btn btn-success" value="buscar">Buscar</button>
			</td>
			</td>
		</tr>
	</table>
<?php } ?>

<table>
	<tr>
		<td>
			Nombre
		</td>
		<td>
			<?php echo CHtml::textField('nombre',$nombre); ?>
		</td>
	</tr>
	<tr>
		<td>
			Apellido Paterno
		</td>
		<td>
			<?php echo CHtml::textField('ape_pat',$ape_pat); ?>
		</td>
	</tr>
	<tr>
		<td>
			Apellido Materno
		</td>
		<td>
			<?php echo CHtml::textField('ape_mat',$ape_mat); ?>
		</td>
	</tr>
	<tr>
		<td>
			Domicilio
		</td>
		<td>
			<?php echo CHtml::textField('domicilio',$domicilio); ?>
		</td>
	</tr>
	<tr>
		<td>
			Colonia
		</td>
		<td>
			<?php echo CHtml::textField('colonia',$colonia); ?>
		</td>
	</tr>
	<tr>
		<td>
			Telefono
		</td>
		<td>
			<?php echo CHtml::textField('telefono',$telefono); ?>
		</td>
	</tr>
	<tr>
		<td align="center" colspan="2">
			<?php if(isset($id_contrato)) { ?>
				<button id="guardarCliente" class="btn btn-success" value="guardar" onclick="guardarCliente()">Guardar</button>
			<?php } else { ?>
				<button id="guardarCliente" class="btn btn-success" value="actualizar" onclick="guardarCliente()">Actualizar</button>
			<?php } ?>
		</td>
	</tr>
</table>

<!-- buscar cliente -->
<?php
$this->beginWidget('zii.widgets.jui.CJuiDialog', array( 
    'id'=>'buscaCli',
    'options'=>array(
        'title'=>'Buscar Cliente',
        'autoOpen'=>false,
        'modal'=>true,
        'width'=>750,
        'height'=>'auto',
        'resizable'=>false,
        'position' => '{my:"bottom", at: "center", of:button}',
       // 'buttons'=>array('Cancelar'=>'js:function(){$(this).dialog("close");}',),
    ),
));?>
<div class="divForForm">
	<?php 
		$this->renderPartial(
	        '/conCliente/buscar',
	        array(
	        	'model'=>ConCliente::model()->getAll()
	        ));
	 ?>
</div>

<?php $this->endWidget();?>
 <script>
	$(document).ready(function(){
		$('#buscarCliente').click(function(){
			$('#buscaCli').dialog("open");
		})
	});
 </script>

<!-- buscar cliente -->