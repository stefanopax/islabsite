<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "registers".
 *
 * @property int $student
 * @property int $course_site
 * @property string $date
 *
 * @property CourseSite $courseSite
 * @property Student $student0
 */
class Registers extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'registers';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['student', 'course_site', 'date'], 'required'],
            [['student', 'course_site'], 'default', 'value' => null],
            [['student', 'course_site'], 'integer'],
            [['date'], 'string', 'max' => 30],
            [['student', 'course_site'], 'unique', 'targetAttribute' => ['student', 'course_site']],
            [['course_site'], 'exist', 'skipOnError' => true, 'targetClass' => CourseSite::className(), 'targetAttribute' => ['course_site' => 'id']],
            [['student'], 'exist', 'skipOnError' => true, 'targetClass' => Student::className(), 'targetAttribute' => ['student' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'student' => 'Student',
            'course_site' => 'Course Site',
            'date' => 'Date',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCourseSite()
    {
        return $this->hasOne(CourseSite::className(), ['id' => 'course_site']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStudent0()
    {
        return $this->hasOne(Student::className(), ['id' => 'student']);
    }

}
