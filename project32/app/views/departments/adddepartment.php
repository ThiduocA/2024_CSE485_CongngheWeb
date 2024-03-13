<!DOCTYPE html>
<html lang="en">
<?php include (ROOT."/views/layout/head.php");?>
<body>
    <?php include (ROOT."/views/layout/banner.php");?>
    <?php include (ROOT."/views/layout/nav.php");?>
    <div class="form-edit-department">
        <form method="POST" action="">
            <div class="mb-3">
                
                <input type="hidden" class="form-control" name='departmentID' value="" >
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">departmentName</label>
                <input type="text" class="form-control" name='departmentName' value=''>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">address</label>
                <input type="text" class="form-control" name='address' value="">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">email</label>
                <input type="text" class="form-control" name='email' value="">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">phone</label>
                <input type="text" class="form-control" name='phone' value="">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">logo</label>
                <input type="text" class="form-control" name='logo' value="">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">website</label>
                <input type="text" class="form-control" name='website' value="">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">parentDepartment</label>
                <input type="text" class="form-control" name='parentDepartment' value="">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>