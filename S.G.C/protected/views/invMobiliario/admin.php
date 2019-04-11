<?php
/* @var $this InvMobiliarioController */
/* @var $model InvMobiliario */

$this->menu=array(
	array('label'=>'Mobiliario', 'url'=>array('InvMobiliario/admin')),
	array('label'=>'Categorias', 'url'=>array('InvCategoria/admin')),
	array('label'=>'Tipos de Mobiliario', 'url'=>array('InvTipo/admin')),
	array('label'=>'Ubicación de Mobiliario', 'url'=>array('InvLugares/admin')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('inv-mobiliario-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>
<script>
	function add(){
		window.location="index.php?r=InvMobiliario/create&id=0";
	}
</script>
<h1>Mobiliarios</h1>

<a id="add"   onclick="add()" style="text-align:rigth;cursor:hand;left:0%;" class="btn btn-success bt-large">
	<i class="fa fa-plus">Nuevo Registro</i>
</a>

	<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'inv-mobiliario-grid',
	'itemsCssClass'=>"table table-hover table-striped btn row row-fluid",
	'dataProvider'=>$model->search(),
	'filter'=>$model,
    'summaryText' => 'Mostrando {start} de {end} of {count} registros',
	'columns'=>array(
		//'id_mobiliario',
		'descripcion',
		array(
			'name'=>'id_categoria',
			'header'=>'Categoria',
			'value'=>'InvMobiliario::getCategoria($data->id_categoria)',
		),
		array(
			'name'=>'id_tipo',
			'header'=>'Tipo',
			'value'=>'InvMobiliario::getTipo($data->id_tipo)',
		),
		array(
			'name'=>'id_inv_lugar',
			'header'=>'Ubicación',
			'value'=>'InvMobiliario::getLugar($data->id_inv_lugar)',
		),
		'cantidad',
		array(
			'class'=>'CButtonColumn',
			'header'=>'ACCIONES',
			'htmlOptions' => array('style'=>'color:green;'),
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
						'url'=>'Yii::app()->createUrl("InvMobiliario/update", array("id"=>$data->id_mobiliario))',
					),
				),
		),
	),
)); ?>
</div><!-- search-form -->
