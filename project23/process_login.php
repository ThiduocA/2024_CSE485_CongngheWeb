<?php
    session_start();
    include "data.php";

    $username = $_POST['username'];
    $password = $_POST['password'];
    $user = NULL;
    foreach ($users as $u) {
        if ( $u['username'] === $username && password_verify($password, $u['password'])) {
            $user = $u;
            break;
        }
    }
    if (isset($user)) {
        $_SESSION['user_id'] = $user['username']; 
        setcookie('logged_in', true, time() + 60 * 60 * 24 * 30, "/"); 
        header('Location: profile.php');
        exit(); 
    } else {
        echo "Invalid username or password.";
    }
?>
