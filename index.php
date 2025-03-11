<?php

// require_once 'init.php';

// var_dump(Session::get('user'));

include 'view/header.php';
include 'view/content.php';
include 'view/footer.php';

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

// Redirect::to('test.php');
// Redirect::to(404);

