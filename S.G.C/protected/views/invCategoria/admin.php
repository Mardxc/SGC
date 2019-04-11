<?php
/* @var $this InvCategoriaController */
/* @var $model InvCategoria */

/*$this->menu=array(
	array('label'=>'', 'url'=>array('/admin')),
);*/

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
	$.fn.yiiGridView.update('inv-categoria-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Categorias</h1>

<script>
	function add(){
		window.location="index.php?r=InvCategoria/create&id=0";
	}
</script>
<a id="add"   onclick="add()" style="text-align:rigth;cursor:hand;left:0%;" class="btn btn-success bt-large">
	<i class="fa fa-plus">Nuevo Registro</i>
</a>

<div align="right">
	<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'inv-categoria-grid',
	'itemsCssClass'=>"table table-hover table-striped btn",
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		//'id_categoria',
		'categoria',
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
						'url'=>'Yii::app()->createUrl("InvCategoria/update", array("id"=>$data->id_categoria))',
					),
				),
		),
	),
)); ?>
</div>
