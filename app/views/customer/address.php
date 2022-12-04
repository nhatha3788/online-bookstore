<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bookstore</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="../../js/jquery.js"></script>
    <link rel="stylesheet" href="../../../public/css/header.css">
    <link rel="stylesheet" href="../../../public/css/footer.css">
    <link rel="stylesheet" href="../../../public/css/account/sidebar.css">
    <link rel="stylesheet" href="../../../public/css/account/address.css">
    <script src="https://kit.fontawesome.com/9d371022aa.js" crossorigin="anonymous"></script>
</head>
<body>
    <?php include '../components/header.php';?>
    <div class="main-container">
        <div class="container-fluid content">
            <div class="row">
                <div class="col-3">
                    <?php include '../components/customer-sidebar.php';?>
                </div>
                <div class="col-9">
                    <div class="address">
                        <p class="address-title">SỔ ĐỊA CHỈ</p>
                        <div class="row">
                            <div class="col">
                                <p class="address-subtitle">
                                    Địa chỉ nhận hàng mặc định: 
                                </p>
                                <p class="main-address">HCM, VN</p>
                                <p class="address-subtitle">
                                    Địa chỉ thanh toán mặc định: 
                                </p>
                                <p class="main-address">HCM, VN</p>
                            </div>
                            <div class="col">
                                <div class="address-table">
                                    <div>
                                        <table class="table ">
                                        <thead>
                                            <tr>
                                            <th scope="col">Địa chỉ nhận hàng</th>
                                            <th scope="col"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                            <td>Hồ Chí Minh, Việt Nam</td>
                                            <td>
                                                <div class="action">
                                                <button type="button" class="btn btn-primary">Chọn</button>
                                                <button type="button" class="btn btn-success">Chỉnh sửa</button>
                                                </div>
                                            </td>
                                            </tr>
                                        </tbody>
                                        </table>
                                        <button type="submit" class="btn btn-danger">Thêm địa chỉ</button>
                                    </div>
                                    <div>
                                        <table class="table ">
                                            <thead>
                                                <tr>
                                                <th scope="col">Địa chỉ thanh toán</th>
                                                <th scope="col"></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                <td>Hồ Chí Minh, Việt Nam</td>
                                                <td>
                                                    <div class="action">
                                                    <button type="button" class="btn btn-primary">Chọn</button>
                                                    <button type="button" class="btn btn-success">Chỉnh sửa</button>
                                                    </div>
                                                </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <button type="submit" class="btn btn-danger">Thêm địa chỉ</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include '../components/footer.php';?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></scrip>
</body>
</html>
