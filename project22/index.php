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
