<!DOCTYPE html>
<html lang="en">
<?php include(ROOT . "/views/layout/head.php"); ?>
<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: ?controller=guest&action=login");
}
$employeeService = new EmployeeService();
$employee = $employeeService->getEmployeeById($_SESSION['user_id']);

$userService = new UserService();
$user = $userService->getUserById1($_SESSION['user_id']);


?>

<body>
    <?php include(ROOT . "/views/layout/banner.php"); ?>
    <div class="container mt-5 p-5">
        <div class="row">
            <div class="col-md-1">
                <a href="?controller=user" class='btn btn-secondary'><i class="bi bi-box-arrow-left"></i></a>

            </div>
            <div class="mb-3 row">
                <h1 style="text-align: center">THÔNG TIN CÁ NHÂN</h1>
            </div>
            <?php if (isset($_GET['msg'])): ?>
                <div class="alert alert-success" role="alert">
                    <?= $_GET['msg'] ?>
                </div>
            <?php endif ?>
            <?php if (isset($_GET['err'])): ?>
                <div class="alert alert-danger" role="alert">
                    <?= $_GET['err'] ?>
                </div>
            <?php endif ?>
            <div class="col-sm-3">
                <div class="title">Ảnh đại diện</div>
                <div class="img" style="width: 200px; height: 200px">
                    <img src="<?= domains . 'public/assets/img' . $employee->getAvatar() ?>" alt="avatar"
                        style="border-radius:50%; height:100%">
                </div>
            </div>
            <div class="col-sm-9">
                <div class="mb-3 row">
                    <label for="fullname" class="col-sm-2 col-form-label">Họ và tên:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="fullname" name="fullname"
                            value="<?= $employee->getFullname() ?>">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="mobilePhone" class="col-sm-2 col-form-label">Số điện thoại:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="mobilePhone" name="mobilePhone"
                            value="<?= $employee->getMobilephone() ?>">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="address" class="col-sm-2 col-form-label">Địa chỉ:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="address" name="address"
                            value="<?= $employee->getAddress() ?>">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="position" class="col-sm-2 col-form-label">Chức vụ:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="position" name="position"
                            value="<?= $employee->getPosition() ?>">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="email" class="col-sm-2 col-form-label">Email:</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="email" name="email"
                            value="<?= $employee->getEmail() ?>">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="username" class="col-sm-2 col-form-label">Tên người dùng:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="username" name="username"
                            value="<?= $user[0]->getUsername() ?>">
                    </div>
                </div>
            </div>
            <!-- Them department id -->
            <div class="mb-3 row space">
                <div class="left-button" style="width: auto">
                    <button type="button" class="btn btn-info">
                        <!-- Them employeeID -->
                        <a href="?controller=user&action=edit_info&id=<?= $_SESSION['user_id'] ?>"
                            class="text-decoration-none link-dark">
                            Chỉnh sửa thông tin
                        </a>
                    </button>
                </div>
                <div class="right-button" style="width: auto">
                    <button type="button" class="btn btn-info">
                        <!-- Them employeeID -->
                        <a href="?controller=user&action=change_password&id=<?= $_SESSION['user_id'] ?>"
                            class="text-decoration-none link-dark">
                            Thay đổi mật khẩu
                        </a>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <?php include(ROOT . "/views/layout/footer.php"); ?>

</body>

</html>