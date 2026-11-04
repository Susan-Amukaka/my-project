
<?php

use yii\helpers\Html;

$this->title = 'Bright Mind College - Students';
?>

<h1><?= Html::encode($this->title) ?></h1>

<p>Welcome to the Bright Mind College student records page.</p>

<?php if (empty($students)): ?>

    <p>No student records found.</p>

<?php else: ?>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Registration Number</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach ($students as $student): ?>
                <tr>
                    <td><?= Html::encode($student->id) ?></td>
                    <td><?= Html::encode($student->reg_no) ?></td>
                    <td><?= Html::encode($student->first_name) ?></td>
                    <td><?= Html::encode($student->last_name) ?></td>
                    <td><?= Html::encode($student->email) ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

<?php endif; ?>
