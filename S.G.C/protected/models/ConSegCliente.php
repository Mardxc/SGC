<?php

/**
 * This is the model class for table "con_seg_cliente".
 *
 * The followings are the available columns in table 'con_seg_cliente':
 * @property integer $id_seg_cliente
 * @property integer $id_cliente
 * @property integer $id_contrato
 */
class ConSegCliente extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return ConSegCliente the static model class
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
		return 'con_seg_cliente';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_cliente, id_contrato', 'required'),
			array('id_cliente, id_contrato', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_seg_cliente, id_cliente, id_contrato', 'safe', 'on'=>'search'),
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
			'id_seg_cliente' => 'Id Seg Cliente',
			'id_cliente' => 'Id Cliente',
			'id_contrato' => 'Id Contrato',
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

		$criteria->compare('id_seg_cliente',$this->id_seg_cliente);
		$criteria->compare('id_cliente',$this->id_cliente);
		$criteria->compare('id_contrato',$this->id_contrato);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}