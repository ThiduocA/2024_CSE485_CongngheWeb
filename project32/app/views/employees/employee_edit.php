<script>
document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('choose-image-btn').addEventListener('click', function() {
        document.getElementById('file-input').click();
    });

    document.getElementById('employee-form').addEventListener('submit', function(event) {
        var inputs = document.querySelectorAll('input[type="text"]');
        var emptyInputs = [];

        inputs.forEach(function(input) {
            if (input.value.trim() === '') {
                emptyInputs.push(input.id);
            }
        });
        if (emptyInputs.length > 100) {
            // Nếu có ô input nào đó rỗng, hiển thị thông báo lỗi
            var errorMessage = document.createElement('div');
            errorMessage.classList.add('alert', 'alert-danger');
            errorMessage.textContent = 'Vui lòng điền đầy đủ thông tin vào các ô nhập!';
            document.getElementById('error-container').innerHTML = '';
            document.getElementById('error-container').appendChild(errorMessage);
            event.preventDefault();
        } else {
            // Nếu không có ô input nào rỗng, tiến hành submit form
            //window.location.href = '?controller=employee';
            event.preventDefault();
        }
    });
});
</script>

<main class="mt-3">
    <div class="container" style='width: 80vw'>
        <div class="row">
            <div class="col-md">
                <a href="?controller=employee" class='btn btn-secondary'><i class="bi bi-box-arrow-left"></i></a>
                <h3 class="text-center text-primary">SỬA DANH BẠ NHÂN VIÊN</h3>
                <div class="row">
                    <div class="col-md-4">
                        <div class="avatar d-flex justify-content-center align-items-center mt-4">
                            <img src="<?php echo domains.'public/assets/img/'.$departments->getAvatar(); ?>"
                                class="rounded-circle img-thumbnail" alt="Avatar" style="width: 250px; height: 250px;">
                        </div>
                        <div class='text-center mt-3'>
                            <input type="file" id="file-input" style="display: none;">
                        </div>
                    </div>
                    <div class="col-md-8 mt-4">
                        <form id="employee-form" action="?controller=employee&id=<?php echo $id?>" method="post"
                            enctype="multipart/form-data" class="needs-validation border p-4 shadow-xl" novalidate>
                            
                            <!-- <?php  
                                $departmentID = $departments->getDepartmentID();
                                $departmentName = $employeeService->getdepartmentNames();
                            ?> -->
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label for="name" class="form-label">Họ và Tên</label>
                                    <input type="text" class="form-control" id="name" name="name" value="<?= $departments->getFullname(); ?>">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Số điện thoại</label>
                                    <input type="text" class="form-control" id="mobile" name="mobile" value="<?= $departments->getMobilephone(); ?>">
                                </div>
                                <div class="col-md-12">
                                    <label class="form-label">Địa chỉ</label>
                                    <input type="text" class="form-control" id="address" name="address" value="<?= $departments->getAddress(); ?>">
                                </div>
                                <div class="col-md-12">
                                    <label for="email" class="form-label">Thư điện tử</label>
                                    <input type="text" class="form-control" id="email" name="email" value="<?= $departments->getEmail(); ?>">
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
                                    <input type="text" class="form-control" id="department" name="department" value="<?= $departments->getPosition(); ?>">
                                </div>
                                <div class="col-md-12">
                                    <label for="username" class="form-label">Tên tài khoản</label>
                                    <input type="text" class="form-control" id="username" name="username" value="<?= $user['username'] ?>">
                                </div>
                            </div>
                            <div id="error-container" class='mt-2'></div>
                            <div class='text-center mt-3'>
                                <button type="submit" class="btn btn-warning mt-2" id="update-btn">Cập nhật thông
                                    tin</button> <!-- Sửa id của button thành 'update-btn' -->
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
