<<<<<<< HEAD

<?php 
    include "process/upload_profile.php";


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="acsset/main.css">
    <title>Document</title>
</head>
<body>
    <section>
       <div class="container">
            <div class="row">
                <div class="col-md-4 col-12">
                    <form action="process/upload_profile.php" method="post" enctype="multipart/form-data">
                        <div class="personal-image">
                            <label class="label">
                                <input id="avatarInput" type="file" name="avatar" accept="image/*"/>
                                <figure class="personal-figure">
                                    <img id="avatarImg" src="<?= $defaultAvatar?>" class="personal-avatar" alt="avatar" value="<?php $defaultAvatar?>">
                                </figure>
                                <span class="change-avatar-btn" >Change avatar</span>
                            </label>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Full name</label>
                            <input type="text" class="form-control" id="" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Email</label>
                            <input type="email" class="form-control" id="">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Phone number</label>
                            <input type="text" class="form-control" id="">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Company name</label>
                            <input type="text" class="form-control" id="">
                        </div>
                      
                        <button type="submit" class="btn btn-primary">confirm</button>
                    </form>
                </div>
            </div>
       </div>
    </section>
    <script src="acsset/main.js"></script>
</body>
</html>
=======
<?php
    session_start();
    include 'main.php';
    if(isset($_SESSION['user'])) {
        $user = $_SESSION['user'];
    } else {
        $user = [
            "id" => 1,
            "name" => "John Doe",
            "email" => "johndoe@example.com",
            "phone" => "343-459-4350",
            "company" => "CanAmera Realty",
            "avatar" => "images/image1.jpg"
        ];
        $_SESSION['user'] = $user; 
    }

?>

<div class="container">
    <form action="" method="post" enctype="multipart/form-data">
        <h1>Account Settings</h1>
        <div class="form_group">
            <div class="avatar">
                <img src="<?php echo $user['avatar'] ?>" alt="Avatar" style="width: 100px; height: 100px; border-radius: 50%;">
            </div>
            <div >
                <input type="file" name="avatar"  accept="image/*">
            </div>
        </div>
        <div class="form_group">
            <div class="title">Full Name</div>
            <div class="input"><input type="text"  name="name" value="<?php echo $user['name']; ?>" required style="width:80%"></div>
        </div>
        <div class="form_group">
            <div class="title">Email</div>
            <div class="input"><input type="email"  name="email" value="<?php echo $user['email']; ?>" disabled style="width:80%"></div>
        </div>
        <div class="form_group">
            <div class="title">Phone Number</div>
            <div class="input"><input type="text"  name="phone" value="<?php echo $user['phone']; ?>" required style="width:80%"></div>
        </div>
        <div class="form_group">
            <div class="title">Company Name</div>
            <div class="input"><input type="text"  name="company" value="<?php echo $user['company']; ?>" required style="width:80%"></div>
        </div>
        <div class="form_group">
            <button type="submit" name="submit">Update Profile</button>
        </div>
    </form>
</div>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {
    $errors = [];
    $user = $_SESSION['user'];
    if (isset($_POST['name'])) {
        $user['name'] = filter_var($_POST['name'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    }
    if (!empty($_FILES['avatar']['name'])) {
        $fileInfo = pathinfo($_FILES['avatar']['name']);
        $allowedExtensions = ['jpg', 'jpeg', 'png'];
        $maxSize = 1048576; 
        $targetDir = "images/";
        if (!in_array(strtolower($fileInfo['extension']), $allowedExtensions)) {
            $errors[] = "Only JPG, JPEG, and PNG files are allowed.";
        } elseif ($_FILES['avatar']['size'] > $maxSize) {
            $errors[] = "File size must be less than 1MB.";
        } else {
            $targetFile = $targetDir . $fileInfo['basename'];
            if (move_uploaded_file($_FILES['avatar']['tmp_name'], $targetFile)) {
                $user['avatar'] = $targetFile;
            } else {
                $errors[] = "Failed to upload file.";
            }
        }
    }
    if (empty($errors)) {
        $_SESSION['user'] = $user;
        echo "Profile updated successfully!";
        echo "<script> window.history.back(); </script>";
       
    } else {
        echo "Errors:";
        foreach ($errors as $error) {
            echo "<br> - $error";
        }
    }
}
?>
>>>>>>> 113d5a9dffb26ff0de70f83d61655e1b36c4e675
