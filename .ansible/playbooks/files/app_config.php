<?php

return [
    'components' => [
        'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'pgsql:host=localhost;dbname=yii2',
            'username' => 'yii2',
            'password' => 'yii2',
            'charset' => 'utf8',
        ]
    ]
];
