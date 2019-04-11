<?php
/* @var $this EvTipoEventoController */
/* @var $model EvTipoEvento */

$this->breadcrumbs=array(
	'Ev Tipo Eventos'=>array('index'),
	$model->id_eve_tipo_evento=>array('view','id'=>$model->id_eve_tipo_evento),
	'Update',
);

$this->menu=array(
	array('label'=>'List EvTipoEvento', 'url'=>array('index')),
	array('label'=>'Create EvTipoEvento', 'url'=>array('create')),
	array('label'=>'View EvTipoEvento', 'url'=>array('view', 'id'=>$model->id_eve_tipo_evento)),
	array('label'=>'Manage EvTipoEvento', 'url'=>array('admin')),
);
?>

<h1>Update EvTipoEvento <?php echo $model->id_eve_tipo_evento; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>