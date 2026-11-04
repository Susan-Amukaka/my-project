<?php

namespace app\controllers;

use yii\web\Controller;
use app\models\Department;

class DepartmentController extends Controller
{
    public function actionIndex()
    {
        $departments = Department::find()->all();

        return $this->render('index', [
        'departments' => $departments,
        ]);
    }
}