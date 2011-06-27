<?php

/**
 * This is the model class for table "content".
 *
 * The followings are the available columns in table 'content':
 * @property integer $id
 * @property string $uuid
 * @property string $tips
 * @property string $content
 * @property string $service
 * @property integer $taxonomy_id
 * @property string $created_at
 * @property string $updated_at
 * @property double $weight
 */
class Content extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Content the static model class
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
		return 'content';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('created_at', 'required'),
			array('taxonomy_id', 'numerical', 'integerOnly'=>true),
			array('weight', 'numerical'),
			array('uuid', 'length', 'max'=>255),
			array('tips, content, service, updated_at', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, uuid, tips, content, service, taxonomy_id, created_at, updated_at, weight', 'safe', 'on'=>'search'),
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
			'uuid' => 'Uuid',
			'tips' => 'Tips',
			'content' => 'Content',
			'service' => 'Service',
			'taxonomy_id' => 'Taxonomy',
			'created_at' => 'Created At',
			'updated_at' => 'Updated At',
			'weight' => 'Weight',
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
		$criteria->compare('uuid',$this->uuid,true);
		$criteria->compare('tips',$this->tips,true);
		$criteria->compare('content',$this->content,true);
		$criteria->compare('service',$this->service,true);
		$criteria->compare('taxonomy_id',$this->taxonomy_id);
		$criteria->compare('created_at',$this->created_at,true);
		$criteria->compare('updated_at',$this->updated_at,true);
		$criteria->compare('weight',$this->weight);

		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
		));
	}
}