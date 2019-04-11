<?php

/**
 * This is the model class for table "con_contrato".
 *
 * The followings are the available columns in table 'con_contrato':
 * @property integer $id_contrato
 * @property string $fecha_evento
 * @property string $hora_inicial
 * @property integer $id_inv_lugar
 * @property integer $id_eve_tipo_evento
 * @property integer $asistentes
 * @property string $hora_final
 * @property string $direccion_evento
 */
class ConContrato extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return ConContrato the static model class
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
		return 'con_contrato';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('fecha_evento, hora_inicial, id_inv_lugar, id_eve_tipo_evento, asistentes, hora_final', 'required'),
			array('id_inv_lugar, id_eve_tipo_evento, asistentes', 'numerical', 'integerOnly'=>true),
			array('direccion_evento', 'length', 'max'=>45),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_contrato, fecha_evento, hora_inicial, id_inv_lugar, id_eve_tipo_evento, asistentes, hora_final, direccion_evento', 'safe', 'on'=>'search'),
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

	public static function getCliente($id_contrato)
	{
		$res=ConCliente::model()->find('id_contrato='.$id_contrato);
		return $res['nombre'] . ' ' . $res['ape_pat'] . ' ' . $res['ape_mat'];
	}

	public static function setDireccion($id_inv_lugar)
	{
		$res=InvLugares::model()->find('id_inv_lugar='.$id_inv_lugar);
		return $res['calle'] . ' ' . $res['numero'];
	}

	public function beforeSave()
	{
		if($this->fecha_evento <> '')
	    {
			list($d2, $m2, $y2) = explode('/', $this->fecha_evento);
	        $mk2=mktime(0, 0, 0, $m2, $d2, $y2);
	        $this->fecha_evento = date ('Y-m-d', $mk2);
		}
		return parent::beforeSave();
	}

	public function afterFind ()
	{
	    if($this->fecha_evento <> '')
	    {               
	        list($y, $m, $d) = explode('-', $this->fecha_evento);
	        $mk=mktime(0, 0, 0, $m, $d, $y);
	        $this->fecha_evento = date ('d/m/Y', $mk);
	    }
	    return parent::afterFind ();
	}
	public static function getConAll($id)
	{
		$sql="SELECT
			*
		FROM
		    con_contrato
		WHERE
			id_contrato=$id;";

		$contrato=ConContrato::model()->findBySql($sql);

		return $contrato;
	}
	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_contrato' => 'Id Contrato',
			'fecha_evento' => 'Fecha Evento',
			'hora_inicial' => 'Hora Inicial',
			'id_inv_lugar' => 'Id Inv Lugar',
			'id_eve_tipo_evento' => 'Tipo Evento',
			'asistentes' => 'Asistentes',
			'hora_final' => 'Hora Final',
			'direccion_evento' => 'Direccion Evento',
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

		$criteria->compare('id_contrato',$this->id_contrato);
		$criteria->compare('fecha_evento',$this->fecha_evento,true);
		$criteria->compare('hora_inicial',$this->hora_inicial,true);
		$criteria->compare('id_inv_lugar',$this->id_inv_lugar);
		$criteria->compare('id_eve_tipo_evento',$this->id_eve_tipo_evento);
		$criteria->compare('asistentes',$this->asistentes);
		$criteria->compare('hora_final',$this->hora_final,true);
		$criteria->compare('direccion_evento',$this->direccion_evento,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
			'sort'=>array(
					'defaultOrder'=>'id_contrato DESC',
				),
			'pagination'=>array(
				'pageSize'=>'3',
			),
		));
	}
}