<?php
include 'header.php';

$information = [
    [
        'img' => 'assets/img/course-global.png',
        'title' => 'LẬP TRÌNH VIÊN QUỐC TẾ',
        'description' => 'Chương Trình đào tạo chuẩn quốc tế và toàn diện. 
            Phù hợp với học sinh tốt nghiệp THPT,sinh viên và người định hướng theo nghề lập trình chuyên nghiệp.',
        'fee' => 'Học bổng 15.000.000VNĐ',
        'start_date' => '2/2024',
        'duration' => '2-2.5 năm'
    ],
    [
        'img' => 'assets/img/course-web-fullstack.png',
        'title' => 'LẬP TRÌNH WEB FULLSTACK',
        'description' => 'Khóa học phù hợp với người bắt đầu lập trình hoặc người chuyển nghề. 
            Trang bị từ frontend đến backend, xây dựng website hoàn chỉnh sau khóa học.',
        'fee' => 'Ưu đãi giảm 15% học phí',
        'start_date' => '2/2024',
        'duration' => '6 tháng'
    ],
    [
        'img' => 'assets/img/course-java-fullstack.png',
        'title' => 'LẬP TRÌNH JAVA FULLSTACK',
        'description' => 'Phát triển ứng dụng web từ cơ bản đến nâng cao bằng Java, 
            các ứng dụng doanh nghiệp sử dụng J2EE, Servlet, JSP, Spring Framework, EJB, ...',
        'fee' => 'Ưu đãi giảm 15% học phí',
        'start_date' => '2/2024',
        'duration' => '236 giờ'
    ],
    [
        'img' => 'assets/img/course-php-laravel.png',
        'title' => 'LẬP TRÌNH PHP & LARAVEL',
        'description' => 'PHP là một trong các ngôn ngữ thiết kế web mạnh nhất.
            Khóa học trang bị kỹ năng xây dựng web hoàn chỉnh sử dụng PHP kết hợp Laravel Framework',
        'fee' => 'Học phí 9.600.000 VNĐ',
        'start_date' => '5/2/2024',
        'duration' => '36 giờ'
    ],
    [
        'img' => 'assets/img/course-.net.png',
        'title' => 'KHÓA HỌC LẬP TRÌNH .NET',
        'description' => 'Phát triển ứng dụng web sử dụng nền tảng ASP.NET Core MVC.
            Để học tốt khóa học yêu cầu học viên đã có kiến thức C# và Frontend.',
        'fee' => 'Học phí: 6.000.000 VNĐ',
        'start_date' => '2/2024',
        'duration' => '40 giờ',
    ],
    [
        'img' => 'assets/img/course-sql.png',
        'title' => 'LẬP TRÌNH SQL SERVER',
        'description' => 'Trang bị những kiến thức nền tảng vững chắc về SQL Server như các kỹ thuật: lọc dữ liệu, phân tích, thiết kế và quản trị cơ sở dữ liệu,...',
        'fee' => 'Học phí: 4.500.000 VNĐ',
        'start_date' => '2/2024',
        'duration' => '30 giờ',
    ]


];
?>
<div class="container">
    <span class="title-course">KHÓA HỌC SẮP KHAI GIẢNG</span>
    <div class="row">
        <?php foreach ($information as $course): ?>
            <div class="information-course col-md-4 col-sm-6">
                <img src="<?= $course['img'] ?>" alt="<?= $course['title'] ?>">
                <h3>
                    <?= $course['title'] ?>
                </h3>
                <p>
                    <?= $course['description'] ?>
                </p>
                <p>
                    <i aria-hidden="true" class="fas fa-gift"></i>
                    <?= $course['fee'] ?>
                </p>
                <p>
                    <i aria-hidden="true" class="fas fa-clock"></i>
                    Khai giảng:
                    <?= $course['start_date'] ?>
                </p>
                <p>
                    <i aria-hidden="true" class="fas fa-bookmark"></i>
                    Thời lượng:
                    <?= $course['duration'] ?>
                </p>
            </div>
        <?php endforeach ?>
    </div>
</div>
<!-- echo '<div class="container">'; 1
    echo '<div class="row">'; 2
        foreach ($information as $course) {
        echo '<div class="information-course col-md-4 col-sm-6">' 3;
            echo '<div class="img-course">' 4;
                echo '<img src="imgcode.png" alt="" style="width:100%">';
                echo '</div>' 4;
            echo '<div>' 5;
                echo '<h3>' . $course['title'] . '</h3>';
                echo '<p>' . $course['description'] . '</p>';
                echo '<p>' . $course['fee'] . '</p>';
                echo '<p>' . $course['start_date'] . '</p>';
                echo '<p>' . $course['duration'] . '</p>';
                echo '</div>' 5;
            echo '</div>' 3;
        }

        echo '<div>' 2;
            echo '</div>';  1-->