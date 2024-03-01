<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<?php

session_start();
include "data.php";
if (!isset($_SESSION['user_id']) || !isset($_COOKIE['logged_in']) || $_SESSION['user_role'] !== "admin") {
    header("Location: login.php");
}

$username = $_GET['username'];
echo "<h2>Edit User: " . $username . "</h2>";