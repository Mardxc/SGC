<?php

/**
 * This is the model class for table "rh_personal".
 *
 * The followings are the available columns in table 'rh_personal':
 * @property integer $id_personal
 * @property string $rh_nombre
 * @property string $rh_ape_pat
 * @property string $rh_ape_mat
 * @property string $rh_telefono
 */
class RhPersonal extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return RhPersonal the static model class
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
		return 'rh_personal';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('rh_nombre, rh_ape_pat, rh_ape_mat, rh_telefono', 'required'),
			array('rh_nombre, rh_ape_pat, rh_ape_mat, rh_telefono', 'length', 'max'=>45),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_personal, rh_nombre, rh_ape_pat, rh_ape_mat, rh_telefono', 'safe', 'on'=>'search'),
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
			'id_personal' => 'Id Personal',
			'rh_nombre' => 'Rh Nombre',
			'rh_ape_pat' => 'Rh Ape Pat',
			'rh_ape_mat' => 'Rh Ape Mat',
			'rh_telefono' => 'Rh Telefono',
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

		$criteria->compare('id_personal',$this->id_personal);
		$criteria->compare('rh_nombre',$this->rh_nombre,true);
		$criteria->compare('rh_ape_pat',$this->rh_ape_pat,true);
		$criteria->compare('rh_ape_mat',$this->rh_ape_mat,true);
		$criteria->compare('rh_telefono',$this->rh_telefono,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}