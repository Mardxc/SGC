<?php
/* @var $this ConSegClienteController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Con Seg Clientes',
);

$this->menu=array(
	array('label'=>'Create ConSegCliente', 'url'=>array('create')),
	array('label'=>'Manage ConSegCliente', 'url'=>array('admin')),
);
?>

<h1>Con Seg Clientes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
