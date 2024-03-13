<main class="mt-3">
    <div class="container" style='width: 80vw'>
        <div class="row">
            <div class="col-md">
                <a href="?controller=employee" class='btn btn-secondary'><i class="bi bi-box-arrow-left"></i></a>
                <h3 class="text-center text-primary">THÊM MỚI DANH BẠ NHÂN VIÊN</h3>
                <form action="" method='post'>
                    <div class="mb-3">
                        <label for="username" class='form-label'>Họ và Tên</label>
                        <input type="text" class='form-control' id='username' name='username'>
                    </div>
                    <div class="mb-3">
                        <label for="mobile" class='form-label'>Số điện thoại</label>
                        <input type="text" class='form-control' id='mobile' name='mobile'>
                    </div>
                    <div class="mb-3">
                        <label for="address" class='form-label'>Địa chỉ</label>
                        <input type="text" class='form-control' id='address' name='address'>
                    </div>
                    <div class="mb-3">
                        <label for="password" class='form-label'>Phòng khoa</label>
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Hãy chọn phòng khoa</option>
                            <?php foreach ($departments as $department) : ?>
                            <option value=""><?php echo $department; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="email" class='form-label'>Email</label>
                        <input type="email" class='form-control' id='username' name='username'>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>