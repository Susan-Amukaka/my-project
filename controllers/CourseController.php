<?php

namespace app\controllers;

use yii\web\Controller;
use app\models\Course;

class CourseController extends Controller
{
    public  function actionIndex()
    {
        $courses = Course::find()->all();

        return $this->render('index',[
            'courses'=> $courses,
        ]);
    }
}