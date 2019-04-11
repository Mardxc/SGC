<?php

/**
 * This is the model class for table "inv_mobiliario".
 *
 * The followings are the available columns in table 'inv_mobiliario':
 * @property integer $id_mobiliario
 * @property string $descripcion
 * @property integer $id_tipo
 * @property integer $id_categoria
 * @property integer $id_inv_lugar
 *
 * The followings are the available model relations:
 * @property InvTipo $idTipo
 * @property InvCategoria $idCategoria
 * @property InvLugares $idInvLugar
 */
class InvMobiliario extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return InvMobiliario the static model class
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
		return 'inv_mobiliario';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_tipo, id_categoria, descripcion, id_inv_lugar, cantidad', 'required'),
			array('id_tipo, id_categoria, id_inv_lugar, cantidad', 'numerical', 'integerOnly'=>true),
			array('descripcion', 'length', 'max'=>45),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_mobiliario, id_tipo, id_categoria, descripcion, id_inv_lugar, cantidad', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */

	public static function getTipo($id_tipo)
	{
		$res=InvTipo::model()->find('id_tipo='.$id_tipo);
		return $res['tipo'];
	}

	public static function getCategoria($id_categoria)
	{
		$res=InvCategoria::model()->find('id_categoria='.$id_categoria);
		return $res['categoria'];
	}

	public static function getLugar($id_inv_lugar)
	{
		$res=InvLugares::model()->find('id_inv_lugar='.$id_inv_lugar);
		return $res['nombre'];
	}

	public static function listTipo()
	{
		return CHtml::listData(InvTipo::model()->findAll(),'id_tipo','tipo');
	}

	public static function listCategoria()
	{
		return CHtml::listData(InvCategoria::model()->findAll(),'id_categoria','categoria');
	}

	public static function listLugar()
	{
		return CHtml::listData(InvLugares::model()->findAll(),'id_inv_lugar','nombre');
	}


	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'conEventoMobiliarios' => array(self::HAS_MANY, 'ConEventoMobiliario', 'id_mobiliario'),
			'idCategoria' => array(self::BELONGS_TO, 'InvCategoria', 'id_categoria'),
			'idTipo' => array(self::BELONGS_TO, 'InvTipo', 'id_tipo'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_mobiliario' => 'Id Mobiliario',
			'id_tipo' => 'Id Tipo',
			'id_categoria' => 'Id Categoria',
			'descripcion' => 'Descripcion',
			'id_inv_lugar' => 'Id Inv Lugar',
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

		$criteria->compare('id_mobiliario',$this->id_mobiliario);
		$criteria->compare('id_tipo',$this->id_tipo);
		$criteria->compare('id_categoria',$this->id_categoria);
		$criteria->compare('descripcion',$this->descripcion,true);
		$criteria->compare('id_inv_lugar',$this->id_inv_lugar);
		$criteria->compare('cantidad',$this->cantidad);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}