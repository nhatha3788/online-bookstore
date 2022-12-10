<?php
        include('../../controller/cart_ctl.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bookstore</title>
    <link href="//cdn.muicss.com/mui-0.10.3/css/mui.min.css" rel="stylesheet" type="text/css" />
    <script src="//cdn.muicss.com/mui-0.10.3/js/mui.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="../../../public/css/header.css">
    <link rel="stylesheet" href="../../../public/css/footer.css">
    <link rel="stylesheet" href="../../../public/css/checkout/cart.css">
    <script src="https://kit.fontawesome.com/9d371022aa.js" crossorigin="anonymous"></script>
</head>

<body>
    <?php include '../components/header.php'; ?>
    <div class="main-container">
        <div class="cart">
            <form action="">
                <div class="container">
                    <div class="row cart-info">
                        <div class="col-8 column-content">
                            <div class="order">
                                <div class="subtitle">Giỏ hàng: <?= $number_item?> sản phẩm</div>
                                <div class="section-wrapper">
                                    <?php
                                    while($row = mysqli_fetch_array($db_cart_run)){
                                        include '../components/checkout-item.php';
                                    }
                                    ?>
                                </div>
                            </div>
                            <div class="payment">
                                <div class="subtitle">Phương pháp thanh toán</div>
                                <div class="section-wrapper">
                                    <fieldset id="group1">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="group1" id="method1" value="Thanh toán khi nhận hàng" checked>
                                            <label class="form-check-label" for="method1">
                                                Thanh toán khi nhận hàng
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="group1" id="method2" value="Internet Banking">
                                            <label class="form-check-label" for="method2">
                                                Internet Banking
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="group1" id="method3" value="Ví MOMO">
                                            <label class="form-check-label" for="method3">
                                                Ví MOMO
                                            </label>
                                        </div>
                                    </fieldset>
                                </div>
                            </div>
                            <div class="address">
                                <div class="subtitle">Địa chỉ nhận hàng</div>
                                <div class="section-wrapper">
                                    <fieldset id="group2">
                                    <?php
                                    while($row = mysqli_fetch_array($db_address_run)){
                                        echo "
                                        <div class='form-check'>
                                            <input class='form-check-input' type='radio' name='group2' id='address1' value='$row[address_id]' checked>
                                            <label class='form-check-label' for='address1'>
                                                $row[address]
                                            </label>
                                        </div>
                                        ";
                                    }
                                    ?>
                                    </fieldset>
                                </div>
                            </div>
                        </div>
                        <div class="col-4 column-content">
                            <div class="summary">
                                <div class="subtitle">Đơn hàng</div>
                                <div class="section-wrapper">
                                    <div style="display: flex; flex-direction:column;row-gap:10px;">
                                        <div style="display: flex; justify-content:space-between;">
                                            <strong>Thành tiền: </strong>0 đ
                                        </div>
                                        <div style="display: flex; justify-content:space-between;">
                                            <strong>Phí dịch vụ: </strong>20.000đ
                                        </div>
                                        <div style="display: flex; justify-content:space-between;">
                                            <strong>Tổng số tiền: </strong>20.000đ
                                        </div>
                                    </div>
                                    <div class="mui-divider"></div>
                                    <div class="gogo">
                                        <button class="mui-btn mui-btn--danger">Thanh toán</button>
                                    </div>

                                </div>
                            </div>
                            <div class="additional">
                                <div class="subtitle">Dịch vụ đi kèm</div>
                                <div class="section-wrapper" style="display: flex; justify-content:space-between;align-items: center;">
                                    <div style="display: flex; align-items: center; gap:10px">
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
                                        </div>
                                        <span>Bọc sách</span>
                                    </div>
                                    <div><strong>Phí: </strong>20.000 đ</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row checkout-button">
                        <button class="mui-btn mui-btn--accent">Tiếp tục mua hàng</button>
                        <button class="mui-btn mui-btn--danger">Xác nhận thanh toán</button>
                    </div>
                </div>
        </div>

    </div>
    </form>
    </div>
    </div>
    <?php include '../components/footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="../../js/jquery.js"></script>
    <script src="../../js/function.js"></script>
</body>

</html>