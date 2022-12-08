<?php
  include('../../controller/product_ctl.php');
?>
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
                <div class="product-detail">
                    <div class="container">
                        <div class="row">
                            <div class="col-5 book-cover">
                                <img src="<?php echo $book_info['cover_image'];?>" alt="">
                            </div>
                            <div class="col book-title-quantity">
                                <div class="book-title"><?php echo $book_info['name'];?></div>
                                <div class="rating">
                                    <div><?php echo $number_of_rate . " đánh giá";?></div>  
                                </div>
                                
                                <div class="price-sold">
                                    <div>
                                        <div><strong>Nhà xuất bản: </strong><?php echo $book_info['publisher'];?></div>
                                        <div class="book-price"><?php echo number_format($book_info['price'], 0, ',', '.') . "đ";?></div>
                                    </div>
                                    <div>
                                        <div><strong>Tác giả: </strong><?php echo $book_info['author'];?></div>
                                        <div class="sold-quantity">
                                        <button type="button" class="btn btn-warning">
                                        Đã bán <span class="badge text-bg-secondary"><?php echo $soluong_daban;?></span>
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
            <div><?php echo $book_info['description'];?></div>
        </div>
        <div class="product-body suggestion">
        <div class="subtitle">Bookstore đề xuất</div>
            <div class="container">
                <div class="row text-center">
                <?php
                    include '../components/suggestion-item.php';
                ?>
                </div>
            </div>
        </div>
        <div class="product-body comment">
            <div class="subtitle">Đánh giá sản phẩm</div>
            <div class="rating">
                <div><?php echo $number_of_rate . " đánh giá";?></div>  
            </div>
            <div class="comment-button"> 
                <button type="button" class="btn btn-danger"><i class="fa-regular fa-pen-to-square"></i>Viết đánh giá</button>
            </div>

            <div class="comment-sort">
            </div>

            <div class="container comments">
                <?php
                $item = 0;
                while($cmt_info = mysqli_fetch_array($cmt_run)){
                    $name="SELECT `name` FROM `customer` WHERE customer_id=$cmt_info[customer_id]";
                    $name_run = mysqli_query($conn,$name);
                    $temp = mysqli_fetch_array($name_run);
                    if($item > 7){
                        break;
                    }
                    echo "
                    <div class='row a-comment'>
                        <div class='col-2 commentor-info'>
                            <strong>$temp[name]</strong>
                        </div>
                        <div class='col comment-content'>$cmt_info[comment]</div>
                    </div>";
                    $item= $item +1;
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