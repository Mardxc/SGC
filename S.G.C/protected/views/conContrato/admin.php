<?php
/* @var $this ConContratoController */
/* @var $model ConContrato */

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
	$.fn.yiiGridView.update('con-contrato-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>
<style>
/*thead{
	background: #333;
}
	.summary{
		display: none;
	}
	.pager{
		background: #333;
		color: white;
	}
	ul.yiiPager{
		font-size: 2em;
	}*/
</style>
<script>
	function add(){
		window.location="<?php echo Yii::app()->createUrl("ConContrato/detail", array("id"=>0)) ?>";
		//window.location="<?php echo Yii::app()->createUrl("ConContrato/detail", array("id"=>73)) ?>";
	}
	function print(){
		window.location="<?php echo Yii::app()->createUrl("ConContrato/print") ?>";
	}
</script>

<h1>Contratos</h1>
<a id="add"   onclick="add()" style="text-align:rigth;cursor:hand;left:0%;" class="btn btn-success bt-large">
	<i class="fa fa-plus"> Nuevo</i>
</a>
<?php //Yii::app()->createUrl("ConContrato/detail", array("id"=>1)); ?>
<?php 
	/*echo CHtml::link('','index.php?r=ConContrato/detail',

		array(
			'class'=>'fa fa-plus',
			'title'=>'Crear Alumno',
			'style'=>'left:95%;
	    		font-size: 3.0em;'
	    )
	);*/
?>
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'con-contrato-grid',
	'itemsCssClass'=>"table grid table-striped pagination",
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		array(
			'name'=>'id_contrato',
			'header'=>'Cliente',
			'value'=>'ConContrato::getCliente($data->id_contrato)',
		),
		array(
			'name'=>'id_eve_tipo_evento',
			'header'=>'Tipo Evento',
			'value'=>'EvTipoEvento::getTipoEvento($data->id_eve_tipo_evento)',
		),
		'fecha_evento',
		'hora_inicial',
		'hora_final',
		'asistentes',
		array(
			'name'=>'id_inv_lugar',
			'header'=>'Lugar del Evento',
			'value'=>'InvMobiliario::getLugar($data->id_inv_lugar)',
		),
		array(
			'class'=>'CButtonColumn',
			'header'=>'ACCIONES',
			'template'=>'{delete}{detalles}{Descargar}',
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
						'url'=>'Yii::app()->createUrl("ConContrato/detail", array("id"=>$data->id_contrato))',
					),
					'Descargar' => array( //botón para los detalles
						'options' => array('rel' => 'tooltip', 
							'data-toggle' => 'tooltip', 
							'title' => Yii::t('app', 'Descargar'),
							'id'=>'Descargar'
						),
	                	'label' => '<i class="fa fa-download fa-2x"></i>',
	                	'imageUrl' => false,
						'url'=>'Yii::app()->createUrl("ConContrato/pdf", array("id"=>$data->id_contrato))',
					),
				),
		),
	),
)); ?>
</div>