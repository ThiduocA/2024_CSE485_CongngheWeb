<?php 
session_start();
if(!isset($_SESSION['username'])){
    header('location:?controller=guest&action=login');
}
?>


<!DOCTYPE html>
<html lang="en">
<?php include (ROOT."/views/layout/head.php");?>

<body>
    <?php include (ROOT."/views/layout/banner.php");?>
    <?php include (ROOT."/views/layout/nav-logged.php");?>
    <!DOCTYPE html>
    <html lang="vi">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tìm Kiếm Nâng Cao</title>
        <style>
        /* Styles for the search interface */
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .search-form {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .search-input {
            flex-grow: 1;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .search-button {
            background-color: #007bff;
            color: #ffffff;
            border: none;
            border-radius: 4px;
            padding: 10px 20px;
            cursor: pointer;
        }

        .search-results {
            margin-top: 20px;
        }

        .profile-card {
            display: flex;
            align-items: center;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            margin-bottom: 10px;
        }

        .avatar {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            margin-right: 10px;
        }

        .profile-info {
            flex-grow: 1;
        }

        .profile-name {
            font-weight: bold;
        }

        .profile-title {
            font-size: 14px;
            color: #777;
        }

        .profile-rating {
            font-size: 14px;
            color: #f39c12;
        }
        </style>
    </head>

    <body>
        <div class="container mt-5">
            <h1>Tìm Kiếm Nâng Cao</h1>
            <form class="d-flex mb-2" role="search" method="post">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
            <form class="search-form" method="post">
                <select class="form-select" name='department_Name' aria-label="Default select example">
                    <?php foreach($getdepartments as $department):?>
                    <tr>
                        <option value="<?=$department->getDepartmentID()?>"><?=$department->getDepartmentName()?>
                        </option>
                    </tr>
                    <?php endforeach;?>
                </select>
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
            <div class="search-results">
                <?php foreach($employees as $employee):?>
                <div class="profile-card">
                    <img src="<?= domains . 'public/assets/imgichikawa.png'?>" alt="Nicole Pearson" class="avatar">
                    <div class="profile-info">
                        <div class="profile-name"><?=$employee->getFullname();?></div>
                        <div class="profile-title"><?=$employee->getEmail();?></div>
                        <div class="profile-title"><?=$employee->getMobilephone();?></div>
                        <div class="profile-title"><?=$employee->getPosition();?></div>
                    </div>
                </div>
                <?php endforeach;?>
                <!-- Add more profile cards here -->
            </div>
        </div>
    </body>

    </html>

    <?php include (ROOT."/views/layout/footer.php");?>
</body>

</html>