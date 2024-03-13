


<!DOCTYPE html>
<html lang="en">
<head>

<?php include (ROOT."/views/layout/head.php");?>

  
</head>
<body>
    <?php include (ROOT."/views/layout/banner.php");?>
    <?php include (ROOT."/views/layout/nav-logged.php");?>
    <section class="section-department-table">
        <h2>DANH BA</h2>
        <a href="<?= domains.'index.php?controller=department&action=add'?>" class="add-new-department">THÊM MỚI</a>
        <div class="department-table">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="">departmentID</th>
                        <th scope="">departmentName</th>
                        <th scope="">address</th>
                        <th scope="">email</th>
                        <th scope="">phone</th>
                        <th scope="">logo</th>
                        <th scope="">website</th>
                        <th scope="">parentDepartmentID</th>
                        <th>Hành động</th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach ($getdepartments as $department): ?>
                    <tr>
                        <td><?= $department->getDepartmentID();?></td>
                        <td><?= $department->getDepartmentName();?></td>
                        <td><?= $department->getAddress();?></td>
                        <td><?= $department->getEmail();?></td>
                        <td><?= $department->getPhone();?></td>
                        <td><?= $department->getLogo();?></td>
                        <td><?= $department->getWebsite();?></td>
                        <td><?= $department->getParentDepartment();?></td>
                        <td>
                            <a href="<?= domains.'index.php?controller=department&action=edit&id='. $department->getDepartmentID();?>">Edit</a> |
                            <a href="<?= domains.'index.php?controller=department&action=delete&id='. $department->getDepartmentID();?>">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>

        </div>
    </section>


</body>
</html>