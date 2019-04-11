<?php

/**
 * This is the model class for table "ev_tipo_evento".
 *
 * The followings are the available columns in table 'ev_tipo_evento':
 * @property integer $id_eve_tipo_evento
 * @property string $tipo
 */
class EvTipoEvento extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return EvTipoEvento the static model class
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
		return 'ev_tipo_evento';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('tipo', 'required'),
			array('tipo', 'length', 'max'=>45),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_eve_tipo_evento, tipo', 'safe', 'on'=>'search'),
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

	public static function getTipoEvento($id_eve_tipo_evento)
	{
		$res=EvTipoEvento::model()->find('id_eve_tipo_evento='.$id_eve_tipo_evento);
		return $res['tipo'];
	}
	public static function listTipoEvento()
	{
		return CHtml::listData(EvTipoEvento::model()->findAll(),'id_eve_tipo_evento','tipo');
	}
	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_eve_tipo_evento' => 'Id Eve Tipo Evento',
			'tipo' => 'Tipo',
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

		$criteria->compare('id_eve_tipo_evento',$this->id_eve_tipo_evento);
		$criteria->compare('tipo',$this->tipo,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}