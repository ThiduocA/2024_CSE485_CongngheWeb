<!DOCTYPE html>
<html lang="en">
<?php include(ROOT . "/views/layout/head.php"); ?>
<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: ?controller=guest&action=login");
}
if ($_GET['id']) {
    $id = $_GET['id'];
    // $employeeService = new EmployeeService();
    // $employee = $employeeService->getEmployeeById($id);
    $userService = new UserService();
    $user = $userService->getUserById1($id);
}
?>

<body>

    <?php include(ROOT . "/views/layout/banner.php"); ?>
    <div class="container mt-5 p-5">
        <div class="mb-3 row">
            <h1 style="text-align: center">THAY ĐỔI MẬT KHẨU</h1>
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
        <form action="?controller=user&action=process_change_password&id=<?= $id ?>" method="post">
            <div class="mb-3 row">
                <label for="pre-password" class="col-sm-2 col-form-label">Mật khẩu ban đầu:</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" id="pre-password" name="pre-password"
                        value="<?= $user[0]->getPassword() ?>">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="after-password" class="col-sm-2 col-form-label">Mật khẩu lúc sau:</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" id="after-password" name="after-password" value="">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="confirm-password" class="col-sm-2 col-form-label">Xác nhận lại mật khẩu:</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" id="confirm-password" name="confirm-password" value="">
                </div>
            </div>
            <div class="mb-3 row">
                <div class="left-button" style="width: auto">
                    <button type="submit" class="btn btn-info">
                        <!-- Them employeeID -->
                        Xác nhận thay đổi
                    </button>
                </div>
                <div class="right-button" style="width: auto">
                    <button type="button" class="btn btn-danger">
                        <!-- Them employeeID -->
                        <a href="?controller=user&action=info" class="text-decoration-none link-dark">
                            Thoát
                        </a>
                    </button>
                </div>
            </div>
        </form>
    </div>
    <?php include(ROOT . "/views/layout/footer.php"); ?>

</body>

</html>