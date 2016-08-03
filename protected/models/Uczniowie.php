<?php

/**
 * This is the model class for table "uczniowie".
 *
 * The followings are the available columns in table 'uczniowie':
 * @property integer $id_u
 * @property string $imie
 * @property string $nazwisko
 * @property string $klasa
 *
 * The followings are the available model relations:
 * @property Matematyka $matematyka
 * @property Polski $polski
 * @property Rodzice[] $rodzices
 */
class Uczniowie extends CActiveRecord
{
	public function behaviors(){
		return array('ESaveRelatedBehavior' => array(
				'class' => 'application.components.ESaveRelatedBehavior')
		);
	}
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'uczniowie';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('imie, nazwisko, klasa', 'required'),
			array('klasa', 'length', 'max'=>5),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_u, imie, nazwisko, klasa', 'safe', 'on'=>'search'),
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
			'matematyka' => array(self::HAS_ONE, 'Matematyka', 'id_u'),
			'polski' => array(self::HAS_ONE, 'Polski', 'id_u'),
			'rodzices' => array(self::HAS_MANY, 'Rodzice', 'id_u'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_u' => 'Id U',
			'imie' => 'Imie',
			'nazwisko' => 'Nazwisko',
			'klasa' => 'Klasa',
			'matematyka' => 'Matematyka',
			'polski' => 'J. polski'
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

		$criteria->compare('id_u',$this->id_u);
		$criteria->compare('imie',$this->imie,true);
		$criteria->compare('nazwisko',$this->nazwisko,true);
		$criteria->compare('klasa',$this->klasa,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Uczniowie the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
