<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Login';
$this->breadcrumbs=array(
	'Login',
);
?>

<h1>Login</h1>

<div class="form">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'login-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>


<table>
	<tr>
		<td>
			Usuario
		</td>
		<td>
			<?php echo $form->textField($model,'username'); ?>
			<?php echo $form->error($model,'username'); ?>	
		</td>
	</tr>
	<tr>
		<td>
			Contraseña
		</td>
		<td>
			<?php echo $form->passwordField($model,'password'); ?>
			<?php echo $form->error($model,'password'); ?>
		</td>
	</tr>
	<tr>
		<td align="center" colspan="2">
			<?php echo $form->label($model,'Mantener abierto'); ?>
			<?php echo $form->checkBox($model,'rememberMe'); ?>
			<?php echo $form->error($model,'rememberMe'); ?>
		</td>
	</tr>
	<tr>
		<td align="center" colspan="2">
			<p class="hint">
				Utiliza <kbd>demo</kbd>/<kbd>demo</kbd> or <kbd>admin</kbd>/<kbd>admin</kbd> para iniciar.
			</p>
		</td>
	</tr>
	<tr>
		<td align="center" colspan="2">
			<?php echo CHtml::submitButton('Login'); ?>	
		</td>
	</tr>
</table>
<?php $this->endWidget(); ?>
</div><!-- form -->
