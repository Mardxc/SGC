<?php

class ConContratoController extends Controller
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
				'actions'=>array('create','update','detail','guardar','print','pdf'),
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

	public function actionGuardar(){
		$accion				=$_POST['guarda'];
		$id_contrato		=$_POST['id_contrato'];

		$fecha_evento		=$_POST['fecha_evento'];
		$id_inv_lugar		=$_POST['id_inv_lugar'];
		$id_eve_tipo_evento	=$_POST['id_eve_tipo_evento'];
		$hora_inicial		=$_POST['hora_inicial'];
		$direccion_evento	=$_POST['direccion_evento'];
		$hora_final			=$_POST['hora_final'];
		$asistentes			=$_POST['asistentes'];
		

		$datos=array(
			'id_contrato'		=>$id_contrato,
			'id_inv_lugar'		=>$id_inv_lugar,
			'id_eve_tipo_evento'=>$id_eve_tipo_evento,
			'fecha_evento'		=>$fecha_evento,
			'hora_inicial'		=>$hora_inicial,
			'asistentes'		=>$asistentes,
			'direccion_evento'	=>$direccion_evento,
			'hora_final'		=>$hora_final
		);
		/* Save */
		if($accion=='guardar'){

			$contrato=new ConContrato;

				$contrato->id_contrato				=	$id_contrato;
				$contrato->fecha_evento 			= 	$fecha_evento;
				$contrato->id_inv_lugar				=	$id_inv_lugar;
				$contrato->id_eve_tipo_evento		=	$id_eve_tipo_evento;
				$contrato->hora_inicial				=	$hora_inicial;
				$contrato->asistentes				=	$asistentes;	
				$contrato->hora_final				=	$hora_final;
				$contrato->direccion_evento			=	$direccion_evento;

			$contrato->save();

			echo CJSON::encode(array(
				'status'=>'guardar',
				'id_contrato'=>$contrato->id_contrato,
				'datos'=>$datos
				))
			;

		/* Update */
		}elseif ($accion=='actualizar') {
			
			$contrato = ConContrato::model()->findByAttributes(array('id_contrato'=>$id_contrato));

				$contrato->id_contrato 				= 	$id_contrato;
				$contrato->fecha_evento 			= 	$fecha_evento;
				$contrato->id_inv_lugar				=	$id_inv_lugar;
				$contrato->id_eve_tipo_evento		=	$id_eve_tipo_evento;
				$contrato->hora_inicial 			= 	$hora_inicial;
				$contrato->asistentes				=	$asistentes;
				$contrato->hora_final 				= 	$hora_final;
				$contrato->direccion_evento			=	$direccion_evento;

			$contrato->SaveAttributes(array(
				'id_contrato',
				'fecha_evento',
				'id_inv_lugar',
				'id_eve_tipo_evento',
				'hora_inicial',
				'asistentes',
				'hora_final',
				'direccion_evento'
				)
			);
			
			echo CJSON::encode(array(
				'status'=>'actualizar',
				'id_contrato'=>$contrato['id_contrato'],
				'datos'=>$datos
				)
			);
			
		}

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

	public function actionPrint()
	{
		//$this->renderPartial("print",array("model"=>ConContrato::model()->findAll()),true);
		//$content=$this->renderPartial("print",array("model"=>ConContrato::model()->findAll()),true);
		Yii::app()->request->sendFile("print.docx","Hola mundo");
	}
	 public function actionPdf($id)
    {
    	$this->renderPartial("print",array("model"=>ConContrato::model()->getConAll($id)),true);
        //$this->render('pdf',array('model'=>$this->loadModel($id), ));
    }

	public function actionDetail($id)
	{
		if ($id==0) {
			$model=new ConContrato;
			$this->render('detail',array(
					'id_contrato'=>$id,
					'model'=>$model,
					'id'=>$id,
			));
		}else{
			$this->render('detail',array(
					'id_contrato'=>$id,
					'model'=>$this->loadModel($id),
					'id'=>$id,
			));
			
		}
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new ConContrato;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['ConContrato']))
		{
			$model->attributes=$_POST['ConContrato'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id_contrato));
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

		if(isset($_POST['ConContrato']))
		{
			$model->attributes=$_POST['ConContrato'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id_contrato));
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
		$dataProvider=new CActiveDataProvider('ConContrato');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new ConContrato('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['ConContrato']))
			$model->attributes=$_GET['ConContrato'];

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
		$model=ConContrato::model()->findByPk($id);
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
		if(isset($_POST['ajax']) && $_POST['ajax']==='con-contrato-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
