<?php
/* @var $this InvLugaresController */
/* @var $model InvLugares */

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
	$.fn.yiiGridView.update('inv-lugares-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Lugares</h1>

<script>
	function add(){
		window.location="index.php?r=InvLugares/create&id=0";
	}
</script>
<a id="add"   onclick="add()" style="text-align:rigth;cursor:hand;left:0%;" class="btn btn-success bt-large">
	<i class="fa fa-plus">Nuevo Registro</i>
</a>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'inv-lugares-grid',
	'itemsCssClass'=>"table table-hover table-striped btn row row-fluid",
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		//'id_inv_lugar',
		'nombre',
		'calle',
		'numero',
		'telefono',
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
						'url'=>'Yii::app()->createUrl("InvLugares/update", array("id"=>$data->id_inv_lugar))',
					),
				),
		),
	),
)); ?>
