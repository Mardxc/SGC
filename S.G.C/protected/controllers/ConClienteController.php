<?php

class ConClienteController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update','guardar', 'buscar'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new ConCliente;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['ConCliente']))
		{
			$model->attributes=$_POST['ConCliente'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id_cliente));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionBuscar()
	{
		$this->render('buscar',array(
			'model'=>$model,
		));

	}
	public function actionGetCliente()
	{
		$id=$_POST('id_cliente');
		$cliente = ConCliente::model()->findByAttributes(array('id_cliente'=>$id));
		$datos=array(
			'nombre'=>$cliente->nombre;
			'ape_pat'=> $cliente->ape_pat;
			'ape_mat'=> $cliente->ape_mat;
			'domicilio'=> $cliente->domicilio;
			'colonia'=> $cliente->colonia;
			'telefono'=> $cliente->telefono;
			'id_contrato'=> $cliente->id_contrato;
		);

		echo CJSON::encode(array(
				'status'=>'actualizar',
				'datos'=>$datos
				)
			);
	}
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['ConCliente']))
		{
			$model->attributes=$_POST['ConCliente'];
			if($model->save())
				$this->redirect(array('admin'));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	public function actionGuardar(){
		$id_cliente=$_POST['id_cliente'];
		$accion=$_POST['guarda'];

		$nombre=$_POST['nombre'];
		$ape_pat=$_POST['ape_pat'];
		$ape_mat=$_POST['ape_mat'];
		$domicilio=$_POST['domicilio'];
		$colonia=$_POST['colonia'];
		$telefono=$_POST['telefono'];
		$id_contrato=$_POST['id_contrato'];

		$datos=array(
			'nombre'=>$nombre,
			'ape_pat'=>$ape_pat,
			'ape_mat'=>$ape_mat,
			'domicilio'=>$domicilio,
			'colonia'=>$colonia,
			'telefono'=>$telefono,
			'id_contrato'=>$id_contrato
		);
		/* Save */
		if($accion=='guardar'){

			$cliente=new ConCliente;

				$cliente->nombre					=	$nombre;
				$cliente->ape_pat 				= 	$ape_pat;
				$cliente->ape_mat				=	$ape_mat;
				$cliente->domicilio				=	$domicilio;
				$cliente->colonia				=	$colonia;
				$cliente->telefono				=	$telefono;
				$cliente->id_contrato			=	$id_contrato;

			$cliente->save();

			echo CJSON::encode(array(
				'status'=>'guardar',
				'id_cliente'=>0,
				'datos'=>$datos
				))
			;

		/* Update */
		}elseif ($accion=='actualizar') {
			
			$cliente = ConCliente::model()->findByAttributes(array('id_cliente'=>$id_cliente));

				$cliente->nombre				=	$nombre;
				$cliente->ape_pat 				= 	$ape_pat;
				$cliente->ape_mat 				= 	$ape_mat;
				$cliente->domicilio 			= 	$domicilio;
				$cliente->colonia 				= 	$colonia;
				$cliente->telefono				=	$telefono;
				$cliente->id_contrato			=	$id_contrato;

				$cliente->id_cliente 			= 	$id_cliente;

			$cliente->SaveAttributes(array(
				'nombre',
				'ape_pat',

				'ape_mat',
				'domicilio',
				'colonia',
				'telefono',
				'id_contrato',

				'id_cliente'
				)
			);
			
			echo CJSON::encode(array(
				'status'=>'actualizar',
				'id_cliente'=>$cliente['id_cliente'],
				'datos'=>$datos
				)
			);
			
		}

	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('ConCliente');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new ConCliente('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['ConCliente']))
			$model->attributes=$_GET['ConCliente'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer the ID of the model to be loaded
	 */
	public function loadModel($id)
	{
		$model=ConCliente::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param CModel the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='con-cliente-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
