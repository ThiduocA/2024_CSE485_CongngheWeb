<?php
session_start();
include "data.php";
$username = $_POST['username'];
$password = $_POST['password'];

$user_found = false;

foreach ($users as $u) {
    if ($u['username'] === $username && password_verify($password, $u['password'])) {
        $user_found = true;
        $_SESSION['user_id'] = $u['username'];
        $_SESSION['user_role'] = $u['role'];
        break;
    }
}

if ($user_found) {
    setcookie('logged_in', true, time() + 60 * 60 * 24 * 30, "/");
    header("Location: profile.php");
} else {
    echo "Mật khẩu hoặc tài khoản sai!";
}