<?php
require_once(ROOT . '/config/database.php');
require_once(ROOT . "/services/EmployeeService.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $id = $_GET['id'];
    $fullname = $_POST['fullname'];
    $mobilePhone = $_POST['mobilePhone'];
    $address = $_POST['address'];
    $position = $_POST['position'];
    $email = $_POST['email'];

    $user = ['name' => ''];
    $user['name'] = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    $allowedExtensions = ['jpg', 'jpeg', 'png'];
    $maxSize = 1048576;
    $targetDir = ROOT . "/public/assets/img";
    if (!empty($_FILES['avatar']['tmp_name'])) {
        $fileInfo = pathinfo($_FILES['avatar']['name']);
        if (!in_array(strtolower($fileInfo['extension']), $allowedExtensions)) {
            $error = "Chỉ cho phép tệp JPG, JPEG và PNG";
            header("Location: ?controller=user&action=info&err='$error'");
        } else if ($_FILES['avatar']['size'] > $maxSize) {
            $error = "Kích thước tệp phải nhỏ hơn 1MB";
            header("Location: ?controller=user&action=info&err='$error'");

        } else {
            $fileName = basename($_FILES['avatar']['name']);
            $targetFile = $targetDir . $fileName;
            if (move_uploaded_file($_FILES['avatar']['tmp_name'], $targetFile)) {
                $user['avatar'] = $targetFile; // Update avatar URL in array
            } else {
                $error = "Thay đổi ảnh đại diện thất bại";
                header("Location: ?controller=user&action=info&err='$error'");

            }
        }
    }
    $avatar = $fileName;
    $employeeService = new EmployeeService();
    $employee = $employeeService->editInfo($id, $fullname, $mobilePhone, $address, $position, $email, $avatar);

    // echo "<pre>";
    // print_r($employee);
    // echo "</pre>";
}
if (empty($errors) && $employee) {
    header("Location: ?controller=user&action=info&msg=Sửa thông tin thành công!");
}

?>