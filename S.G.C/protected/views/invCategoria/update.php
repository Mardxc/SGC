<?php
/* @var $this InvCategoriaController */
/* @var $model InvCategoria */

$this->menu=array(
	array('label'=>'Mobiliario', 'url'=>array('InvMobiliario/admin')),
	array('label'=>'Categorias', 'url'=>array('InvCategoria/admin')),
	array('label'=>'Tipos de Mobiliario', 'url'=>array('InvTipo/admin')),
	array('label'=>'Ubicación de Mobiliario', 'url'=>array('InvLugares/admin')),
);
?>

<h1>Actualizar <?php echo $model->categoria; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>