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
    $employeeService = new EmployeeService();
    $employee = $employeeService->getEmployeeById($id);
}
?>

<body>
    <?php include(ROOT . "/views/layout/banner.php"); ?>
    <div class="container mt-5 p-5">
        <div class="mb-3 row">
            <h1 style="text-align: center">CHỈNH SỬA THÔNG TIN CÁ NHÂN</h1>
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
        <form action="?controller=user&action=process_edit_info&id=<?= $id ?>" method="post"
            enctype="multipart/form-data">
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
                <label for="email" class="col-sm-2 col-form-label">Ảnh đại diện:</label>
                <div class="col-sm-10">
                    <input type="file" class="form-control" id="avatar" name="avatar" value="" accept="image/*">
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