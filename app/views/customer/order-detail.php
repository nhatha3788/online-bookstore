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
    <link rel="stylesheet" href="../../../public/css/account/sidebar.css">
    <link rel="stylesheet" href="../../../public/css/account/order-detail.css">
    <script src="https://kit.fontawesome.com/9d371022aa.js" crossorigin="anonymous"></script>
</head>

<body>
    <?php include '../components/header.php'; ?>
    <div class="main-container">
        <div class="container-fluid content">
            <div class="row">
                <div class="col-3">
                    <?php include '../components/customer-sidebar.php'; ?>
                </div>
                <div class="col-9">
                    <!-- <div class="order-view-detail"> -->
                    <div class="order-view-info">
                        <p class="detail-title">CHI TIẾT ĐƠN HÀNG</p>
                        <div class="order-view-status"> Đơn hàng hoàn tất</div>
                        <p> <strong>Mã đơn hàng: </strong>1215616565</p>
                        <p> <strong>Ngày mua: </strong>6/12/2022</p>
                        <p><strong>Tổng tiền: </strong>240.000</p>
                    </div>
                    <div class="container order-view-method">
                        <div class="row">
                            <div class="col">
                                <div class="col-content">
                                    <p class="detail-title">THÔNG TIN NGƯỜI NHẬN</p>
                                    <p>Nhật Hà</p>
                                    <p>Phường Linh Trung, Thành Phố Thủ Đức, Hồ Chí Minh, Việt Nam</p>
                                    <p>Tel: 094550XXXX</p>
                                </div>
                            </div>
                            <div class="col">
                                <div class="col-content">
                                    <p class="detail-title">PHƯƠNG THỨC THANH TOÁN</p>
                                    <p>Internet Banking</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="order-view-product">
                        <p class="detail-title">THÔNG TIN SẢN PHẨM</p>
                        <p><strong>Tổng tiền: </strong>240.000</p>
                        <p><strong>Số lượng: </strong>1</p>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Hình ảnh</th>
                                    <th scope="col">Tên</th>
                                    <th scope="col">Giá bán</th>
                                    <th scope="col">Số lượng</th>
                                    <th scope="col">Thành tiền</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><img class="product-image" src="../../../public/images/product/motdoiquantri.jpg" alt=""></td>
                                    <td>Một đời quản trị</td>
                                    <td>120.000</td>
                                    <td>2</td>
                                    <td>240.000</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- </div> -->
                </div>
            </div>
        </div>
    </div>
    <?php include '../components/footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../../js/jquery.js"></script>
    <script src="../../js/function.js"></script>
</body>

</html>