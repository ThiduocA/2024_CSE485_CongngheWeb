<nav>
    <div class="advanced-search-btn">
        <a href="?controller=department&action=index"><button class="button-27" role="button">QUẢN LÝ PHÒNG
                BAN</button></a>
    </div>
    <div class="advanced-search-btn">
        <a href="?controller=employee"><button class="button-27" role="button">QUẢN LÝ NHÂN
                VIÊN</button></a>
    </div>

    <div class="advanced-search-btn">
        <a href="?controller=user&action=advanced_search"><button class="button-27" role="button">TÌM KIẾM NÂNG
                CAO</button></a>

    </div>

    <!-- ktra da dang nhap chua, neu roi thi ko co nut dang nhap -->

    <div class="advanced-search-btn">
        <a href="?controller=user&action=info"><button class="button-27" role="button">TÀI KHOẢN:
                <?= $_SESSION['username'] ?>
            </button></a>
    </div>
    <div class="login-btn">
        <a href="?controller=user&action=logout"><button class="button-27" role="button">ĐĂNG
                XUẤT
            </button></a>
    </div>
</nav>