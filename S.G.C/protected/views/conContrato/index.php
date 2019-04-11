<?php
/* @var $this ConContratoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Con Contratos',
);

$this->menu=array(
	array('label'=>'Create ConContrato', 'url'=>array('create')),
	array('label'=>'Manage ConContrato', 'url'=>array('admin')),
);
?>

<h1>Con Contratos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
