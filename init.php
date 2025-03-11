<?php
session_start();

require_once 'classes/Database.php';
require_once 'classes/Config.php';
require_once 'classes/Validation.php';
require_once 'classes/Input.php';
require_once 'classes/Token.php';
require_once 'classes/Session.php';
require_once 'classes/User.php';
require_once 'classes/Redirect.php';


// include 'view/header.php';
// include 'view/content.php';
// include 'view/footer.php';



$GLOBALS['config'] = [
    'mysql' => [
        'host' => 'MySQL-8.2',
        'username' => 'root',
        'password' => '',
        'database' => 'kisslink',
    ],

    'session' => [
        'token_name' => 'token'
    ]
];

// echo Config::get('mysql.host');