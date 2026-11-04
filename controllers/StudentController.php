<?php

namespace app\controllers;

use yii;
use yii\web\Controller;
use app\models\Student;

class StudentController extends Controller
{
    public function actionIndex()
{
    $students = Student::find()->all();

    return $this->render('index',['students' => $students,
    ]);
}
public function actionCreate()
{
    $student = new Student();
    if($student->load(Yii::$app->request->post()) && $student->save()){
        return $this->redirect(['index']);
    }
    return $this->render('create',[
        'student' => $student,
    ]);
}
}