<?php
require 'config/config.php';
return array(
    'paths' => array(
        'migrations' => '%%PHINX_CONFIG_DIR%%/db/migrations',
        'seeds' => '%%PHINX_CONFIG_DIR%%/db/seed',
    ),
    'environments' => array(
        'production' => array(
            'adapter' => 'mysql',
            'host' => DB_HOST,
            'name' => DB_NAME,
            'user' => DB_USER,
            'pass' => DB_PASSWORD,
            'charset' => 'utf8',
            'collatiion' => 'utf8_general_ci',
        ),
    ),
);