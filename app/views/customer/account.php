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
    <link rel="stylesheet" href="../../../public/css/account/account.css">
    <link rel="stylesheet" href="../../../public/css/account/sidebar.css">
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
                    <div class="profile">
                        <form method="" action="">
                            <p class="profile-title">
                                THÔNG TIN TÀI KHOẢN
                            </p>
                            <div class="row">
                                <div class="col-4">
                                    <ul>
                                        <li><label for="lastname" class="form-label">Họ*</label></li>
                                        <li><label for="name" class="form-label">Tên*</label></li>
                                        <li><label for="phone" class="form-label">Số điện thoại*</label></li>
                                        <li><label for="email" class="form-label">Email*</label></li>
                                    </ul>
                                </div>
                                <div class="col-8">
                                   <ul>
                                    <li>
                                        <button><i class="fa-solid fa-pen-to-square"></i></button>
                                        <input type="text" class="form-control" id="lastname" value="Nguyễn">
                                    </li>
                                    <li>
                                        <button><i class="fa-solid fa-pen-to-square"></i></button>
                                        <input type="text" class="form-control" id="name" value="Văn An">
                                    </li>
                                    <li>
                                        <button type="button" id="phoneBtn" data-bs-toggle="modal" data-bs-target="#phoneBackdrop"><i class="fa-solid fa-pen-to-square"></i></button>
                                        <input type="text" class="form-control" id="phone" value="0945509542" readonly>
                                        <div class="modal fade " id="phoneBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="phoneBackdropLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="phoneBackdropLabel">THAY ĐỔI SỐ ĐIỆN THOẠI</h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <label for="newPhone" class="form-label">Nhập số điện thoại mới</label>
                                                    <input type="email" class="form-control" id="newPhone">
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Trở về</button>
                                                    <button type="button" class="btn btn-primary">Xác nhận</button>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <button type="button" id="emailBtn" data-bs-toggle="modal" data-bs-target="#emailBackdrop"><i class="fa-solid fa-pen-to-square"></i></button>
                                        <input type="text" class="form-control" id="email" value="an@gmail.com" readonly>
                                        <div class="modal fade " id="emailBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="emailBackdropLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="emailBackdropLabel">THAY ĐỔI EMAIL</h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <label for="newEmail" class="form-label">Nhập email mới</label>
                                                    <input type="email" class="form-control" id="newEmail">
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-primary">Understood</button>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                   </ul>
                                </div>
                            </div>
                            <div class="submit-button">
                                <button type="submit" class="btn btn-danger">Lưu thay đổi</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

    <?php include '../components/footer.php';?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></scrip>
<script>
    $('#phoneBtn').on('click', function(){
        $('#phoneBackdrop').modal('show');
    })

    $('#emailBtn').on('click', function(){
        $('#emailBackdrop').modal('show');
    })
</script>
</body>
</html>