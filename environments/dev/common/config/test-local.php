<?php

return [
    'components' => [
        'db' => [
            'class' => \yii\db\Connection::class,
            'dsn' => 'mysql:host=mysql_test;dbname=yii2advanced_test',
            'username' => 'yii2advanced_test',
            'password' => 'secret_test',
            'charset' => 'utf8',
        ],
    ],
];
