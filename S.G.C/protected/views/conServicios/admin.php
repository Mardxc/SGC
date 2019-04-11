<?php
/* @var $this ConServiciosController */
/* @var $model ConServicios */

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
	$.fn.yiiGridView.update('con-servicios-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>
<script>
	function add(){
		window.location="index.php?r=ConServicios/create&id=0";
	}
</script>
<h1>Catalogo de Servicios</h1>
<a id="add"   onclick="add()" style="text-align:rigth;cursor:hand;left:0%;" class="btn btn-success bt-large">
	<i class="fa fa-plus">Nuevo Registro</i>
</a>


<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'con-servicios-grid',
	'itemsCssClass'=>"table table-hover table-striped btn row row-fluid",
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		//'id_servicio',
		'servicio',
		'descripcion',
		'costo',
		//'status',
		array(
			'name'=>'status',
			'header'=>'Status',
			'value'=>'ConServicios::getStatus($data->status)',
		),
		array(
			'class'=>'CButtonColumn',
			'header'=>'ACCIONES',
			//'htmlOptions' => array('style'=>'color:green;'),
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
						'url'=>'Yii::app()->createUrl("ConServicios/update", array("id"=>$data->id_servicio))',
					),
				),
		),
	),
)); ?>
