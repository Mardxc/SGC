<?php
/* @var $this RhPersonalController */
/* @var $model RhPersonal */

$this->breadcrumbs=array(
	'Rh Personals'=>array('index'),
	$model->id_personal,
);

$this->menu=array(
	array('label'=>'List RhPersonal', 'url'=>array('index')),
	array('label'=>'Create RhPersonal', 'url'=>array('create')),
	array('label'=>'Update RhPersonal', 'url'=>array('update', 'id'=>$model->id_personal)),
	array('label'=>'Delete RhPersonal', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_personal),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage RhPersonal', 'url'=>array('admin')),
);
?>

<h1>View RhPersonal #<?php echo $model->id_personal; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_personal',
		'rh_nombre',
		'rh_ape_pat',
		'rh_ape_mat',
		'rh_telefono',
	),
)); ?>
