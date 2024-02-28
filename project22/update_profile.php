<?php
if ($_SERVER['REQUEST_METHOD'] = 'POST') {
    $errors = [];
    $user['name'] = $_POST['name'];

    //Tiền xử lý
    $allowedExtensions = ['jpg', 'png', 'jpeg'];
    $maxSize = 1048576; // 1MB
    $targetDir = "assets/uploads/";

    if (!empty($_FILES['avatar']['tmp_name'])) {
        $fileInfo = pathinfo($_FILES['avatar']['name']);
        if (!in_array($fileInfo['extension'], $allowedExtensions)) {
            $errors[] = "Chỉ các định dạng JPG, JPEG, PNG được hỗ trợ!";
        } else if ($_FILES['avatar']['size'] > $maxSize) {
            $errors[] = "Kích thước tối đa là 1MB!";
        } else {
            $fileName = uniqid() . "." . $fileInfo['extension'];
            $targetFile = $targetDir . $fileName;
            if (move_uploaded_file($_FILES['avatar']['tmp_name'], $targetFile)) {
                $user['avatar'] = $targetFile; // Cập nhật avatar URL trong mảng
            } else {
                $errors[] = "Upload avatar thất bại!";
            }
        }
    }
    if (empty($errors)) {
        // Update user profile in database or persistent storage (replace with your logic) 
        echo "Profile updated successfully!";

    } else {
        echo "Errors:";
        foreach ($errors as $error) {
            echo "<br> - $error";
        }
    }
}


?>
<img src="<?= $user['avatar'] ?>" alt="">