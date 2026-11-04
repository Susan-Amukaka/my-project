<?php

use yii\helpers\Html;

$this->title = 'Enrollment Records';
?>

<div class="container">
    <h1>Enrollment Records</h1>

    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Enrollment ID</th>
                <th>Student ID</th>
                <th>Course ID</th>
                <th>Enrollment Date</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach ($enrollments as $enrollment): ?>
                <tr>
                    <td><?= Html::encode($enrollment->id) ?></td>
                    <td><?= Html::encode($enrollment->student_id) ?></td>
                    <td><?= Html::encode($enrollment->course_id) ?></td>
                    <td><?= Html::encode($enrollment->enrollment_date) ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>