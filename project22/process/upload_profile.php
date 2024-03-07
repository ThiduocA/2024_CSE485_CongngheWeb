<?php 
    session_start();
    $targetDir = "images/";
    if (!is_dir($targetDir)) {
        mkdir($targetDir, 0755, true); 
    }

    $defaultAvatar = isset($user['avatar']) ? $user['avatar'] : "https://avatars1.githubusercontent.com/u/11435231?s=460&v=4";
    $_SESSION['defaultAvatar'] = $defaultAvatar;
    setcookie('defaultAvatar', $defaultAvatar, time()+(86400*30), "/");

    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $errors = [];
        $user['name'] = isset($_POST['name']) ? htmlspecialchars(trim($_POST['name'])) : '';
        $allowedExtensions = ['png', 'jpeg', 'jpg'];
        $maxSize = 104875; // 1MB 

        if(!empty($_FILES['avatar']['tmp_name'])){
            $fileInfo = pathinfo($_FILES['avatar']['name']);

            if(!in_array($fileInfo['extension'], $allowedExtensions)){
                $errors[] = "Only PNG, JPEG, JPG files are allowed.";
            } else if($_FILES['avatar']['size'] > $maxSize){
                $errors[] = "Maximum file size is 1MB.";
            } else {
                $filename = uniqid() . "." . $fileInfo['extension'];
                $targetFile = $targetDir . $filename;

                if(move_uploaded_file($_FILES['avatar']['tmp_name'], $targetFile)){
                    $user['avatar'] = $targetFile;
                } else{
                    $errors[] = "Upload failed.";
                }
            }
        }

        if(empty($errors)){
            echo "Update successfully";
        } else {
            echo "Errors:";
            foreach ($errors as $error) {
                echo "<br> - $error";
            }
        }
    }
?>
