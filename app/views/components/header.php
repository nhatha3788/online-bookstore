<div class="menu-wrapper">
    <div class="header">
        <div class="header-wrapper">
            <div class="logo">
                <a href="../customer/home.php"><img src="../../../public/images/logo/logo.png" alt="logo"></a>
            </div>
            <div class="menu-search">
                <!-- <button type="button" data-bs-toggle="dropdown" aria-expanded="false"> -->
                <img src="../../../public/images/header/menu.png" alt="" class="header-icon menu-toggle">
                <!-- </button> -->
                <form style="position: relative;" method="GET" action="../customer/home.php">
                    <button type="submit" class="search-button">
                        <img src="../../../public/images/header/search.png" alt="" width="20px" height="20px">
                    </button>
                    <input type="text" class="form-control" id="search" name="search" placeholder="Tìm kiếm sản phẩm">
                </form>
            </div>
            <div class="icons">
                <?php
                    if(!isset($_SESSION['customer_id'])){
                        echo "
                        <div class='guest-button'>
                            <a href='../LoginAndSignup/signup.php'><button type='button' class='btn btn-primary  btn-sm'>Đăng ký</button></a>
                            <a href='../LoginAndSignup/login.php'><button type='button' class='btn btn-danger  btn-sm'>Đăng nhập</button></a>
                        </div>
                        ";
                    }else{
                        echo "
                        <a href='../checkout/cart.php' class='position-relative'><img src='../../../public/images/header/cart.png' alt='cart' class='header-icon'>
                        </a>
                        ";
                        echo "
                        <a href='../customer/account.php' class='profile-link'><img class='header-icon' src='../../../public/images/header/user.png' alt='profile'></a>
                        ";
                    }
                ?>
                
            </div>
        </div>
    </div>

    <div class="menu">
        <div class="container">
            <div class="row text-center">
                <div class="col">
                    <h5>Sách ngoại văn</h5>
                    <ul>
                        <li>Văn học</li>
                        <li>Kinh tế</li>
                        <li>Ngoại ngữ</li>
                        <li>Sách thiếu nhi</li>
                    </ul>
                </div>
                <div class="col">
                    <h5>Sách trong nước</h5>
                    <ul>
                        <li>Fiction</li>
                        <li>Business</li>
                        <li>Dictionary</li>
                        <li>Children's Books</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>