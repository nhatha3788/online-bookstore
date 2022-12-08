<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bookstore</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="../../../public/css/header.css">
    <link rel="stylesheet" href="../../../public/css/footer.css">
    <link rel="stylesheet" href="../../../public/css/product/product-detail.css">
    <link rel="stylesheet" href="../../../public/css/product/suggestion-item.css">
    <script src="https://kit.fontawesome.com/9d371022aa.js" crossorigin="anonymous"></script>
</head>
<body>
    <?php include '../components/header.php';?>
    <div class="main-container">
        <div class="product-body">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">FOREIGN BOOKS</li>
                    <li class="breadcrumb-item active" aria-current="page">CHILDREN'S BOOKS</li>
                </ol>
            </nav>
                <div class="product-detail">
                    <div class="container">
                        <div class="row">
                            <div class="col-5 book-cover">
                                <img src="../../../public/images/product/climatechange.jpg" alt="">
                            </div>
                            <div class="col book-title-quantity">
                                <div class="book-title">DK Eyewitness: Climate Change</div>
                                <div class="rating">
                                    <div class="progress">
                                        <div class="progress-bar bg-success" role="progressbar" aria-label="Success example" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>  
                                    <div>45 đánh giá</div>  
                                </div>
                                
                                <div class="price-sold">
                                    <div>
                                        <div><strong>Nhà xuất bản: </strong>Oxford</div>
                                        <div class="book-price">96.000 đ</div>
                                    </div>
                                    <div>
                                        <div><strong>Tác giả: </strong>Oxford</div>
                                        <div class="sold-quantity">
                                        <button type="button" class="btn btn-warning">
                                        Đã bán <span class="badge text-bg-secondary">4</span>
                                        </button>
                                        </div>
                                    </div>
                                </div>
                                <div><strong>Chính sách đổi trả: </strong> Đổi trả sản phẩm trong 30 ngày <span class="badge rounded-pill text-bg-primary">Xem thêm</span></div>
                                <strong>Số lượng</strong>
                                <input type="email" class="form-control" id="set-quantity" value="1">
                            </div>
                            
                        </div>
                        <div class="row">
                            <div class="buy-button">
                                <button type="button" class="btn btn-outline-danger"><i class="fa-light fa-cart-shopping"></i>Thêm vào giỏ hàng</button>
                                <button type="button" class="btn btn-danger">Mua ngay</button>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        <div class="product-body description">
            <div class="subtitle">Thông tin sản phẩm</div>
            <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, veniam! Earum architecto aperiam autem provident dolorum. Enim pariatur recusandae provident accusantium nisi hic minima impedit debitis laudantium consequatur! Veritatis, nemo?</div><div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, veniam! Earum architecto aperiam autem provident dolorum. Enim pariatur recusandae provident accusantium nisi hic minima impedit debitis laudantium consequatur! Veritatis, nemo?</div><div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, veniam! Earum architecto aperiam autem provident dolorum. Enim pariatur recusandae provident accusantium nisi hic minima impedit debitis laudantium consequatur! Veritatis, nemo?</div><div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, veniam! Earum architecto aperiam autem provident dolorum. Enim pariatur recusandae provident accusantium nisi hic minima impedit debitis laudantium consequatur! Veritatis, nemo?</div>
        </div>
        <div class="product-body suggestion">
        <div class="subtitle">Bookstore đề xuất</div>
            <div class="container">
                <div class="row text-center">
                <?php
                    for ($i = 0; $i < 6; $i++) {
                        echo include '../components/suggestion-item.php';
                    }
                ?>
                </div>
            </div>
        </div>
        <div class="product-body comment">
            <div class="subtitle">Đánh giá sản phẩm</div>
            <div class="rating">
                <div>45 đánh giá</div>  
            </div>
            <div class="comment-button">
                    <div class="progress">
                        <div class="progress-bar bg-success" role="progressbar" aria-label="Success example" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>  
                <button type="button" class="btn btn-danger"><i class="fa-regular fa-pen-to-square"></i>Viết đánh giá</button>
            </div>

            <div class="comment-sort">
            <button type="button" class="btn btn-outline-danger"
                    style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
            Mới nhất
            </button>
            </div>

            <div class="container comments">
                <?php
                for($i = 0;$i<3;$i++)
                {
                    echo '
                    <div class="row a-comment">
                        <div class="col-2 commentor-info">
                            <strong>Hiếu Nghĩa</strong>
                            <div>27/06/2017</div>
                        </div>
                        <div class="col comment-content">Một cuốn sách hay của một nhà xuất bản uy tín. Sách rất phù hợp với những người đi làm cần trao dồi thêm kỹ năng giao tiếp bằng tiếng Anh. Có rất nhiều tình huống hội thoại hay, sinh động, mang tính thực tế cao.</div>
                    </div>';
                }
                ?>
            </div>
        
        </div>
    </div>
    <?php include '../components/footer.php';?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<script src="../../js/jquery.js"></script>
<script src="../../js/function.js"></script>
</body>
</html>
