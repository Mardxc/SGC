<?php
/* @var $this ConClienteController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Con Clientes',
);

$this->menu=array(
	array('label'=>'Create ConCliente', 'url'=>array('create')),
	array('label'=>'Manage ConCliente', 'url'=>array('admin')),
);
?>

<h1>Con Clientes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
