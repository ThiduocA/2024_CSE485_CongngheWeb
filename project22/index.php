
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