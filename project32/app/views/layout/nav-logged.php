<nav>
    <div class="advanced-search-btn">
        <a href="?controller=department"><button class="button-27" role="button">QUẢN LÝ PHÒNG
                BAN</button></a>
    </div>
    <div class="advanced-search-btn">
        <a href="?controller=employee"><button class="button-27" role="button">QUẢN LÝ NHÂN
                VIÊN</button></a>
    </div>
    <div class="search-input">
        <input type="text" placeholder="Tìm kiếm">
    </div>
    <div class="advanced-search-btn">
        <button class="button-27" role="button">TÌM KIẾM NÂNG CAO</button>
    </div>
    <!-- ktra da dang nhap chua, neu roi thi ko co nut dang nhap -->

    <div class="login-btn">
        <a href="?controller=user&action=logout"><button class="button-27" role="button">ĐĂNG
                XUẤT:<?=$_SESSION['username']?></button></a>
    </div>
</nav>