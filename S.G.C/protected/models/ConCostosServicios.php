<?php

/**
 * This is the model class for table "con_costos_servicios".
 *
 * The followings are the available columns in table 'con_costos_servicios':
 * @property integer $id_costo
 * @property integer $costo
 * @property string $fecha
 * @property string $status
 *
 * The followings are the available model relations:
 * @property ConServicios[] $conServicioses
 */
class ConCostosServicios extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return ConCostosServicios the static model class
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
		return 'con_costos_servicios';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('costo, fecha, status', 'required'),
			array('costo', 'numerical', 'integerOnly'=>true),
			array('status', 'length', 'max'=>45),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_costo, costo, fecha, status', 'safe', 'on'=>'search'),
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
			'conServicioses' => array(self::HAS_MANY, 'ConServicios', 'id_costo'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_costo' => 'Id Costo',
			'costo' => 'Costo',
			'fecha' => 'Fecha',
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

		$criteria->compare('id_costo',$this->id_costo);
		$criteria->compare('costo',$this->costo);
		$criteria->compare('fecha',$this->fecha,true);
		$criteria->compare('status',$this->status,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}