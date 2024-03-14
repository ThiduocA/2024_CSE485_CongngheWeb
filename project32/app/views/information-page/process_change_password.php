<?php

require_once(ROOT . '/config/database.php');
require_once(ROOT . '/services/UserService.php');

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $id = $_GET['id'];
    $prePassword = $_POST['pre-password'];
    $afterPassword = $_POST['after-password'];
    $confirmPassword = $_POST['confirm-password'];
    $id1 = $id;
    if (password_verify($prePassword, $afterPassword)) {
        $err = "Mật khẩu cũ phải khác mật khẩu mới";
        header("Location: ?controller=user&action=info&err='$err'");
    }
    // else {
    //     $msg = "Sửa mật khẩu thành công";
    //     header("Location: ?controller=user&action=info&msg='$msg'");
    // }
    if ($afterPassword != $confirmPassword) {
        $err = "Mật khẩu mới khác mật khẩu xác thực";
        header("Location: ?controller=user&action=info&err='$err'");

    }
    $newPassword = password_hash($afterPassword, PASSWORD_DEFAULT);
    $userService = new UserService();
    $user = $userService->editPassword($id, $newPassword);
    if ($user) {
        $msg = "Đổi mật khẩu thành công";
        header("Location: ?controller=user&action=info&err='$msg'");

    }
}