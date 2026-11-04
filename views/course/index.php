
<?php

use yii\helpers\Html;

$this->title = 'Bright Mind College - Courses';
?>

<h1><?= Html::encode($this->title) ?></h1>

<p>List of courses offered at Bright Mind College.</p>

<table class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Course Name</th>
        </tr>
    </thead>

    <tbody>
        <?php foreach ($courses as $course): ?>
            <tr>
                <td><?= Html::encode($course->id) ?></td>
                <td><?= Html::encode($course->course_name) ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
