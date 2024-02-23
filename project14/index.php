<?php
$countries = array(
    "Afghanistan",
    "Albania",
    "Algeria",
    "Andorra",
    "Angola",
    "Anguilla",
    "Antigua & Barbuda",
    "Argentina",
    "Armenia",
    "Aruba",
    "Australia",
    "Austria",
    "Azerbaijan",
    "Bahamas",
    "Bahrain",
    "Bangladesh",
    "Barbados",
    "Belarus",
    "Belgium",
    "Belize",
    "Benin",
    "Bermuda",
    "Bhutan",
    "Bolivia",
    "Bosnia & Herzegovina",
    "Botswana",
    "Brazil",
    "British Virgin Islands",
    "Brunei",
    "Bulgaria",
    "Burkina Faso",
    "Burundi",
    "Vietnam"
);
$names = array(
    "Dũng",
    "Dương",
    "Hoàng",
    "Hưng"
);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="https://cdn.ckeditor.com/ckeditor5/41.1.0/classic/ckeditor.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
</head>

<body>
    <form action="" method="post" enctype="multipart/form-data">
        <div class="container">
            <div class="content">
                <div class="title">Basic Info</div>
                <div class="form-group">
                    <div class="label">
                        Employee ID
                    </div>
                    <div class="input">
                        9
                    </div>
                </div>
                <div class="form-group">
                    <div class="label">
                        Last Name
                    </div>
                    <div class="input">
                        Dodsworth
                    </div>
                </div>
                <div class="form-group">
                    <div class="label">
                        First Name
                    </div>
                    <div class="input">
                        <input type="text" value="Anne">
                    </div>
                </div>
                <div class="form-group">
                    <div class="label">
                        Gender
                    </div>
                    <div class="input">
                        <input type="radio" name="gender" id=""> Male <br>
                        <input type="radio" name="gender" id=""> Female <br>
                        <input type="radio" name="gender" id=""> XXX <br>
                        <input type="radio" name="gender" id=""> YYY <br>
                    </div>
                </div>
                <div class="form-group">
                    <div class="label">
                        Title
                    </div>
                    <div class="input">
                        <input type="text" name="title" id="" value="Sales Representative">
                    </div>
                </div>
                <div class="form-group">
                    <div class="label">
                        Suffix
                    </div>
                    <div class="input">
                        <input type="text" name="suffix" id="" value="Ms.">
                    </div>
                </div>
                <div class="form-group">
                    <div class="label">
                        BirthDate
                    </div>
                    <div class="input">
                        <input type="date" name="birthdate" id="" value="Sales Representative">
                    </div>
                </div>
                <div class="form-group">
                    <div class="label">
                        HireDate
                    </div>
                    <div class="input">
                        <input type="date" name="hiredate" id="" value="Sales Representative">
                    </div>
                </div>
                <div class="form-group">
                    <div class="label">
                        SSN # (if applicable)
                    </div>
                    <div class="input">
                        <input type="text" name="ssn" id="">
                    </div>
                </div>
                <div class="form-group">
                    <div class="label">
                        Reports To
                    </div>
                    <div class="input">
                        <select name="name" id="">
                            <?php foreach ($names as $name): ?>
                                <option value="<?= $name ?>">
                                    <?= $name ?>
                                </option>
                            <?php endforeach ?>
                        </select>
                    </div>
                    <br>
                </div>
            </div>
            <div class="content">
                <div class="title">Contact Info</div>
                <div class="form-group">
                    <div class="label">
                        Email
                    </div>
                    <div class="input">
                        <input type="email" name="email" id="" value="name@example.com">
                    </div>
                </div>
                <div class="form-group">
                    <div class="label">
                        Address
                    </div>
                    <div class="input">
                        <input type="text" name="address" id="" value="7 Houndstooth Rd.">
                    </div>
                </div>
                <div class="form-group">
                    <div class="label">
                        City
                    </div>
                    <div class="input">
                        <input type="text" name="city" id="" value="London">
                    </div>
                </div>
                <div class="form-group">
                    <div class="label">
                        Region
                    </div>
                    <div class="input">
                        <input type="text" name="region">
                    </div>
                </div>
                <div class="form-group">
                    <div class="label">
                        Postal Code
                    </div>
                    <div class="input">
                        <input type="text" name="postalCode" id="">
                    </div>
                </div>
                <div class="form-group">
                    <div class="label">
                        Country
                    </div>
                    <div class="input">
                        <select name="country" id="">
                            <?php foreach ($countries as $country): ?>
                                <option value="<?= $country ?>">
                                    <?= $country ?>
                                </option>
                            <?php endforeach ?>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <div class="label">
                        US Home Phone
                    </div>
                    <div class="input">
                        <input type="text" name="phone" id="">
                    </div>
                </div>
                <div class="form-group">
                    <div class="label">
                        Photo
                    </div>
                    <div class="input">
                        <input type="file" name="photo" id="">
                    </div>
                </div>

            </div>
            <div class="content">
                <div class="title">Optional Info</div>
                <div class="form-group">
                    <div class="label">
                        Notes
                    </div>
                    <div class="input">
                        <div id="editor">
                            <p></p>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="label">
                        Preferred Shift
                    </div>
                    <div class="input">
                        <input type="checkbox" name="regular" id="">Regular
                        <br>
                        <input type="checkbox" name="gravyYard" id="">Gravy Yard
                    </div>
                </div>
                <div class="form-group">
                    <div class="label">
                        Active?
                    </div>
                    <div class="input">
                        <input type="checkbox" name="active" id="">
                    </div>
                </div>
                <div class="form-group">
                    <div class="label">
                        Are you human?
                    </div>
                    <div class="input">
                        <p style="text-align:center;">Click to change</p>
                        <input type="text" name="question" id="">
                    </div>
                </div>
            </div>
            <div class="footer">
                <div class="btn-nav">
                    <button>
                        <i class="fa-solid fa-arrow-left"></i>
                    </button>
                    <button>
                        <i class="fa-solid fa-arrow-right"></i>
                    </button>
                    <br>
                    * required
                </div>
                <div class="btn-func">
                    <button>
                        <i class="fa-solid fa-right-to-bracket"></i> Submit
                    </button>
                    <button>
                        <i class="fa-solid fa-x"></i>Cancel
                    </button>
                </div>
            </div>
        </div>
    </form>
</body>

</html>
<script>
    ClassicEditor
        .create(document.querySelector('#editor'))
        .catch(error => {
            console.error(error);
        });
</script>