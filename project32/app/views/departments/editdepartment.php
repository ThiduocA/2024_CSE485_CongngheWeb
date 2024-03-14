<

<main class="mt-3">
    <div class="container" style='width: 80vw'>
        <div class="row">
            <div class="col-md">
                <a href="?controller=employee" class='btn btn-secondary'><i class="bi bi-box-arrow-left"></i></a>
                <h3 class="text-center text-primary">SỬA DANH BẠ NHÂN VIÊN</h3>
                <div class="row">
                    <div class="col-md-4">
                        <div class="avatar d-flex justify-content-center align-items-center mt-4">
                            <img src=""
                                class="rounded-circle img-thumbnail" alt="Avatar" style="width: 250px; height: 250px;">
                        </div>
                        <div class='text-center mt-3'>
                            <input type="file" id="file-input" style="display: none;">
                        </div>
                    </div>
                    <div class="col-md-8 mt-4">
                        <form id="employee-form" action="?controller=employee&id=" method="post"
                            enctype="multipart/form-data" class="needs-validation border p-4 shadow-xl" novalidate>
                 
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label for="name" class="form-label">Họ và Tên</label>
                                    <input type="text" class="form-control" id="name" name="name" value="">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Số điện thoại</label>
                                    <input type="text" class="form-control" id="mobile" name="mobile" value="">
                                </div>
                                <div class="col-md-12">
                                    <label class="form-label">Địa chỉ</label>
                                    <input type="text" class="form-control" id="address" name="address" value="">
                                </div>
                                <div class="col-md-12">
                                    <label for="email" class="form-label">Thư điện tử</label>
                                    <input type="text" class="form-control" id="email" name="email" value="">
                                </div>
                             
                                <div class="col-md-6">
                                    <label class="form-label">Chức vụ</label>
                                    <input type="text" class="form-control" id="department" name="department" value="">
                                </div>
                                <div class="col-md-12">
                                    <label for="username" class="form-label">Tên tài khoản</label>
                                    <input type="text" class="form-control" id="username" name="username" value="">
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
