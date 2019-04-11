<?php
/* @var $this RhPersonalController */
/* @var $model RhPersonal */

$this->menu=array(
	array('label'=>'Personal', 'url'=>array('admin')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('rh-personal-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>
<script>
	function add(){
		window.location="index.php?r=RhPersonal/create&id=0";
	}
</script>
<h1>Administrar Meseros</h1>
<a id="add"   onclick="add()" style="text-align:rigth;cursor:hand;left:0%;" class="btn btn-success bt-large">
	<i class="fa fa-plus">Nuevo Registro</i>
</a>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'rh-personal-grid',
	'itemsCssClass'=>"table table-hover table-striped btn row row-fluid",
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		//'id_personal',
		array(
			'name'=>'rh_nombre',
			'header'=>'Nombre',
			'value'=>'$data->rh_nombre',
		),
		array(
			'name'=>'rh_ape_pat',
			'header'=>'Apellido Paterno',
			'value'=>'$data->rh_ape_pat',
		),
		array(
			'name'=>'rh_ape_mat',
			'header'=>'Apellido Materno',
			'value'=>'$data->rh_ape_mat',
		),
		array(
			'name'=>'rh_telefono',
			'header'=>'Telefono',
			'value'=>'$data->rh_telefono',
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
						'url'=>'Yii::app()->createUrl("RhPersonal/update", array("id"=>$data->id_personal))',
					),
				),
		),
	),
)); ?>
