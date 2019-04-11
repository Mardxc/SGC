<?php
/* @var $this ProProvedoresController */
/* @var $model ProProvedores */

$this->menu=array(
	array('label'=>'Provedores', 'url'=>array('admin')),
	
);
?>

<h1>Actualizar <?php echo $model->pro_nombre; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>