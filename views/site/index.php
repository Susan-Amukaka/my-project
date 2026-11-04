<?php

/** @var yii\web\View $this */

use yii\helpers\Html;

$this->title = 'Bright Mind College';
$this->params['meta_description'] = 'A high-performance PHP framework best for developing web applications. Fast, secure, and professional.';
$this->params['meta_keywords'] = 'yii, yii2, php, framework, web application, high-performance';
?>
<div class="site-index">

    

    <!-- Extensions grid -->
    <div class="container py-5">
    <div class="text-center mb-5">
        <h1 class="display-4 fw-bold text-primary">
            BRIGHT MIND COLLEGE
        </h1>

        <h3>School Management System</h3>

        <p class="lead">
            Welcome to Bright Mind College.
            Manage students, departments, courses and enrollments.
        </p>
    </div>

    <div class="row g-4">
        <div class="col-md-3">
            <div class="card text-center shadow-sm p-3">
                <h4>Students</h4>
                <p>Manage student records.</p>
                <?= Html::a('View Students', ['student/index'], ['class' => 'btn btn-primary']) ?>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card text-center shadow-sm p-3">
                <h4>Departments</h4>
                <p>Manage departments.</p>
                <?= Html::a('View Departments', ['department/index'], ['class' => 'btn btn-primary']) ?>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card text-center shadow-sm p-3">
                <h4>Courses</h4>
                <p>Manage courses.</p>
                <?= Html::a('View Courses', ['course/index'], ['class' => 'btn btn-primary']) ?>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card text-center shadow-sm p-3">
                <h4>Enrollments</h4>
                <p>Manage enrollments.</p>
                <?= Html::a('View Enrollments', ['enrollment/index'], ['class' => 'btn btn-primary']) ?>
            </div>
        </div>
    </div>
</div>

</div>
