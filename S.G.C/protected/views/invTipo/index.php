<?php
/* @var $this InvTipoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Inv Tipos',
);

$this->menu=array(
	array('label'=>'Create InvTipo', 'url'=>array('create')),
	array('label'=>'Manage InvTipo', 'url'=>array('admin')),
);
?>

<h1>Inv Tipos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
