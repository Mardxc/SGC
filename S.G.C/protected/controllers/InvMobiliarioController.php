<?php

class InvMobiliarioController extends Controller
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
				'actions'=>array('create','update', 'guardar'),
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

public function actionGuardar(){
		$id_mobiliario=$_POST['id_mobiliario'];
		$accion=$_POST['guarda'];

		$descripcion=$_POST['descripcion'];
		$id_tipo=$_POST['id_tipo'];
		$id_categoria=$_POST['id_categoria'];
		$id_inv_lugar=$_POST['id_inv_lugar'];
		$cantidad=$_POST['cantidad'];

		$datos=array(
			'descripcion'=>$descripcion,
			'id_tipo'=>$id_tipo,
			'id_categoria'=>$id_categoria,
			'id_inv_lugar'=>$id_inv_lugar,
			'cantidad'=>$cantidad
		);
		/* Save */
		if($accion=='guardar'){

			$mobiliario=new InvMobiliario;

				$mobiliario->descripcion			=	$descripcion;
				$mobiliario->id_tipo 				= 	$id_tipo;
				$mobiliario->id_categoria			=	$id_categoria;
				$mobiliario->id_inv_lugar			=	$id_inv_lugar;
				$mobiliario->cantidad				=	$cantidad;

			$mobiliario->save();

			echo CJSON::encode(array(
				'status'=>'guardar',
				'id_mobiliario'=>0,
				'datos'=>$datos
				))
			;

		/* Update */
		}elseif ($accion=='actualizar') {
			
			$mobiliario = InvMobiliario::model()->findByAttributes(array('id_mobiliario'=>$id_mobiliario));

				$mobiliario->descripcion			=	$descripcion;
				$mobiliario->id_tipo 			= 	$id_tipo;
				$mobiliario->id_categoria 			= 	$id_categoria;
				$mobiliario->id_inv_lugar 			= 	$id_inv_lugar;
				$mobiliario->cantidad 			= 	$cantidad;

				$mobiliario->id_mobiliario 			= 	$id_mobiliario;

			$mobiliario->SaveAttributes(array(
				'descripcion',
				'id_tipo',

				'id_categoria',
				'id_inv_lugar',
				'cantidad',

				'id_mobiliario'
				)
			);
			
			echo CJSON::encode(array(
				'status'=>'actualizar',
				'id_mobiliario'=>$mobiliario['id_mobiliario'],
				'datos'=>$datos
				)
			);
			
		}

	}


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
		$model=new InvMobiliario;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['InvMobiliario']))
		{
			$model->attributes=$_POST['InvMobiliario'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id_mobiliario));
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
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['InvMobiliario']))
		{
			$model->attributes=$_POST['InvMobiliario'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id_mobiliario));
		}

		$this->render('update',array(
			'model'=>$model,
		));
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
		$dataProvider=new CActiveDataProvider('InvMobiliario');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new InvMobiliario('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['InvMobiliario']))
			$model->attributes=$_GET['InvMobiliario'];

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
		$model=InvMobiliario::model()->findByPk($id);
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
		if(isset($_POST['ajax']) && $_POST['ajax']==='inv-mobiliario-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
