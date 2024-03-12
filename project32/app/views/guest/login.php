<?php 
if(isset($_POST['username'])){
    $username = $_POST['username'];
    $password = $_POST['password'];   
    if($userService->login($username, $password)){
        header('Location:?controller=user&action=index');
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!-- <meta http-equiv="refresh" content="1"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include (ROOT."/views/layout/head.php");?>
    <title>Login</title>
</head>
<section class="vh-100">
    <div class="container py-5 h-100">
        <div class="row d-flex align-items-center justify-content-center h-100">
            <div class="col-md-8 col-lg-7 col-xl-6">
                <img src="<?= domains.'public/assets/img/news-img.png'?>" alt="">
            </div>
            <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
                <form method="post" action="">
                    <!-- Username input -->
                    <div class="form-outline mb-4">
                        <label class="form-label" for="form1Example13">Username</label>
                        <input type="text" id="form1Example13" class="form-control form-control-lg" name="username" />
                    </div>
                    <!-- Password input -->
                    <div class="form-outline mb-4">
                        <label class="form-label" for="form1Example23">Password</label>
                        <input type="password" id="form1Example23" class="form-control form-control-lg"
                            name="password" />
                    </div>
                    <!-- Submit button -->
                    <button type="submit" class="btn btn-primary btn-lg btn-block">Đăng nhập</button>
                </form>
            </div>
        </div>
    </div>
</section>

<body>

</body>

</html>