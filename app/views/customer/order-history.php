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
    <link rel="stylesheet" href="../../../public/css/account/order-history.css">
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
                    <div class="history">
                        <p class="history-title">ĐƠN HÀNG CỦA TÔI</p>
                        <div class="history-status">
                            <div class="status-count">
                                <p class="status">Trạng thái: Hoàn tất</p>
                                <p class="count">Số lượng: 3</p>
                            </div>
                            <table class="table ">
                                <thead>
                                    <tr>
                                        <th scope="col">Mã đơn</th>
                                        <th scope="col">Ngày mua</th>
                                        <th scope="col">Tổng tiền</th>
                                        <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>23/04/2022</td>
                                        <td>100.000</td>
                                        <td>
                                            <div class="action">
                                                <a href="order-detail.php"> <button type="button" class="btn btn-primary">Chi tiết</button></a>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="history-status">
                            <div class="status-count">
                                <p class="status">Trạng thái: Đang xử lý</p>
                                <p class="count">Số lượng: 3</p>
                            </div>
                            <table class="table ">
                                <thead>
                                    <tr>
                                        <th scope="col">Mã đơn</th>
                                        <th scope="col">Ngày mua</th>
                                        <th scope="col">Tổng tiền</th>
                                        <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>23/04/2022</td>
                                        <td>100.000</td>
                                        <td>
                                            <div class="action">
                                                <a href="order-detail.php"> <button type="button" class="btn btn-primary">Chi tiết</button></a>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <?php include '../components/footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="../../js/jquery.js"></script>
    <script src="../../js/function.js"></script>
</body>

</html>