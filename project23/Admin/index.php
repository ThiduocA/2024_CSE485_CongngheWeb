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


    if(!isset($_SESSION['user_id'])|| !isset($_COOKIE['logged_in'])){
        header('location:login.php');
    }
    $usersname = $_SESSION['user_id'];


    
    $user = null;
    foreach ($users as $people) {
        if($people['username']===$usersname){
            $user = $people;
            break;
        }
        
    }
    if($user){
        echo   "welcom,".$user['username']."!" ;
        
    }else{
        echo "error:use not fond";
    }


?>

    <div><a href="logout.php">logout</a></div>
