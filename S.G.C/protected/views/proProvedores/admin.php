<?php
/* @var $this ProProvedoresController */
/* @var $model ProProvedores */

$this->menu=array(
	array('label'=>'Provedores', 'url'=>array('admin')),
	
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('pro-provedores-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>
<script>
	function add(){
		window.location="index.php?r=ProProvedores/create&id=0";
	}
	function print(){
		window.location="<?php echo Yii::app()->createUrl("ConContrato/print") ?>";
	}
</script>
<h1>Administrar Proveedores</h1>

<a id="add"   onclick="add()" style="text-align:rigth;cursor:hand;left:0%;" class="btn btn-success bt-large">
	<i class="fa fa-plus">Nuevo Registro</i>
</a>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'pro-provedores-grid',
	'itemsCssClass'=>"table table-hover table-striped btn row row-fluid",
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		//'id_proveedor',
		array(
			'name'=>'pro_nombre',
			'header'=>'Provedor',
			'value'=>'$data->pro_nombre',
		),
		array(
			'name'=>'pro_direccion',
			'header'=>'Direccion',
			'value'=>'$data->pro_direccion',
		),
		array(
			'name'=>'pro_telefono',
			'header'=>'Telefono',
			'value'=>'$data->pro_telefono',
		),
		array(
			'name'=>'pro_producto',
			'header'=>'Producto',
			'value'=>'$data->pro_producto',
		),
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
	                	'label' => '<i class="fa fa-list-alt fa-2x"></i>',
	                	'imageUrl' => false,
						'url'=>'Yii::app()->createUrl("ProProvedores/update", array("id"=>$data->id_proveedor))',
					),
				),
		),
	),
)); ?>
