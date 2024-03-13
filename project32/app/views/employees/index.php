<script>
function confirmDelete() {
    if (confirm('Bạn có chắc chắn muốn xóa nhân viên này không?')) {
        alert("Nhân viên đã được xóa thành công.");
    }
    return false;
}
</script>
<?php session_start(); ?>
<main class="mt-3">
    <div class="container" style='width: 80vw'>
        <div class="row">
            <div class="col-md">
                <a href="?controller=employee" class='btn btn-secondary'><i class="bi bi-box-arrow-left"></i></a>
                <h3 class="text-center text-primary">THÔNG TIN DANH BẠ NHÂN VIÊN</h3>
                <a href="?controller=employee&action=create" class='btn btn-primary'>Thêm mới</a>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">STT</th>
                            <th scope="col">Mã nhân viên</th>
                            <th scope="col">Họ và Tên</th>
                            <th scope="col">Số điện thoại</th>
                            <th scope="col">Phòng Khoa</th>
                            <th scope="col">Chức vụ</th>
                            <th scope="col" class='text-center' colspan="3">Thao tác</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $i = 1;
                            foreach($employees as $post):?>
                        <tr>
                            <?php  $departmentID = $post->getDepartmentID();
                                    $departmentName = $employeeService->getdepartmentName($departmentID);
                                    
                                     ?>
                            <th scope="row"><?= $i; ?></th>
                            <td><?=$post->getId(); ?></td>
                            <td><?=$Fullname = $post->getFullname(); ?></td>
                            <td><?= $post->getMobilephone(); ?></td>
                            <td><?= $departmentName['departmentName']; ?></td>
                            <td><?= $post->getPosition(); ?></td>
                            <?php $employeeID = $employeeService->getEmployeeId($Fullname); ?>
                            <td>
                                <a href="?controller=employee&action=detail&id=<?= $employeeID['employeeID'] ?>"
                                    class="btn btn-primary"><i class="bi bi-eye-fill"></i></a>
                            </td>
                            <td>
                                <a href="?controller=employee&action=edit&id=<?= $employeeID['employeeID'] ?>"
                                    class="btn btn-warning"><i class="bi bi-pencil-fill"></i></a>
                            </td>
                            <td>
                                <a href="?controller=employee&action=delete&id=<?= $employeeID['employeeID'] ?>"
                                    class="btn btn-danger" onclick="confirmDelete()"><i
                                        class="bi bi-trash3-fill"></i></a>
                            </td>
                        </tr>
                        <?php $i++; endforeach;
                            $itemperpage = 10;
                            $totalPages = ceil(count($employees)/$itemperpage);
                            $currentPage = isset($_GET['page']) ? $_GET['page']:10;
                            $currentPageitems = array_slice($employees,($currentPage-1)*$itemperpage,$itemperpage);
                         ?>
                    </tbody>
                </table>
                <div aria-label="Page navigation example">
                    <ul class="pagination justify-content-center">
                        <?php if($currentPage > 1): ?>
                        <li class="page-item">
                            <a class="page-link" href="?controller=employee&page=<?= $currentPage - 1; ?>"
                                aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                            </a>
                        </li>
                        <?php endif; ?>
                        <?php for($i = 1; $i <= $totalPages; $i++): ?>
                        <li class="page-item <?= ($i == $currentPage) ? 'active' : ''; ?>">
                            <a class="page-link" href="?controller=employee&page=<?= $i; ?>"><?= $i; ?></a>
                        </li>
                        <?php endfor; ?>
                        <?php if($currentPage < $totalPages): ?>
                        <li class="page-item">
                            <a class="page-link" href="?controller=employee&page=<?= $currentPage + 1; ?>"
                                aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                        </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</main>