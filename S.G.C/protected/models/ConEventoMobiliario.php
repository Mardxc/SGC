<?php

/**
 * This is the model class for table "con_evento_mobiliario".
 *
 * The followings are the available columns in table 'con_evento_mobiliario':
 * @property integer $id_evento_mobiliario
 * @property integer $id_mobiliario
 * @property integer $cantidad
 *
 * The followings are the available model relations:
 * @property InvMobiliario $idMobiliario
 */
class ConEventoMobiliario extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return ConEventoMobiliario the static model class
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
		return 'con_evento_mobiliario';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_evento_mobiliario, id_mobiliario, cantidad', 'required'),
			array('id_evento_mobiliario, id_mobiliario, cantidad', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_evento_mobiliario, id_mobiliario, cantidad', 'safe', 'on'=>'search'),
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
			'idMobiliario' => array(self::BELONGS_TO, 'InvMobiliario', 'id_mobiliario'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_evento_mobiliario' => 'Id Evento Mobiliario',
			'id_mobiliario' => 'Id Mobiliario',
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

		$criteria->compare('id_evento_mobiliario',$this->id_evento_mobiliario);
		$criteria->compare('id_mobiliario',$this->id_mobiliario);
		$criteria->compare('cantidad',$this->cantidad);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}