<?php
session_start();
include('../../model/checkLogin_model.php');
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
    <link rel="stylesheet" href="../../../public/css/account/sidebar.css">
    <link rel="stylesheet" href="../../../public/css/account/comment.css">
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
                    <div class="comment">
                        <p class="comment-title">NHẬN XÉT CỦA TÔI</p>
                        <?php
                        for ($i = 0; $i < 3; $i++) {
                            echo '<div class="a-book">
                            <div class="box-wrapper">
                                <!-- <div class="image-info"> -->
                                <img src="../../../public/images/product/pap.jpg" alt="">
                                <div><strong>Pride and Prejudice</strong></div>
                                <div><strong>Tác giả: </strong>Nguyễn Văn A</div>
                                <div><strong>Thể loại: </strong>Thiếu nhi</div>
                                <div><strong>Giá: </strong><span class="price">98.000 đ</span></div>
                                <!-- </div> -->
                                <button class="mui-btn mui-btn--small mui-btn--primary mui-btn--fab comment-toggle" id="book1"><i class="fa-solid fa-caret-down"></i></button>
                            </div>
                            <div class="box-wrapper" id="comment1">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Ngày</th>
                                            <th>Bình luận</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>12/21/2022</td>
                                            <td>Nội dung rất bổ ích.</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>';
                        }

                        ?>
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