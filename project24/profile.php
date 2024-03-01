<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<?php

session_start();
include "data.php";
if (!isset($_SESSION['user_id']) || !isset($_COOKIE['logged_in'])) {
    header('Location: login.php');
}

$username = $_SESSION['user_id'];
$user = null;

foreach ($users as $u) {
    if ($u['username'] === $username) {
        $user = $u;
        break;
    }
}

if ($user) {
    $user_role = $_SESSION['user_role'];
    echo "welcome, " . $user['name'] . "!";
    echo "<br><a href =''>Edit basic profile information</a>";
}

if ($user_role === "admin" && $authorization_levels[$user_role]['access_admin_panel']) {
    echo "<br><a href ='admin_panel.php'>Admin Panel</a>";
}
?>

<br><a href="logout.php"><button>Logout</button></a>