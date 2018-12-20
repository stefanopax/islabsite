<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%student}}".
 *
 * @property int $id
 * @property string $register_id
 *
 * @property Registers[] $registers
 * @property CourseSite[] $course
 * @property Exam-student[] $exam-students
 * @property User $id0
 * @property Student-course-site[] $student-course-sites
 */
class Student extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%student}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['register_id'], 'required'],
            [['register_id'], 'integer'],									// 'max' => '6'
            [['register_id'], 'unique'],
            [['id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['id' => 'id']],
			[['mail'], 'string', 'max'=> 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'register_id' => 'Register ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getExam_students()
    {
        return $this->hasMany(Exam-student::className(), ['student' => 'id']);
    }

	public static function findStudent($id)
    {
        return static::findOne(['id' => $id]);		
	}
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getId0()
    {
        return $this->hasOne(User::className(), ['id' => 'id']);
    }
	
	 public function getId()
    {
        return $this->id;
    }
	public function setId($id)
	{
		$this->id = $id;
	}
	
	public function setRegister($register_id)
	{
		$this->register_id = $register_id;
	}

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStudent_course_sites()
    {
        return $this->hasMany(Student-course-site::className(), ['student' => 'id']);
    }

	public function afterSave($insert, $changedAttributes)
    {
        $auth = \Yii::$app->authManager;
        $authRole = $auth->getRole('student');
        $auth->revokeAll($this->getId());
        if($authRole){
            $auth->assign($authRole, $this->getId());    
        }
    }

    public function getCourseSites()
    {
        return $this->hasMany(CourseSite::className(), ['id' => 'course_site'])
            ->viaTable('{{%registers}}', ['student' => 'id']);
    }


}
