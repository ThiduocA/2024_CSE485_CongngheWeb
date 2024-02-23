<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Document</title>
</head>

<body>

</body>

</html>
<?php
$navItems = [
    "GIỚI THIỆU",
    "TIN TỨC & THÔNG BÁO",
    "TUYỂN SINH",
    "ĐÀO TẠO",
    "NGHIÊN CỨU",
    "ĐỐI NGOẠI",
    "VĂN BẢN",
    "SINH VIÊN",
    "LIÊN HỆ"
];
echo '<nav><ul class="navigation">';
echo '<a href=""> <li class="fixDot"> icon </li> </a>';
foreach ($navItems as $item) {
    echo "<a href='' <li class='fixDot'>$item</li> </a>";
}
echo '</ul></nav>';
?>