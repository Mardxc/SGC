<?php

/**
 * This is the model class for table "con_servicios".
 *
 * The followings are the available columns in table 'con_servicios':
 * @property integer $id_servicio
 * @property string $servicio
 * @property string $descripcion
 * @property integer $costo
 * @property string $status
 */
class ConServicios extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return ConServicios the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public static function getStatus($status)
	{
		if ($status==1) {
			$res="DISPONIBLE";
		}
		if ($status==0) {
			$res="NO DISPONIBLE";
		}
		return $res;
	}

	public function tableName()
	{
		return 'con_servicios';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('servicio, descripcion, costo, status', 'required'),
			array('costo', 'numerical', 'integerOnly'=>true),
			array('servicio, descripcion, status', 'length', 'max'=>45),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_servicio, servicio, descripcion, costo, status', 'safe', 'on'=>'search'),
		);
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

	public static function getServicio($id_servicio)
	{
			$res=ConServicios::model()->find('id_servicio='.$id_servicio);
			return $res['servicio'];
	}

	public static function listServicio()
	{
		return CHtml::listData(ConServicios::model()->findAll(),'id_servicio','servicio');
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_servicio' => 'Id Servicio',
			'servicio' => 'Servicio',
			'descripcion' => 'Descripcion',
			'costo' => 'Costo',
			'status' => 'Status',
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

		$criteria->compare('id_servicio',$this->id_servicio);
		$criteria->compare('servicio',$this->servicio,true);
		$criteria->compare('descripcion',$this->descripcion,true);
		$criteria->compare('costo',$this->costo);
		$criteria->compare('status',$this->status,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}