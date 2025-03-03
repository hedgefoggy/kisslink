<?php
require_once '../Validation.php';
require_once '../Input.php';

if(Input::existst()) {
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
        ]
        ]);

        if ($validation->passed()) {
            echo 'passed';
        } else {
            foreach($validation->errors() as $error) {
                echo $error . "<br>";
            }
        }
?>

<form action="" method="post">
    <div class="field">
        <lable for="username">Username</lable>
        <input type="text" name="username" value="<?php echo Input::get('username')?>">
    </div>

    <div class="field">
        <lable for="password">Password</lable>
        <input type="text" name="password">
    </div>

    <div class="field">
        <lable for="">Password Again</lable>
        <input type="text" name="password_again">
    </div>
    
    <div class="field">
        <button type="submit">Submit</button>
    </div>
</form>