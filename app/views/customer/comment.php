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
    <link rel="stylesheet" href="../../../public/css/account/comment.css">
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
                    <div class="comment">
                        <p class="comment-title">NHẬN XÉT CỦA TÔI</p>
                        <p>Bạn chưa có nhận xét nào.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include '../components/footer.php';?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></scrip>
</body>
</html>
