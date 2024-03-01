<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }

        .container {
            max-width: 400px;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            text-align: center; /* căn giữa các phần tử trong container */
        }
        .container p {
            margin: 0 0 10px;
        }
        .container a {
            text-decoration: none;
        }
        .container button {
            padding: 10px 20px;
            background-color: #007bff;
            border: none;
            color: #fff;
            cursor: pointer;
            border-radius: 5px;
            transition: background-color 0.3s ease;
            display: inline-block; /* chuyển button thành một phần tử block */
            margin-top: 20px; /* margin top để tạo khoảng cách giữa nút và nội dung trên */
        }
        .container button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
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
                echo "Welcome, " . $user['name'] . "!";
                echo "<br>Email: " . $user['email'];
            } else {
                echo "Error: User not found.";
            }
        ?>
        <br>
        <a href="logout.php"><button type="submit" >Logout</button></a>
    </div>
</body>
</html>
