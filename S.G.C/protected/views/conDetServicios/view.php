<script>
	function validar(){
		var cantidad=$('#cantidad').val();
alert(cantidad);
		<?php echo CHtml::ajax(array(
            'url'=>array('ConDetServicios/cantidad'),
            'data'=> array(
            	'cantidad'=>'js:cantidad'
            ),
            'type'=>'post',
            'dataType'=>'json',
            'success'=>"function(data)
            {	
            	if (data.status=='valido') {
	            	alert('Valido');
            	}else{
            		alert('No valida');
            	};
            } "
            ))
    	?>;
			//window.location="index.php?r=ConContrato/detail&id="+id_contrato;
			return false; 			
	};
</script>

<script>
	function guardarServicio(){
				
		var guarda=$('#guardarServicio').val();
		var id_det_servicios=$('#id_det_servicios').val();
		var id_contrato=$('#id_contrao').val();	
		var id_servicios=$('#id_servicios').val();
		var cantidad=$('#cantidad').val();

		<?php echo CHtml::ajax(array(
            'url'=>array('ConDetServicios/guardar'),
            'data'=> array(
            	'guarda'=>"js:guarda",
            	'id_det_servicios'=>'js:id_det_servicios',
            	'id_contrato'=>'js:id_contrato',
            	'id_servicios'=>'js:id_servicios',
            	'cantidad'=>'js:cantidad'

            ),
            'type'=>'post',
            'dataType'=>'json',
            'success'=>"function(data)
            {	
            	$.each(data.datos,function(key,value){
					$('#key').val(value) ;
            	});
				window.location='index.php?r=ConContrato/detail&id='+id_contrato;
				$.fn.yiiGridView.update('con-det-servicios-grid');

				alert('La información ha sido guardada');
            } "
            ))
    	?>;
			
			return false; 			
	};
</script>
<?php 
	if (isset($id_contrato)) {
		$id_contrato=$id_contrato;
		$id_det_servicios=0;
		//$id_det_servicios=ConDetServicios::getMaxId();
	}
?>
<table>
	<?php 
		echo CHtml::textField('id_contrao',$id_contrato,array('style'=>'display:none;')); 
		echo CHtml::textField('id_det_servicios',$id_det_servicios,array('style'=>'display:none;'));  ?>
	<tr>
		<td>
			Servicios
		</td>
		<td>
			Cantidad.
		</td>
	</tr>
	<tr>
		<td>
			<?php 
				echo CHtml::dropDownList(
					'id_servicios',
					'', 
	              	ConServicios::listServicio(),
	              	array('empty' => 'Selecciona una Opcion')
	             );
			?>
		</td>
		<td>
			<input type="number" id="cantidad">
		</td>
		<td>
			<button id="guardarServicio" class="btn btn-success" value="guardar" onclick="guardarServicio()">Agregar</button>
		</td>
	</tr>
</table>
<?php if (isset($model->id_det_servicios)) { ?>
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'con-det-servicios-grid',
	'dataProvider'=>$model->listarServicios($model->id_contrato),
	//'filter'=>$model,
	'columns'=>array(
		//'id_det_servicios',
		//'id_contrato',
		array(
			'name'=>'id_servicio',
			'header'=>'Servicio',
			'value'=>'ConServicios::getServicio($data->id_servicio)',
		),
		'cantidad',
		array(
				'class'=>'CButtonColumn',
				'header'=>'ACCIONES',
				//'htmlOptions' => array('style'=>'color:green;'),
				'template'=>'{delete}',
				'deleteConfirmation'=>('Desear borrar el registro?'),
					'buttons'=>array(
						'delete' => array( //botón para la acción nueva
								'options' => array('rel' => 'tooltip', 
									'data-toggle' => 'tooltip', 
									'title' => Yii::t('app', 'Eliminar'),
									'id'=>'eliminar'
								),
			                	'label' => '<i class="fa fa-times fa-2x"></i>',
			                	'url'=>'Yii::app()->createUrl("ConDetServicios/eliminar", array("id"=>$data->id_det_servicios))',
			                	'imageUrl' => false,
								'deleteConfirmation'=>'Esta seguro que desea borrar el registro?',
			                	'afterDelete'=>'$.fn.yiiGridView.update("con-det-servicios-grid");',		    								    

							),
					),
			),
	),
)); ?>
<?php } ?>