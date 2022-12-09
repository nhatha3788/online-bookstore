<?php
  include('../../controller/product_ctl.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link rel="stylesheet" href="../../../public/css/header.css">
  <link rel="stylesheet" href="../../../public/css/footer.css">
  <link rel="stylesheet" href="../../../public/css/account/account.css">
  <link rel="stylesheet" href="../../../public/css/account/sidebar.css">
  <link rel="stylesheet" href="../../../public/css/home/home.css">
   
  <script src="https://kit.fontawesome.com/9d371022aa.js" crossorigin="anonymous"></script>
  <title>Home</title>
</head>
<body>
  <?php include'../components/banner.php';?>
  <?php
    include '../components/header.php';
  ?>
    <div class="home_container">
  <div class="grid">
    <div class="grid_row">
      <div class="grid_column-2">
        <nav class="home_category">
          <h4 class="category_heading">
            <i class="fa-solid fa-bars"></i>
            Danh mục
          </h4>

          <ul class="category-list">
            <li class="category-item">
              <a href="home.php?" class="category-item__link">Tiểu thuyết</a>
            </li>
            <li class="category-item">
              <a href="#" class="category-item__link">Sách kĩ năng</a>
            </li>
            <li class="category-item">
              <a href="#" class="category-item__link">Thiếu nhi</a>
            </li>
            <li class="category-item">
              <a href="#" class="category-item__link">Sách nước ngoài</a>
            </li>
          </ul>
        </nav>
      </div>
      <div class="grid_column-10">
        <div class="home-filter">
          <div class="home-filter__paginate">
            <span class="home-filter__page-num">
              <span class="home-filter__page-cur">1</span>/14
            </span>
            <div class="home-filter_page-control">
              <a href="" class="home-filter-page-btn"
                ><i class="page-control-icon fa-solid fa-angle-left"></i
              ></a>
              <a href="" class="home-filter-page-btn"
                ><i class="page-control-icon fa-solid fa-angle-right"></i
              ></a>
            </div>
          </div>
        </div>

        <div class="home-product">
         <?php
            include('../product/product-list.php');
         ?>
        </div>
      </div>
    </div>
  </div>
</div>

  <?php
    include '../components/footer.php';
  ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<script src="../../js/jquery.js"></script>
<script src="../../js/function.js"></script>
</body>
</html>