<?php
/* @var $this EvTipoEventoController */
/* @var $model EvTipoEvento */

$this->breadcrumbs=array(
	'Ev Tipo Eventos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List EvTipoEvento', 'url'=>array('index')),
	array('label'=>'Manage EvTipoEvento', 'url'=>array('admin')),
);
?>

<h1>Create EvTipoEvento</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>