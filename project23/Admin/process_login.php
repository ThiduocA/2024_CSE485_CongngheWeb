<?php 
    session_start();

    $users = [
    [
        "username"=>"gaubaccuc",
        "password"=>password_hash("123",PASSWORD_DEFAULT),

    ],
    [
        "username"=>"viethoang",
        "password"=>password_hash("123",PASSWORD_DEFAULT),
    ],
];
    $usersname = $_POST['username'];
    $password = $_POST['password'];

    $user = null;
    foreach ($users as $people) {
        if($people['username']===$usersname){
            $user = $people;
            break;
        }
        
    }

    



    if($user && password_verify($password,$user['password']) ){
        $_SESSION['user_id'] = $user['username'];
        setcookie('logged_in',true,time()+60*60*24*30,"/");
        header("location:index.php");

    }else{
        echo "invalid username and password";
    }







?>