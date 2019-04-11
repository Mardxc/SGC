<?php
/* @var $this RhPersonalController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Rh Personals',
);

$this->menu=array(
	array('label'=>'Create RhPersonal', 'url'=>array('create')),
	array('label'=>'Manage RhPersonal', 'url'=>array('admin')),
);
?>

<h1>Rh Personals</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
