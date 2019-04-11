<?php

/**
 * This is the model class for table "pro_provedores".
 *
 * The followings are the available columns in table 'pro_provedores':
 * @property integer $id_proveedor
 * @property string $pro_nombre
 * @property string $pro_direccion
 * @property string $pro_telefono
 * @property string $pro_producto
 */
class ProProvedores extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return ProProvedores the static model class
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
		return 'pro_provedores';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('pro_nombre, pro_direccion, pro_telefono, pro_producto', 'required'),
			array('pro_nombre, pro_direccion, pro_telefono, pro_producto', 'length', 'max'=>45),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_proveedor, pro_nombre, pro_direccion, pro_telefono, pro_producto', 'safe', 'on'=>'search'),
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

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_proveedor' => 'Id Proveedor',
			'pro_nombre' => 'Pro Nombre',
			'pro_direccion' => 'Pro Direccion',
			'pro_telefono' => 'Pro Telefono',
			'pro_producto' => 'Pro Producto',
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

		$criteria->compare('id_proveedor',$this->id_proveedor);
		$criteria->compare('pro_nombre',$this->pro_nombre,true);
		$criteria->compare('pro_direccion',$this->pro_direccion,true);
		$criteria->compare('pro_telefono',$this->pro_telefono,true);
		$criteria->compare('pro_producto',$this->pro_producto,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}