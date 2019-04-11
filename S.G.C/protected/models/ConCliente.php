<?php

/**
 * This is the model class for table "con_cliente".
 *
 * The followings are the available columns in table 'con_cliente':
 * @property integer $id_cliente
 * @property string $nombre
 * @property string $ape_pat
 * @property string $ape_mat
 * @property string $domicilio
 * @property string $colonia
 * @property integer $telefono
 * @property integer $id_contrato
 */
class ConCliente extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return ConCliente the static model class
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
		return 'con_cliente';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombre, ape_pat, ape_mat, domicilio, colonia, telefono, id_contrato', 'required'),
			array('telefono, id_contrato', 'numerical', 'integerOnly'=>true),
			array('nombre, ape_pat, ape_mat, domicilio, colonia', 'length', 'max'=>45),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_cliente, nombre, ape_pat, ape_mat, domicilio, colonia, telefono, id_contrato', 'safe', 'on'=>'search'),
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
	public function getCliente($id)
	{

		$sql="SELECT
			*
		FROM
		    con_cliente
		WHERE
			id_cliente=".$id;

		$contrato=ConCliente::model()->findBySql($sql);

		return $contrato;
	}
	public function getAll()
	{
		$sql="SELECT
			*
		FROM
		    con_cliente";

		$contrato=ConCliente::model()->findBySql($sql);

		return $contrato;
	}
	public function getAllData(){
		
		$criteria=new CDbCriteria;
		$criteria->order="id_cliente";
		//$criteria->limit=30;
		
		$data=ConCliente::model()->findAll($criteria);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
			'sort'=>array(
					'defaultOrder'=>'id_cliente ASC',
				),
			'pagination'=>array(
				'pageSize'=>'4',
			),
		));

	}
	public static function getTel($id_contrato)
	{
		$res=ConCliente::model()->find('id_contrato='.$id_contrato);
		return $res['telefono'];
	}
	public static function getDom($id_contrato)
	{
		$res=ConCliente::model()->find('id_contrato='.$id_contrato);
		return $res['domicilio'];
	}
	public static function getCol($id_contrato)
	{
		$res=ConCliente::model()->find('id_contrato='.$id_contrato);
		return $res['colonia'];
	}
	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_cliente' => 'Id Cliente',
			'nombre' => 'Nombre',
			'ape_pat' => 'Ape Pat',
			'ape_mat' => 'Ape Mat',
			'domicilio' => 'Domicilio',
			'colonia' => 'Colonia',
			'telefono' => 'Telefono',
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

		$criteria->compare('id_cliente',$this->id_cliente);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('ape_pat',$this->ape_pat,true);
		$criteria->compare('ape_mat',$this->ape_mat,true);
		$criteria->compare('domicilio',$this->domicilio,true);
		$criteria->compare('colonia',$this->colonia,true);
		$criteria->compare('telefono',$this->telefono);
		$criteria->compare('id_contrato',$this->id_contrato);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
			'sort'=>array(
					'defaultOrder'=>'id_cliente ASC',
				),
			'pagination'=>array(
				'pageSize'=>'5',
			),
		));
	}
}