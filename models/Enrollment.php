<?php

namespace app\models;

use yii\db\ActiveRecord;

class Enrollment extends ActiveRecord
{
    public static function tableName()
    {
        return 'enrollments';
    }
}