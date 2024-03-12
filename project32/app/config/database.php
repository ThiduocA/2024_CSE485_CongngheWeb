<?php
require_once 'config.php';
// Hàm kết nối database

if (!function_exists('connectDB')) {
    function connectDB() {
        $conn = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD ,DB_DATABASE); 
    if (!$conn) {
        die("Kết nối database thất bại: " . mysqli_connect_error());
    }
    return $conn;
    }
}
// Hàm thực hiện truy vấn SQL

?>