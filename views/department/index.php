
<?php

use yii\helpers\Html;

$this->title = 'Bright Mind College - Departments';
?>

<h1><?= Html::encode($this->title) ?></h1>

<p>List of departments offered at Bright Mind College.</p>

<table class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Department Name</th>
            <th>Head of Department</th>
        </tr>
    </thead>

    <tbody>
        <?php foreach ($departments as $department): ?>
            <tr>
                <td><?= Html::encode($department->id) ?></td>
                <td><?= Html::encode($department->department_name) ?></td>
                <td><?= Html::encode($department->{'h.o.d'}) ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
