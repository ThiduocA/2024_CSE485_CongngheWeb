<?php
include(ROOT . "/models/User.php");
include(ROOT . "/config/database.php");
class UserService
{

    public function getUsers()
    {
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
    public function getUserById($id)
    {
        $conn = connectDB();
        $sql = "SELECT * FROM users WHERE employeeID = ?";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "i", $id);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        $user = mysqli_fetch_assoc($result);
        mysqli_free_result($result);
        mysqli_stmt_close($stmt);
        return $user;
    }
    public function getUserById1($id)
    {
        $conn = connectDB();
        $sql = "SELECT * FROM users WHERE employeeID = '$id'";
        $result = mysqli_query($conn, $sql);
        $users = array();
        while ($row = mysqli_fetch_assoc($result)) {
            $users[] = $row;
        }
        mysqli_free_result($result);
        $obj_users = [];
        foreach ($users as $user) {
            $obj = new User($user['username'], $user['password'], $user['role'], $user['employeeID']);
            $obj_users[] = $obj;
            // array_push($obj_posts, $obj);
        }
        return $obj_users;
    }

    public function getUserByUsername($username)
    {
        $conn = connectDB();
        $sql = "SELECT * FROM users WHERE username = ?";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "i", $id);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        $user = mysqli_fetch_assoc($result);
        mysqli_free_result($result);
        mysqli_stmt_close($stmt);
        return $user;
    }

    public function addUser($username, $password, $role, $employeeID)
    {
        $conn = connectDB();
        $sql = "INSERT INTO users (username, password, role, employeeID) VALUES (?, ?, ?, ?)";
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "sssi", $username, $hashed_password, $role, $employeeID);
        $result = mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        return $result;
    }
    public function updateUser($username, $role, $employeeID)
    {
        $conn = connectDB();
        $sql = "UPDATE users SET username = ?, role = ? WHERE employeeID = ?";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "ssi", $username, $role, $employeeID);
        $result = mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        return $result;
    }
    public function deleteUser($id)
    {
        $conn = connectDB();
        $sql = "DELETE FROM users WHERE employeeID = ?";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "i", $id);
        $result = mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        return $result;
    }
    public function isUserExist($id)
    {
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
    public function login($username, $password)
    {
        $conn = connectDB();
        $sql = "SELECT * FROM users WHERE username = ?";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "s", $username);
        mysqli_stmt_execute($stmt);

        $result = mysqli_stmt_get_result($stmt);

        if ($row = mysqli_fetch_assoc($result)) {
            // Kiểm tra mật khẩu
            if (password_verify($password, $row['password'])) {
                // Mật khẩu đúng, đăng nhập thành công
                // Thực hiện các hành động cần thiết (ví dụ: lưu trạng thái đăng nhập vào session)
                session_start();
                $_SESSION['username'] = $username;
                $_SESSION['user_id'] = $row['employeeID'];

                // Chuyển hướng hoặc trả về true để thông báo đăng nhập thành công
                return true;
            } else {
                // Mật khẩu không đúng
                return false;
            }
        } else {
            // Tên đăng nhập không tồn tại
            return false;
        }

        // Đóng kết nối

    }
    public function editPassword($id, $password)
    {
        $conn = connectDB();
        $sql = "update users set password = '$password' where employeeID = '$id'";
        $result = $conn->query($sql);
        return $result;
    }
}