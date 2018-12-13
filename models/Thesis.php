<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%thesis}}".
 *
 * @property int $id
 * @property string $title
 * @property string $company
 * @property string $description
 * @property string $duration
 * @property string $requirements
 * @property string $course
 * @property int $n_person
 * @property string $ref_person
 * @property bool $is_visible
 * @property int $created_at
 * @property bool $trien
 * @property int $staff
 *
 * @property Request[] $requests
 * @property Student[] $students
 * @property Staff $staff0
 */
class Thesis extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%thesis}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'description', 'duration', 'course', 'n_person', 'created_at','trien', 'staff'], 'required'],
            [['description'], 'string'],
            [['duration', 'n_person', 'ref_person', 'created_at', 'staff'], 'default', 'value' => null],
            [['n_person', 'created_at', 'staff'], 'integer'],
            [['is_visible','trien'], 'boolean'],
			[['duration'], 'string', 'max' => 100],
            [['title', 'company'], 'string', 'max' => 20],
            [['requirements'], 'string', 'max' => 40],
            [['course','ref_person'], 'string', 'max' => 30],
            [['staff'], 'exist', 'skipOnError' => true, 'targetClass' => Staff::className(), 'targetAttribute' => ['staff' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'company' => 'Company',
            'description' => 'Description',
            'duration' => 'Duration',
            'requirements' => 'Requirements',
            'course' => 'Course',
            'n_person' => 'N Person',
            'ref_person' => 'Ref Person',
            'is_visible' => 'Is Visible',
            'created_at' => 'Created At',
            'trien' => 'Trien',
            'staff' => 'Staff',
        ];
    }

    public static function findThesis($id)
    {
        return static::findOne(['id' => $id]);		// 'is_disabled' => 0
    }
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRequests()
    {
        return $this->hasMany(Request::className(), ['thesis' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStudents()
    {
        return $this->hasMany(Student::className(), ['id' => 'student'])->viaTable('{{%request}}', ['thesis' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStaff0()
    {
        return $this->hasOne(Staff::className(), ['id' => 'staff']);
    }

    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'staff']);
    }
	public function setData()
	{
			$this->created_at=Yii::$app->formatter->asTimestamp(date('Y-d-m h:i:s'));
	}

    public function getId()
    {
        return $this->id;
    }

	public function getTitle(){

        return $this->title;
    }

	public function softDelete($id){
			
		$this->is_visible=false;
		$this->save(false);
	}

    public static function findByTitle($title)
    {
        return static::findOne(['title' => $title]);		// 'is_disabled' => 0
    }
}
