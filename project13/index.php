<?php
include 'header.php';

$information = [
    [
        'title' => 'LẬP TRÌNH VIÊN QUỐC TẾ',
        'description' => 'Chương Trình đào tạo chuẩn quốc tế và toàn diện. 
            Phù hợp với học sinh tốt nghiệp THPT,sinh viên và người định hướng theo nghề lập trình chuyên nghiệp.',
        'fee' => '15.000.000VNĐ',
        'start_date' => '2/2024',
        'duration' => '2-2.5 năm'
    ],
    [
        'title' => 'LẬP TRÌNH WEB FULLSTACK',
        'description' => 'Khóa học phù hợp với người bắt đầu lập trình hoặc người chuyển nghề. 
            Trang bị từ frontend đến backend, xây dựng website hoàn chỉnh sau khóa học.',
        'fee' => 'Ưu đãi giảm 15% học phí',
        'start_date' => '2/2024',
        'duration' => '6 tháng'
    ],
    [
        'title' => 'LẬP TRÌNH JAVA FULLSTACK',
        'description' => 'Phát triển ứng dụng web từ cơ bản đến nâng cao bằng Java, 
            các ứng dụng doanh nghiệp sử dụng J2EE, Servlet, JSP, Spring Framework, EJB, ...',
        'fee' => 'Ưu đãi giảm 15% học phí',
        'start_date' => '2/2024',
        'duration' => '236 giờ'
    ],
    [
        'title' => 'LẬP TRÌNH PHP & LARAVEL',
        'description' => 'PHP là một trong các ngôn ngữ thiết kế web mạnh nhất.
            Khóa học trang bị kỹ năng xây dựng web hoàn chỉnh sử dụng PHP kết hợp Laravel Framework',
        'fee' => 'Học phí 9.600.000 VNĐ',
        'start_date' => '5/2/2024',
        'duration' => '36 giờ'
    ],
    [
        'title' => 'KHÓA HỌC LẬP TRÌNH .NET',
        'description' => 'Phát triển ứng dụng web sử dụng nền tảng ASP.NET Core MVC.
            Để học tốt khóa học yêu cầu học viên đã có kiến thức C# và Frontend.',
        'fee' => '6.000.000 VNĐ',
        'start_date' => '2/2024',
        'duration' => '40 giờ',
    ],
    [
        'title' => 'LẬP TRÌNH SQL SERVER',
        'description' => 'Trang bị những kiến thức nền tảng vững chắc về SQL Server như các kỹ thuật: lọc dữ liệu, phân tích, thiết kế và quản trị cơ sở dữ liệu,...',
        'fee' => '4.500.000 VNĐ',
        'start_date' => '2/2024',
        'duration' => '30 giờ',
    ]


];
?>
<div class="container">
    <h1 class="title-course">KHÓA HỌC SẮP KHAI GIẢNG</h1>
    <div class="row">
        <?php foreach ($information as $course): ?>
            <?php if ($course['title'] == "LẬP TRÌNH VIÊN QUỐC TẾ"): ?>
                <div class="information-course col-md-4 col-sm-6">
                    <div class="img-course">
                        <img src="assets/img/course-global.png" alt=" LẬP TRÌNH VIÊN QUỐC TẾ">
                    </div>
                    <div>
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
                            <?= $course['start_date'] ?>
                        </p>
                        <p>
                            <i aria-hidden="true" class="fas fa-bookmark"></i>
                            <?= $course['duration'] ?>
                        </p>
                    </div>
                </div>

            <?php endif ?>
            <?php if ($course['title'] == "LẬP TRÌNH WEB FULLSTACK"): ?>
                <div class="information-course col-md-4 col-sm-6">
                    <div class="img-course">
                        <img src="assets/img/course-web-fullstack.png" alt="LẬP TRÌNH WEB FULLSTACK">
                    </div>
                    <div>
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
                            <?= $course['start_date'] ?>
                        </p>
                        <p>
                            <i aria-hidden="true" class="fas fa-bookmark"></i>
                            <?= $course['duration'] ?>
                        </p>
                    </div>
                </div>
            <?php endif ?>
            <?php if ($course['title'] == "LẬP TRÌNH JAVA FULLSTACK"): ?>
                <div class="information-course col-md-4 col-sm-6">
                    <div class="img-course">
                        <img src="assets/img/course-java-fullstack.png" alt="LẬP TRÌNH JAVA FULLSTACK">
                    </div>
                    <div>
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
                            <?= $course['start_date'] ?>
                        </p>
                        <p>
                            <i aria-hidden="true" class="fas fa-bookmark"></i>
                            <?= $course['duration'] ?>
                        </p>
                    </div>
                </div>
            <?php endif ?>
            <?php if ($course['title'] == "LẬP TRÌNH PHP & LARAVEL"): ?>
                <div class="information-course col-md-4 col-sm-6">
                    <div class="img-course">
                        <img src="assets/img/course-php-laravel.png" alt="LẬP TRÌNH PHP & LARAVEL">
                    </div>
                    <div>
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
                            <?= $course['start_date'] ?>
                        </p>
                        <p>
                            <i aria-hidden="true" class="fas fa-bookmark"></i>
                            <?= $course['duration'] ?>
                        </p>
                    </div>
                </div>
            <?php endif ?>
            <?php if ($course['title'] == "KHÓA HỌC LẬP TRÌNH .NET"): ?>
                <div class="information-course col-md-4 col-sm-6">
                    <div class="img-course">
                        <img src="assets/img/course-.net.png" alt="KHÓA HỌC LẬP TRÌNH .NET">
                    </div>
                    <div>
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
                            <?= $course['start_date'] ?>
                        </p>
                        <p>
                            <i aria-hidden="true" class="fas fa-bookmark"></i>
                            <?= $course['duration'] ?>
                        </p>
                    </div>
                </div>
            <?php endif ?>
            <?php if ($course['title'] == "LẬP TRÌNH SQL SERVER"): ?>
                <div class="information-course col-md-4 col-sm-6">
                    <div class="img-course">
                        <img src="assets/img/course-sql.png" alt="LẬP TRÌNH SQL SERVER">
                    </div>
                    <div>
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
                            <?= $course['start_date'] ?>
                        </p>
                        <p>
                            <i aria-hidden="true" class="fas fa-bookmark"></i>
                            <?= $course['duration'] ?>
                        </p>
                    </div>
                </div>
            <?php endif ?>
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