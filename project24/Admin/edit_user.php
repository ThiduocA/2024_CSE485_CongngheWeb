<?php
session_start();
include "data.php";
if (!isset($_SESSION['user_id']) || !isset($_COOKIE['logged_in']) ||
$_SESSION['user_role'] !== "admin") {
 header('Location: login.php');
}
$username = $_GET['username']; // Get username from URL
// ... find user data (use prepared statements in real DB)
// Display user information and edit form
foreach ($users as $u) {
  
    echo "<h2>Edit User: " . $u['name'] . "</h2>";
  
   

}

