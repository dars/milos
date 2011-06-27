<?php

/**
 * This is the model class for table "boards".
 *
 * The followings are the available columns in table 'boards':
 * @property integer $id
 * @property string $title
 * @property string $content
 * @property string $created_at
 * @property string $updated_at
 * @property integer $taxonomy_id
 */
class Boards extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Boards the static model class
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
		return 'boards';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('taxonomy_id', 'numerical', 'integerOnly'=>true),
			array('title', 'length', 'max'=>100),
			array('content, created_at, updated_at', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, title, content, created_at, updated_at, taxonomy_id', 'safe', 'on'=>'search'),
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
			'id' => 'ID',
			'title' => '標題',
			'content' => '內容',
			'created_at' => '建立時間',
			'updated_at' => '最後更新時間',
			'taxonomy_id' => 'Taxonomy',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('content',$this->content,true);
		$criteria->compare('created_at',$this->created_at,true);
		$criteria->compare('updated_at',$this->updated_at,true);
		$criteria->compare('taxonomy_id',$this->taxonomy_id);

		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
		));
	}
}