<?php
session_start();

require_once 'Database.php';
require_once 'Config.php';
require_once 'Validation.php';
require_once 'Input.php';
require_once 'Token.php';
require_once 'Session.php';
require_once 'User.php';
require_once 'Redirect.php';


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
Redirect::to(404);

if (Input::exists()) {
    if (Token::check(Input::get('token'))) {
        $validate = new Validate();

        $validation = $validate->check($_POST, [
            'username' => [
                'required' => true,
                'min' => 2,
                'max' => 32,
                'unique' => 'users'
            ],
            'password' => [
                'required' => true,
                'min' => 3
            ],
            'password_again' => [
                'required' => true,
                'matches' => 'password'
            ],
        ]);

        if ($validation->passed()) {

            // Database
            $user = new User;

            $user->create([
                'username' => Input::get('username'),
                'password' => password_hash(Input::get('password'), PASSWORD_DEFAULT)
            ]);

            Session::flash('success', 'register success');
            // header('Location: /test.php');

        } else {
            foreach ($validation->errors() as $error) {
                echo $error . "<br>";
            }
        }
    }
}
?>


<form action="" method="post">
    <?php echo Session::flash('success'); ?>
    <div class="field">
        <label for="username">Username</label>
        <input type="text" name="username" value="<?php echo Input::get('username') ?>">
    </div>

    <div class="field">
        <label for="password">Password</label>
        <input type="text" name="password">
    </div>

    <div class="field">
        <label for="">Password Again</label>
        <input type="text" name="password_again">
    </div>

    <input type="hidden" name="token" value="<?php echo Token::generate(); ?>">

    <div class="field">
        <button type="submit">Submit</button>
    </div>
</form>