<?php
include (ROOT."/models/User.php");
include (ROOT."/config/database.php");
class UserService{
    public function getUsers() {
        $conn = connectDB();
        $sql = "SELECT * FROM users";
        $result = mysqli_query($conn, $sql);
        $users = array();
        while ($row = mysqli_fetch_assoc($result)) {
            $users[] = $row;
        }
        mysqli_free_result($result);
        return $users;
    }
    public function getUserById($id) {
        $conn = connectDB();
        $sql = "SELECT * FROM users WHERE id = ?";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "i", $id);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        $user = mysqli_fetch_assoc($result);
        mysqli_free_result($result);
        mysqli_stmt_close($stmt);
        return $user;
    }
    public function addUser($username, $email, $password) {
        $conn = connectDB();
        $sql = "INSERT INTO users (username, email, password) VALUES (?, ?, ?)";
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "sss", $username, $email, $hashed_password);
        $result = mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        return $result;
    }
    public function updateUser($id, $username, $email, $password) {
        $conn = connectDB();
        $sql = "UPDATE users SET username = ?, email = ?, password = ? WHERE id = ?";
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "sssi", $username, $email, $hashed_password, $id);
        $result = mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        return $result;
    }
    public function deleteUser($id) {
        $conn = connectDB();
        $sql = "DELETE FROM users WHERE id = ?";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "i", $id);
        $result = mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        return $result;
    }
    public function isUserExist($id) {
        $conn = connectDB();
        $sql = "SELECT COUNT(*) FROM users WHERE id = ?";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "i", $id);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        $count = mysqli_fetch_row($result)[0];
        mysqli_free_result($result);
        mysqli_stmt_close($stmt);
        return $count > 0;
    }
}