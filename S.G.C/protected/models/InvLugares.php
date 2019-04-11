<?php

/**
 * This is the model class for table "inv_lugares".
 *
 * The followings are the available columns in table 'inv_lugares':
 * @property integer $id_inv_lugar
 * @property string $nombre
 * @property string $calle
 * @property string $numero
 * @property integer $telefono
 *
 * The followings are the available model relations:
 * @property InvMobiliario[] $invMobiliarios
 */
class InvLugares extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return InvLugares the static model class
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
		return 'inv_lugares';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombre, calle, numero, telefono', 'required'),
			array('telefono', 'numerical', 'integerOnly'=>true),
			array('nombre, calle, numero', 'length', 'max'=>45),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_inv_lugar, nombre, calle, numero, telefono', 'safe', 'on'=>'search'),
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
			'invMobiliarios' => array(self::HAS_MANY, 'InvMobiliario', 'id_inv_lugar'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_inv_lugar' => 'Id Inv Lugar',
			'nombre' => 'Nombre',
			'calle' => 'Calle',
			'numero' => 'Numero',
			'telefono' => 'Telefono',
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

		$criteria->compare('id_inv_lugar',$this->id_inv_lugar);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('calle',$this->calle,true);
		$criteria->compare('numero',$this->numero,true);
		$criteria->compare('telefono',$this->telefono);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}