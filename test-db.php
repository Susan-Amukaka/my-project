<?php

require __DIR__ . '/vendor/autoload.php';

$config = require __DIR__ . '/config/db.php';

try {
    $db = new yii\db\Connection($config);
    $db->open();

    echo "Database connection successful!";

    $db->close();
} catch (Throwable $e) {
    echo "Connection failed: " . $e->getMessage();
}