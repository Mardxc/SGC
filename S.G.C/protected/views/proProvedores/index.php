<?php
/* @var $this ProProvedoresController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Pro Provedores',
);

$this->menu=array(
	array('label'=>'Create ProProvedores', 'url'=>array('create')),
	array('label'=>'Manage ProProvedores', 'url'=>array('admin')),
);
?>

<h1>Pro Provedores</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
