<?php

/**
 * This is the model class for table "con_det_servicios".
 *
 * The followings are the available columns in table 'con_det_servicios':
 * @property integer $id_det_servicios
 * @property integer $id_contrato
 * @property integer $id_servicio
 * @property integer $cantidad
 */
class ConDetServicios extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return ConDetServicios the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'con_det_servicios';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_contrato, id_servicio, cantidad', 'required'),
			array('id_contrato, id_servicio, cantidad', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_det_servicios, id_contrato, id_servicio, cantidad', 'safe', 'on'=>'search'),
		);
	}

	public static function getMaxId()
	{
		$sql="SELECT 
			    MAX(id_det_servicios)
			FROM
			    con_det_servicios;";

		$carreraIns=ConDetServicios::model()->findBySql($sql);

		return $carreraIns['id_det_servicios'];
	}

	public static function getTotal()
	{
		$sql="SELECT 
			    COUNT(id_personal)
			FROM
			    rh_personal;";

		$carreraIns=ConDetServicios::model()->findBySql($sql);

		return $carreraIns['id_personal'];
	}

	public function listarServicios($id){
		
		$criteria=new CDbCriteria;
		$criteria->condition="id_contrato=:id";
		$criteria->params=array(':id'=>$id);
		//$criteria->limit=30;
		
		$data=ConDetServicios::model()->findAll($criteria);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
			//'data'=>$data,
		));

	}


	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_det_servicios' => 'Id Det Servicios',
			'id_contrato' => 'Id Contrato',
			'id_servicio' => 'Id Servicio',
			'cantidad' => 'Cantidad',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id_det_servicios',$this->id_det_servicios);
		$criteria->compare('id_contrato',$this->id_contrato);
		$criteria->compare('id_servicio',$this->id_servicio);
		$criteria->compare('cantidad',$this->cantidad);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}