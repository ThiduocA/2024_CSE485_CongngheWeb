<main class="mt-3">
    <div class="container" style='width: 80vw'>
        <div class="row">
            <div class="col-md">
                <a href="?controller=employee" class='btn btn-secondary'><i class="bi bi-box-arrow-left"></i></a>
                <h3 class="text-center text-primary">THÔNG TIN CHI TIẾT CỦA NHÂN VIÊN</h3>
                <div class="row">
                    <div class="col-md-4">
                        <div class="avatar d-flex justify-content-center align-items-center mt-4">
                            <img src="<?php echo domains.'public/assets/img/'.$departments->getAvatar(); ?>"
                                class="rounded-circle img-thumbnail" alt="Avatar" style="width: 250px; height: 250px;">
                        </div>
                    </div>
                    <div class="col-md-8 mt-4">
                        <form action="" method='post' class="needs-validation border p-4 shadow-xl" novalidate>
                            <?php  
                                $departmentID = $departments->getDepartmentID();
                                $departmentName = $employeeService->getdepartmentName($departmentID);
                            ?>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label for="name" class="form-label">Họ và Tên</label>
                                    <input type="text" class="form-control" id="name" name="name"
                                        value="<?= $departments->getFullname(); ?>" readonly>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Số điện thoại</label>
                                    <input type="text" class="form-control" id="mobile" name="mobile"
                                        value="<?= $departments->getMobilephone(); ?>" readonly>
                                </div>
                                <div class="col-md-12">
                                    <label class="form-label">Địa chỉ</label>
                                    <input type="text" class="form-control" id="address" name="address"
                                        value="<?= $departments->getAddress(); ?>" readonly>
                                </div>
                                <div class="col-md-12">
                                    <label for="email" class="form-label">Thư điện tử</label>
                                    <input type="text" class="form-control" id="email" name="email"
                                        value="<?= $departments->getEmail(); ?>" readonly>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Phòng khoa</label>
                                    <input type="text" class="form-control" id="position" name="position"
                                        value="<?= $departmentName['departmentName']; ?>" readonly>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Chức vụ</label>
                                    <input type="text" class="form-control" id="department" name="department"
                                        value="<?= $departments->getPosition(); ?>" readonly>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Mã nhân viên</label>
                                    <input type="text" class="form-control" id="id" name="id"
                                        value="<?= $departments->getId();?>" readonly>
                                </div>
                                <div class="col-md-6">
                                    <label for="username" class="form-label">Tên tài khoản</label>
                                    <input type="text" class="form-control" id="username" name="username"
                                        value="<?= $user['username'] ?>" readonly>
                                </div>

                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</main>