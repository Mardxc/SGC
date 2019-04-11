<?php
/* @var $this ConClienteController */
/* @var $model ConCliente */
$this->menu=array(
	array('label'=>'Contratos', 'url'=>array('ConContrato/admin')),
	array('label'=>'Cliente', 'url'=>array('ConCliente/admin')),
	array('label'=>'Servicios', 'url'=>array('ConServicios/admin')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('con-cliente-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Clientes Registrados</h1>


<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'con-cliente-grid',
	'itemsCssClass'=>"table table-hover table-striped btn row row-fluid",
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		//'id_cliente',
		'nombre',
		'ape_pat',
		'ape_mat',
		'domicilio',
		'colonia',
		/*
		'telefono',
		'id_contrato',
		*/
		array(
			'class'=>'CButtonColumn',
			'header'=>'ACCIONES',
			'template'=>'{delete}{detalles}',
			'deleteConfirmation'=>('Desear borrar el registro?'),
				'buttons'=>array(
					'delete' => array( //botón para la acción nueva
						'options' => array('rel' => 'tooltip', 
							'data-toggle' => 'tooltip', 
							'title' => Yii::t('app', 'Eliminar'),
							'id'=>'eliminar'
						),
	                	'label' => '<i class="fa fa-times fa-2x"></i>',
	                	'imageUrl' => false,								    								    
						'deleteConfirmation'=>'Esta seguro que desea borrar el registro?',

					),
					'detalles' => array( //botón para los detalles
						'options' => array('rel' => 'tooltip', 
							'data-toggle' => 'tooltip', 
							'title' => Yii::t('app', 'Detalles'),
							'id'=>'informacion'
						),
	                	'label' => '<i class="fa fa-refresh fa-2x"></i>',
	                	'imageUrl' => false,
						'url'=>'Yii::app()->createUrl("ConCliente/update", array("id"=>$data->id_cliente))',
					),
				),
		),
	),
)); ?>
