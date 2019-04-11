<?php
/* @var $this RhPersonalController */
/* @var $model RhPersonal */

$this->menu=array(
	array('label'=>'Personal', 'url'=>array('admin')),
);

?>

<h1>Añadir Personal</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>