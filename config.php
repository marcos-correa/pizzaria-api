<?php

return [
    'database' => [
        'name' => 'aulaDB',
        'username' => 'root',
        'password' => '',
        'conection' => 'mysql:host=localhost',
        'table' => 'cadastro',
        'options' => [

            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]
    ]
        ];