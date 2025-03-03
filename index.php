<?php
require_once 'Database.php';
require_once 'Config.php';

include 'view/Registration.php';

// include 'view/header.php';
// include 'view/content.php';
// include 'view/footer.php';



// $GLOBALS['config'] = [
//     'mysql' => [
//         'host' => 'MySQL-8.2',
//         'username' => 'root',
//         'password' => '',
//         'database' => 'kisslink',  
//     ]
// ]; 

// echo Config::get('mysql.host');


        
// $users = Database::getInstance()->query("SELECT * FROM users WHERE username IN (?, ?)", ['John Doe', 'Jane Koe']);
// $users = Database::getInstance()->get('users', ['password', '=', 'password']);
// Database::getInstance()->delete('users', ['username', '=', 'Jane Koe']);

// $id = 1;
// Database::getInstance()->update('users', $id, [
//     'username' => 'JD',
//     'password' => 'password'
// ]);

// if ($users->error()) {
//     echo 'we have an error';
// } else {
//     foreach ($users->results() as $user) {
//         echo $user->username . '<br>';
//     }
// }