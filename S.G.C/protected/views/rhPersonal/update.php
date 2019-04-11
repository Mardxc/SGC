<?php
/* @var $this RhPersonalController */
/* @var $model RhPersonal */

$this->menu=array(
	array('label'=>'Personal', 'url'=>array('admin')),
);

?>

<h1>Actualizar <?php echo $model->rh_nombre; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>