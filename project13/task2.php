
<?php
include 'header.php';

    $information = [
        [
            'title' => 'LAP TRINH VIEN QUOC TE',
            'description' => 'Chương Trình đào tạo chuẩn quốc tế và toàn diện. Phù hợp với học sinh tốt nghiệp THPT,sinh viên và người định hướng theo nghề lập trình chuyên nghiệp.',
            'fee' => '14000',
            'start_date'=> '2/2/24',
            'duration'=> '2-2.5'
        ],
        [
            'title' => 'LAP TRINH VIEN QUOC TE',
            'description' => 'Chương Trình đào tạo chuẩn quốc tế và toàn diện. Phù hợp với học sinh tốt nghiệp THPT,sinh viên và người định hướng theo nghề lập trình chuyên nghiệp.',
            'fee' => '14000',
            'start_date'=> '2/2/24',
            'duration'=> '2-2.5'
        ],
        [
            'title' => 'LAP TRINH VIEN QUOC TE',
            'description' => 'Chương Trình đào tạo chuẩn quốc tế và toàn diện. Phù hợp với học sinh tốt nghiệp THPT,sinh viên và người định hướng theo nghề lập trình chuyên nghiệp.',
            'fee' => '14000',
            'start_date'=> '2/2/24',
            'duration'=> '2-2.5'
        ]


];
    echo    '<div class="container">';
    echo        '<div class="row">';
foreach ($information as $course ) {
    echo            '<div class="information-course col-md-4 col-sm-6">';
    echo                '<div class="img-course">';
    echo                    '<img src="imgcode.png" alt="" style="width:100%">';
    echo                '</div>';
    echo                '<div>';
    echo                    '<h2>'.$course['title'].'</h2>';
    echo                     '<p>'.$course['description'].'</p>';
    echo                     '<p>'.$course['fee'].'</p>';
    echo                     '<p>'.$course['start_date'].'</p>';
    echo                     '<p>'.$course['duration'].'</p>';
    echo                '</div>';
    echo            '</div>';
}
   
    echo        '<div>';
    echo    '</div>';

?>

