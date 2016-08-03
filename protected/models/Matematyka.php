<?php

/**
 * This is the model class for table "matematyka".
 *
 * The followings are the available columns in table 'matematyka':
 * @property integer $id_u
 * @property string $T1
 * @property string $T2
 * @property string $T3
 *
 * The followings are the available model relations:
 * @property Uczniowie $idU
 */
class Matematyka extends CActiveRecord
{
	public $imie;
	public $nazwisko;
	
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'matematyka';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_u', 'required'),
			array('id_u', 'numerical', 'integerOnly'=>true),
			array('T1, T2, T3', 'length', 'max'=>3),
			array('T1, T2, T3', 'match', 'pattern'=>'/^[0-9]{1,3}(\.[0-9]{0,2})?$/'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_u, T1, T2, T3, imie, nazwisko', 'safe', 'on'=>'search'),
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
			'idU' => array(self::BELONGS_TO, 'Uczniowie', 'id_u'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_u' => 'Id U',
			'T1' => 'T1',
			'T2' => 'T2',
			'T3' => 'T3',
			'imie' => 'Imię',
			'nazwisko' => 'Nazwisko',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('T1',$this->T1);
		$criteria->compare('T2',$this->T2);
		$criteria->compare('T3',$this->T3);
		$criteria->with = array( 'idU' );
		$criteria->compare( 'nazwisko', $this->nazwisko, true);
		$criteria->compare( 'imie', $this->imie, true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
			'sort'=>array(
					'defaultOrder'=>'nazwisko',
					'attributes'=>array(
							'nazwisko'=>array(
									'asc'=>'nazwisko',
									'desc'=>'nazwisko DESC',
							),
							'imie'=>array(
									'asc'=>'imie',
									'desc'=>'imie DESC',
							),
							'*',
					),
			),
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Matematyka the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
