<?php

/**
 * This is the model class for table "nauczyciele".
 *
 * The followings are the available columns in table 'nauczyciele':
 * @property integer $id_n
 * @property string $przedmiot
 * @property string $ma
 *
 * The followings are the available model relations:
 * @property Users $idN
 * @property Users[] $users
 */
class Nauczyciele extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'nauczyciele';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('przedmiot, ma', 'required'),
			array('przedmiot', 'length', 'max'=>10),
			array('ma', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_n, przedmiot, ma', 'safe', 'on'=>'search'),
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
			'idN' => array(self::BELONGS_TO, 'Users', 'id_n'),
			'users' => array(self::HAS_MANY, 'Users', 'id_n'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_n' => 'Id N',
			'przedmiot' => 'Przedmiot',
			'ma' => 'Ma',
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

		$criteria->compare('id_n',$this->id_n);
		$criteria->compare('przedmiot',$this->przedmiot,true);
		$criteria->compare('ma',$this->ma,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Nauczyciele the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
