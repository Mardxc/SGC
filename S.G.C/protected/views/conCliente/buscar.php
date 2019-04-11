<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'con-cliente-grid',
	'itemsCssClass'=>"table table-hover table-striped btn row row-fluid",
	'dataProvider'=>$model->getAllData(),
	'selectableRows' => 1,
	'selectionChanged'=>"selectCliente",
	'columns'=>array(
		//'id_cliente',
		array(
			'name'=>'nombre',
			'header'=>'Nombre',
		),
		array(
			'name'=>'ape_pat',
			'header'=>'Apellido Paterno',
		),
		array(
			'name'=>'ape_mat',
			'header'=>'Apellido Materno',
		),
		array(
			'name'=>'domicilio',
			'header'=>'Domicilio',
		),
		array(
			'name'=>'colonia',
			'header'=>'Colonia',
		),
		//'telefono',
		//'id_contrato',
		array(
			'class'=>'CButtonColumn',
			'header'=>'Seleccionar',
			'template'=>'{detalles}',
			'deleteConfirmation'=>('Desear borrar el registro?'),
				'buttons'=>array(
					'detalles' => array( //botón para los detalles
						'options' => array('rel' => 'tooltip', 
							'data-toggle' => 'tooltip', 
							'title' => Yii::t('app', 'Detalles'),
							'id'=>'informacion'
						),
	                	'label' => '<i class="fa fa-check fa-2x"></i>',
	                	'imageUrl' => false,
					),
				),
		),
	),
)); ?>

<script>
	function selectCliente(){
		 var cliente = $.fn.yiiGridView.getSelection('con-cliente-grid');
		 nombre= cliente.nombre;
		alert(nombre);
	}
</script>