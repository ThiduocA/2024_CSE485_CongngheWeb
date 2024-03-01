<?php
session_start();
include "data.php";
$username = $_POST['username'];
$password = $_POST['password'];
// Check if username exists and password matches (use prepared statements in

$user_found = false;
foreach ($users as $u) {
 if ($u['username'] === $username && password_verify($password,
$u['password'])) {
 $user_found = true;
 $_SESSION['user_id'] = $u['username'];
 $_SESSION['user_role'] = $u['role'];
 break;
 }
}
if ($user_found) {
 setcookie('logged_in', true, time() + 60 * 60 * 24 * 30, "/"); // Set

 header('Location: index.php');
} else {
 echo "Invalid username or password.";
}
?>
