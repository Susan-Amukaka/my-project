<?php

namespace app\controllers;

use yii\web\Controller;
use app\models\Enrollment;

class EnrollmentController extends Controller
{
    public function actionIndex()
    {
        $enrollments = Enrollment::find()->all();

        return $this->render('index', [
            'enrollments' => $enrollments,
        ]);
    }
}