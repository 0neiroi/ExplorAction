<?php
define('DB_CONNECTOR', 'mysql'); // Possible values: mysq, sqlite
define('DB_HOST', 'localhost');
define('DB_NAME', 'exploraction'); // sqlite: used as file path
define('DB_USER', 'anonymous');
define('DB_PASSWORD', 'anonymous');

define( 'APP_PATH', realpath('..') . '/app' );
define('DISABLE_CSRF_PROTECTION',true);

//AuthSession params
//define('AUTH_USER_MODEL', 'YOUR MODEL CLASS');
//define('AUTH_CRYPTO_COST', 10);
