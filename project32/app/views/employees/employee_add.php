<script>
document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('choose-image-btn').addEventListener('click', function() {
        document.getElementById('file-input').click();
    });

    document.getElementById('file-input').addEventListener('change', function() {
        var file = this.files[0];
        if (file) {
            var reader = new FileReader();
            reader.onload = function(e) {
                document.getElementById('avatar-img').setAttribute('src', e.target.result);
            };
            reader.readAsDataURL(file);
        }
    });

    document.getElementById('employee-form').addEventListener('submit', function(event) {
        var inputs = document.querySelectorAll('input[type="text"]');
        var password1 = document.getElementById('password1').value;
        var password2 = document.getElementById('password2').value;
        var emptyInputs = [];

        inputs.forEach(function(input) {
            if (input.value.trim() === '') {
                emptyInputs.push(input.id);
            }
        });

        if (password1 !== password2) {
            // Nếu hai mật khẩu không khớp, hiển thị thông báo lỗi
            var errorMessage = document.createElement('div');
            errorMessage.classList.add('alert', 'alert-danger');
            errorMessage.textContent = 'Mật khẩu không khớp!';
            document.getElementById('error-container').innerHTML = '';
            document.getElementById('error-container').appendChild(errorMessage);
            event.preventDefault(); // Chặn form được gửi đi
        } else if (emptyInputs.length > 1) {
            // Nếu có ô input nào đó rỗng, hiển thị thông báo lỗi
            var errorMessage = document.createElement('div');
            errorMessage.classList.add('alert', 'alert-danger');
            errorMessage.textContent = 'Vui lòng điền đầy đủ thông tin vào các ô nhập!';
            document.getElementById('error-container').innerHTML = '';
            document.getElementById('error-container').appendChild(errorMessage);
            event.preventDefault(); // Chặn form được gửi đi
        } else {
            window.location.href = '?controller=employee';
        }
    });
});
</script>

<main class="mt-3">
    <div class="container" style='width: 80vw'>
        <div class="row">
            <div class="col-md">
                <a href="?controller=employee" class='btn btn-secondary'><i class="bi bi-box-arrow-left"></i></a>
                <h3 class="text-center text-primary">THÊM MỚI DANH BẠ NHÂN VIÊN</h3>
                <div class="row">
                    <div class="col-md-4">
                        <div class="avatar d-flex justify-content-center align-items-center mt-4">
                            <img src="<?php echo domains.'public/assets/img/avatar1.png' ?>"
                                class="rounded-circle img-thumbnail" alt="Avatar" style="width: 250px; height: 250px;">
                        </div>
                        <div class='text-center mt-3'>
                            <input type="file" id="file-input" style="display: none;">
                            <button type="button" class="btn btn-primary mt-2" id="choose-image-btn">Chọn
                                Avatar</button>
                        </div>
                    </div>
                    <div class="col-md-8 mt-4">
                        <form id="employee-form" action="?controller=employee&action=index" method="post"
                            enctype="multipart/form-data" class="needs-validation border p-4 shadow-xl" novalidate>

                            <?php  
                                $departmentName = $employeeService->getdepartmentNames();
                            ?>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label for="name" class="form-label">Họ và Tên</label>
                                    <input type="text" class="form-control" id="name" name="name">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Số điện thoại</label>
                                    <input type="text" class="form-control" id="mobile" name="mobile">
                                </div>
                                <div class="col-md-12">
                                    <label class="form-label">Địa chỉ</label>
                                    <input type="text" class="form-control" id="address" name="address">
                                </div>
                                <div class="col-md-12">
                                    <label for="email" class="form-label">Thư điện tử</label>
                                    <input type="text" class="form-control" id="email" name="email">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Phòng khoa</label>
                                    <select class="form-select" name='department_Name'
                                        aria-label="Default select example">
                                        <option selected disabled>Hãy chọn phòng khoa</option>
                                        <?php foreach ($departmentName as $index => $item) : ?>
                                        <?php if ($index === 0) : ?>
                                        <option value="<?php echo $item['departmentName']; ?>" selected>
                                            <?php echo $item['departmentName']; ?></option>
                                        <?php else : ?>
                                        <option value="<?php echo $item['departmentName']; ?>">
                                            <?php echo $item['departmentName']; ?></option>
                                        <?php endif; ?>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Chức vụ</label>
                                    <input type="text" class="form-control" id="department" name="department">
                                </div>
                                <div class="col-md-12">
                                    <label for="username" class="form-label">Tên đăng  nhập</label>
                                    <input type="text" class="form-control" id="username" name="username">
                                </div>
                                <div class="col-md-6">
                                    <label for="password1" class="form-label">Mật khẩu</label>
                                    <input type="password" class="form-control" id="password1" name="password1">
                                </div>
                                <div class="col-md-6">
                                    <label for="password2" class="form-label">Nhập lại mật khẩu</label>
                                    <input type="password" class="form-control" id="password2" name="password2">
                                </div>
                            </div>
                            <div id="error-container" class='mt-2'></div>
                            <div class='text-center mt-3'>
                                <button type="submit" class="btn btn-primary mt-2" id="add-btn">Thêm</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>