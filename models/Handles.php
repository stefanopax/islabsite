<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%handles}}".
 *
 * @property int $staff
 * @property int $course
 *
 * @property Course $course0
 * @property Staff $staff0
 */
class Handles extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%handles}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['staff', 'course'], 'required'],
            [['staff', 'course'], 'default', 'value' => null],
            [['staff', 'course'], 'integer'],
            [['staff', 'course'], 'unique', 'targetAttribute' => ['staff', 'course']],
            [['course'], 'exist', 'skipOnError' => true, 'targetClass' => Course::className(), 'targetAttribute' => ['course' => 'id']],
            [['staff'], 'exist', 'skipOnError' => true, 'targetClass' => Staff::className(), 'targetAttribute' => ['staff' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'staff' => 'Staff',
            'course' => 'Course',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCourse0()
    {
        return $this->hasOne(Course::className(), ['id' => 'course']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStaff0()
    {
        return $this->hasOne(Staff::className(), ['id' => 'staff']);
    }
}
