<?php

require_once 'init.php';

// echo Session::get(Config::get('session.user_session'));

echo Session::flash('success');

$user = new User;
if ($user->isLoggedIn()) {
    echo "Hi, <a href='#'>{$user->data()->username}</a>";
    echo "<p><a href='logout.php'>Logout</a></p>";
    echo "<p><a href='update.php'>Update profile</a></p>";
    echo "<p><a href='changepassword.php'>Change password</a></p>";

    if($user->hasPermissions('admin')) {
        echo 'You are admin';
    }
} else {
    echo "<a href='login.php'>Login</a> or <a href='register.php'>Register</a>";
}



// include 'view/header.php';
// include 'view/content.php';
// include 'view/logged_in.php';
// include 'view/footer.php';

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

