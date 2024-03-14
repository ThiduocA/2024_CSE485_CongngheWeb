<!DOCTYPE html>
<html lang="en">
<?php include (ROOT."/views/layout/head.php");?>

<body>
    <?php include (ROOT."/views/layout/banner.php");?>
    <?php include (ROOT."/views/layout/nav.php");?>
    <div class="content">
        <div class="content-left">
            <div class="news">
                <div class="news-title">
                    <h3>TIN TỨC VÀ SỰ KIỆN</h3>
                </div>
                <hr>
                <div class="news-content">
                    <div class="news-item">
                        <div class="news-item-img">
                            <img src="<?= domains.'public/assets/img/news-img.png'?>" alt="">
                        </div>
                        <div class="news-item-content">
                            <div class="news-item-title">
                                <a href="#">Lập trình web</a>
                            </div>
                            <div class="news-item-date">
                                <i class="fas fa-calendar-alt"></i>
                                <span>20/02/2024</span>
                            </div>
                            <div class="news-item-text">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                    Quisquam, quod, quibusdam, quod quaerat quidem quas quod quaerat
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="news-item">
                        <div class="news-item-img">
                            <img src="<?= domains.'public/assets/img/news-img.png'?>" alt="">

                        </div>
                        <div class="news-item-content">
                            <div class="news-item-title">
                                <a href="#">Lập trình web</a>
                            </div>
                            <div class="news-item-date">
                                <i class="fas fa-calendar-alt"></i>
                                <span>20/02/2024</span>
                            </div>
                            <div class="news-item-text">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                    Quisquam, quod, quibusdam, quod quaerat quidem quas quod quaerat
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="news-item">
                        <div class="news-item-img">
                            <img src="<?= domains.'public/assets/img/news-img.png'?>" alt="">

                        </div>
                        <div class="news-item-content">
                            <div class="news-item-title">
                                <a href="#">Lập trình web</a>
                            </div>
                            <div class="news-item-date">
                                <i class="fas fa-calendar-alt"></i>
                                <span>20/02/2024</span>
                            </div>
                            <div class="news-item-text">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                    Quisquam, quod, quibusdam, quod quaerat quidem quas quod quaerat
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="feature">
                <div class="feature-title">
                    <h3>DANH BẠ NỔI BẬT</h3>
                </div>
                <hr>
                <div class="feature-content">
                    <?php $count = 0; ?>
                    <?php foreach ($employees as $employee):?>


                    <?php if ($count == 3){
                        break;
                    }?>
                    <?php $count +=1; ?>


                    <div class="feature-item">
                        <div class="feature-item-img">
                            <img src="<?= domains.'public/assets/img/news-img.png'?>" alt="">
                        </div>
                        <div class="feature-item-content">
                            <div class="feature-item-name">
                                <h4><?=$employee->getFullname()?></h4>
                            </div>
                            <div class="feature-item-mobilephone">
                                <i class="fas fa-mobile-alt"></i>
                                <span><?=$employee->getMobilephone()?></span>
                            </div>
                            <div class="feature-item-position">
                                <i class="fas fa-briefcase"></i>
                                <span><?=$employee->getPosition()?></span>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        <div class="content-right">
            <div class="introduce">
                <div class="introduce-title">
                    <h3>GIỚI THIỆU</h3>
                    <hr>
                    <p>Đây là trang danh bạ số của trường đại học Thủy Lợi do nhóm 1 nghiên cứu tạo ra</p>
                    <p><b>Tính năng chính của trang web:</b> hiển thị danh bạ số, phòng ban, nhân viên,..</p>
                    <p><b>Số lượng nhân viên:</b><?php echo count($employees)?></p>
                </div>
            </div>
        </div>
    </div>
    <?php include (ROOT."/views/layout/footer.php");?>
</body>

</html>