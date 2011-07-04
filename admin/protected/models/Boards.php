<?php

/**
 * This is the model class for table "boards".
 *
 * The followings are the available columns in table 'boards':
 * @property integer $id
 * @property string $title
 * @property string $tips
 * @property string $content
 * @property string $created_at
 * @property string $updated_at
 * @property integer $taxonomy_id
 * @property integer $publish
 * @property double $weight
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
			array('taxonomy_id, publish', 'numerical', 'integerOnly'=>true),
			array('weight', 'numerical'),
			array('title', 'length', 'max'=>100),
			array('tips, content, created_at, updated_at', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, title, tips, content, created_at, updated_at, taxonomy_id, publish, weight', 'safe', 'on'=>'search'),
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
			'tips' => '摘要',
			'content' => '內容',
			'created_at' => 'Created At',
			'updated_at' => 'Updated At',
			'taxonomy_id' => '分類',
			'publish' => '上下架',
			'weight' => '比重',
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
		$criteria->compare('tips',$this->tips,true);
		$criteria->compare('content',$this->content,true);
		$criteria->compare('created_at',$this->created_at,true);
		$criteria->compare('updated_at',$this->updated_at,true);
		$criteria->compare('taxonomy_id',$this->taxonomy_id);
		$criteria->compare('publish',$this->publish);
		$criteria->compare('weight',$this->weight);

		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
		));
	}
}