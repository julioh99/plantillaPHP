<?php

const BD = [
    'host' => 'localhos',
    'port'=> 3306,
    'dbname'=> 'bds_sda1',
    'charset'=> 'utf8',
    'user'=> 'root',
    'password'=> null,
    'options'=> [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_PERSISTENT => true,
        PDO::ATTR_EMULATE_PREPARES => false
    ]
];
