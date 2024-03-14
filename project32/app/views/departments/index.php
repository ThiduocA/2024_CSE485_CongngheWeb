

<main class="mt-3">
    <div class="container" style='width: 80vw'>
        <div class="row">
            <div class="col-md">
                <a href="?controller=user" class='btn btn-secondary'><i class="bi bi-box-arrow-left"></i></a>
                <h3 class="text-center text-primary">THÔNG TIN DANH BẠ NHÂN VIÊN</h3>
                <a href="?controller=employee&action=create" class='btn btn-primary'>Thêm mới</a>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">STT</th>
                            <th scope="col">Tên Phòng Ban</th>
                            <th scope="col">Địa Chỉ Phòng Ban</th>
                            <th scope="col">email</th>
                            <th scope="col">Số Điện Thoại</th>
                            <th scope="col">logo</th>
                            <th scope="col">website</th>
                            <th scope="col">parentdepartment</th>
                            <th scope="col" class='text-center' colspan="3">Thao tác</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            foreach($getdepartments as $department):?>
                        <tr>
                        
                 
                            <td><?=$department->getDepartmentID(); ?></td>
                            <td><?=$Fullname = $department->getDepartmentName(); ?></td>
                            <td><?= $department->getAddress(); ?></td>
                            <td><?= $department->getEmail(); ?></td>
                            <td><?=$department->getPhone(); ?></td>
                            <td><?=$Fullname = $department->getLogo(); ?></td>
                            <td><?= $department->getWebsite(); ?></td>
                            <td><?= $department->getParentDepartment(); ?></td>
                            <td>
                                <a href="<?= domains.'index.php?controller=department&action=edit&id='.$department->getDepartmentID(); ?>"
                                    class="btn btn-primary"><i class="bi bi-eye-fill"></i></a>
                            </td>
                            <td>
                                <a href="?controller=employee&action=edit&id=<?= $department->getDepartmentID(); ?>"
                                    class="btn btn-warning"><i class="bi bi-pencil-fill"></i></a>
                            </td>
                            <td>
                                <a href="<?= domains.'index.php?controller=department&action=delete&id='. $department->getDepartmentID();?>" class="btn btn-danger"><i class="bi bi-trash3-fill"></i></a>
                            </td>
                        </tr>
                        <?php endforeach;
                         ?>
                    </tbody>
                </table>
                
            </div>
        </div>
    </div>
</main>