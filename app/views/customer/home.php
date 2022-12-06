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
            <p class="book_vietnam">Sách trong nước</p>
            <li class="category-item">
              <a href="#" class="category-item__link">Văn học</a>
            </li>
            <li class="category-item">
              <a href="#" class="category-item__link">Kinh tế</a>
            </li>
            <li class="category-item">
              <a href="#" class="category-item__link">Ngoại ngữ</a>
            </li>
            <li class="category-item">
              <a href="#" class="category-item__link">Thiếu nhi</a>
            </li>
            <p class="book_foreign">Foreign language</p>
            <li class="category-item">
              <a href="#" class="category-item__link">Fiction</a>
            </li>
            <li class="category-item">
              <a href="#" class="category-item__link">Bussiness</a>
            </li>
            <li class="category-item">
              <a href="#" class="category-item__link">Dictionary</a>
            </li>
            <li class="category-item">
              <a href="#" class="category-item__link">Children's Books</a>
            </li>
          </ul>
        </nav>
      </div>
      <div class="grid_column-10">
        <div class="home-filter">
          <span class="home-filter__label">Sắp xếp theo</span>
          <div class="select-input">
            <span class="select-input__label">Giá</span>
            <i class="select-input-icon fa-solid fa-angle-down"></i>
            <ul class="select-input-list">
              <li>
                <a href="" class="select-input__link">Giá: Thấp đến Cao</a>
              </li>
              <li>
                <a href="" class="select-input__link">Giá: Cao đến Thấp</a>
              </li>
            </ul>
          </div>
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
          <div class="grid_row">
            <!-- Product item -->
            <div class="grid_column-2-4">
              <div class="home-product-item">
                <div
                  class="home-product-item__img"
                  style="
                    background-image: url(https://cdn0.fahasa.com/media/catalog/product/i/m/image_195509_1_36793.jpg);
                  "
                ></div>
                <h4 class="home-product-item__name">
                  Nhà giả kim (Tái bản 2020)
                </h4>
                <div class="home-product-item__price">
                  <span class="home-product-item__price-old">60.000đ</span>
                  <span class="home-product-item__price-new">54.000đ</span>
                </div>
                <div class="home-product-item__action">
                  <span class="home-product-item__rating">
                    <i class="star-golden fas fa-star"></i>
                    <i class="star-golden fas fa-star"></i>
                    <i class="star-golden fas fa-star"></i>
                    <i class="star-golden fas fa-star"></i>
                    <i class="fas fa-star"></i>
                  </span>
                  <span class="home-product-item__rating-num">(100)</span>
                </div>
                <span class="home-product-item__sale-off-percent">10%</span>
              </div>
              
            </div>
            <!-- Product item -->
            <div class="grid_column-2-4">
              <div class="home-product-item">
                <div
                  class="home-product-item__img"
                  style="
                    background-image: url(https://cdn0.fahasa.com/media/catalog/product/i/m/image_195509_1_36793.jpg);
                  "
                ></div>
                <h4 class="home-product-item__name">
                  Nhà giả kim (Tái bản 2020)
                </h4>
                <div class="home-product-item__price">
                  <span class="home-product-item__price-old">60.000đ</span>
                  <span class="home-product-item__price-new">54.000đ</span>
                </div>
                <div class="home-product-item__action">
                  <span class="home-product-item__rating">
                    <i class="star-golden fas fa-star"></i>
                    <i class="star-golden fas fa-star"></i>
                    <i class="star-golden fas fa-star"></i>
                    <i class="star-golden fas fa-star"></i>
                    <i class="fas fa-star"></i>
                  </span>
                  <span class="home-product-item__rating-num">(100)</span>
                </div>
                <span class="home-product-item__sale-off-percent">10%</span>
              </div>
              
            </div>
            <!-- Product item -->
            <div class="grid_column-2-4">
              <div class="home-product-item">
                <div
                  class="home-product-item__img"
                  style="
                    background-image: url(https://cdn0.fahasa.com/media/catalog/product/i/m/image_195509_1_36793.jpg);
                  "
                ></div>
                <h4 class="home-product-item__name">
                  Nhà giả kim (Tái bản 2020)
                </h4>
                <div class="home-product-item__price">
                  <span class="home-product-item__price-old">60.000đ</span>
                  <span class="home-product-item__price-new">54.000đ</span>
                </div>
                <div class="home-product-item__action">
                  <span class="home-product-item__rating">
                    <i class="star-golden fas fa-star"></i>
                    <i class="star-golden fas fa-star"></i>
                    <i class="star-golden fas fa-star"></i>
                    <i class="star-golden fas fa-star"></i>
                    <i class="fas fa-star"></i>
                  </span>
                  <span class="home-product-item__rating-num">(100)</span>
                </div>
                <span class="home-product-item__sale-off-percent">10%</span>
              </div>
              
            </div>
            <!-- Product item -->
            <div class="grid_column-2-4">
              <div class="home-product-item">
                <div
                  class="home-product-item__img"
                  style="
                    background-image: url(https://cdn0.fahasa.com/media/catalog/product/i/m/image_195509_1_36793.jpg);
                  "
                ></div>
                <h4 class="home-product-item__name">
                  Nhà giả kim (Tái bản 2020)
                </h4>
                <div class="home-product-item__price">
                  <span class="home-product-item__price-old">60.000đ</span>
                  <span class="home-product-item__price-new">54.000đ</span>
                </div>
                <div class="home-product-item__action">
                  <span class="home-product-item__rating">
                    <i class="star-golden fas fa-star"></i>
                    <i class="star-golden fas fa-star"></i>
                    <i class="star-golden fas fa-star"></i>
                    <i class="star-golden fas fa-star"></i>
                    <i class="fas fa-star"></i>
                  </span>
                  <span class="home-product-item__rating-num">(100)</span>
                </div>
                <span class="home-product-item__sale-off-percent">10%</span>
              </div>
              
            </div>
            <!-- Product item -->
            <div class="grid_column-2-4">
              <div class="home-product-item">
                <div
                  class="home-product-item__img"
                  style="
                    background-image: url(https://cdn0.fahasa.com/media/catalog/product/i/m/image_195509_1_36793.jpg);
                  "
                ></div>
                <h4 class="home-product-item__name">
                  Nhà giả kim (Tái bản 2020)
                </h4>
                <div class="home-product-item__price">
                  <span class="home-product-item__price-old">60.000đ</span>
                  <span class="home-product-item__price-new">54.000đ</span>
                </div>
                <div class="home-product-item__action">
                  <span class="home-product-item__rating">
                    <i class="star-golden fas fa-star"></i>
                    <i class="star-golden fas fa-star"></i>
                    <i class="star-golden fas fa-star"></i>
                    <i class="star-golden fas fa-star"></i>
                    <i class="fas fa-star"></i>
                  </span>
                  <span class="home-product-item__rating-num">(100)</span>
                </div>
                <span class="home-product-item__sale-off-percent">10%</span>
              </div>
              
            </div>
            
          </div>
          <div class="grid_row">
            <!-- Product item -->
            <div class="grid_column-2-4">
              <div class="home-product-item">
                <div
                  class="home-product-item__img"
                  style="
                    background-image: url(https://cdn0.fahasa.com/media/catalog/product/i/m/image_195509_1_36793.jpg);
                  "
                ></div>
                <h4 class="home-product-item__name">
                  Nhà giả kim (Tái bản 2020)
                </h4>
                <div class="home-product-item__price">
                  <span class="home-product-item__price-old">60.000đ</span>
                  <span class="home-product-item__price-new">54.000đ</span>
                </div>
                <div class="home-product-item__action">
                  <span class="home-product-item__rating">
                    <i class="star-golden fas fa-star"></i>
                    <i class="star-golden fas fa-star"></i>
                    <i class="star-golden fas fa-star"></i>
                    <i class="star-golden fas fa-star"></i>
                    <i class="fas fa-star"></i>
                  </span>
                  <span class="home-product-item__rating-num">(100)</span>
                </div>
                <span class="home-product-item__sale-off-percent">10%</span>
              </div>
              
            </div>
            <!-- Product item -->
            <div class="grid_column-2-4">
              <div class="home-product-item">
                <div
                  class="home-product-item__img"
                  style="
                    background-image: url(https://cdn0.fahasa.com/media/catalog/product/i/m/image_195509_1_36793.jpg);
                  "
                ></div>
                <h4 class="home-product-item__name">
                  Nhà giả kim (Tái bản 2020)
                </h4>
                <div class="home-product-item__price">
                  <span class="home-product-item__price-old">60.000đ</span>
                  <span class="home-product-item__price-new">54.000đ</span>
                </div>
                <div class="home-product-item__action">
                  <span class="home-product-item__rating">
                    <i class="star-golden fas fa-star"></i>
                    <i class="star-golden fas fa-star"></i>
                    <i class="star-golden fas fa-star"></i>
                    <i class="star-golden fas fa-star"></i>
                    <i class="fas fa-star"></i>
                  </span>
                  <span class="home-product-item__rating-num">(100)</span>
                </div>
                <span class="home-product-item__sale-off-percent">10%</span>
              </div>
              
            </div>
            <!-- Product item -->
            <div class="grid_column-2-4">
              <div class="home-product-item">
                <div
                  class="home-product-item__img"
                  style="
                    background-image: url(https://cdn0.fahasa.com/media/catalog/product/i/m/image_195509_1_36793.jpg);
                  "
                ></div>
                <h4 class="home-product-item__name">
                  Nhà giả kim (Tái bản 2020)
                </h4>
                <div class="home-product-item__price">
                  <span class="home-product-item__price-old">60.000đ</span>
                  <span class="home-product-item__price-new">54.000đ</span>
                </div>
                <div class="home-product-item__action">
                  <span class="home-product-item__rating">
                    <i class="star-golden fas fa-star"></i>
                    <i class="star-golden fas fa-star"></i>
                    <i class="star-golden fas fa-star"></i>
                    <i class="star-golden fas fa-star"></i>
                    <i class="fas fa-star"></i>
                  </span>
                  <span class="home-product-item__rating-num">(100)</span>
                </div>
                <span class="home-product-item__sale-off-percent">10%</span>
              </div>
              
            </div>
            <!-- Product item -->
            <div class="grid_column-2-4">
              <div class="home-product-item">
                <div
                  class="home-product-item__img"
                  style="
                    background-image: url(https://cdn0.fahasa.com/media/catalog/product/i/m/image_195509_1_36793.jpg);
                  "
                ></div>
                <h4 class="home-product-item__name">
                  Nhà giả kim (Tái bản 2020)
                </h4>
                <div class="home-product-item__price">
                  <span class="home-product-item__price-old">60.000đ</span>
                  <span class="home-product-item__price-new">54.000đ</span>
                </div>
                <div class="home-product-item__action">
                  <span class="home-product-item__rating">
                    <i class="star-golden fas fa-star"></i>
                    <i class="star-golden fas fa-star"></i>
                    <i class="star-golden fas fa-star"></i>
                    <i class="star-golden fas fa-star"></i>
                    <i class="fas fa-star"></i>
                  </span>
                  <span class="home-product-item__rating-num">(100)</span>
                </div>
                <span class="home-product-item__sale-off-percent">10%</span>
              </div>
              
            </div>
            <!-- Product item -->
            <div class="grid_column-2-4">
              <div class="home-product-item">
                <div
                  class="home-product-item__img"
                  style="
                    background-image: url(https://cdn0.fahasa.com/media/catalog/product/i/m/image_195509_1_36793.jpg);
                  "
                ></div>
                <h4 class="home-product-item__name">
                  Nhà giả kim (Tái bản 2020)
                </h4>
                <div class="home-product-item__price">
                  <span class="home-product-item__price-old">60.000đ</span>
                  <span class="home-product-item__price-new">54.000đ</span>
                </div>
                <div class="home-product-item__action">
                  <span class="home-product-item__rating">
                    <i class="star-golden fas fa-star"></i>
                    <i class="star-golden fas fa-star"></i>
                    <i class="star-golden fas fa-star"></i>
                    <i class="star-golden fas fa-star"></i>
                    <i class="fas fa-star"></i>
                  </span>
                  <span class="home-product-item__rating-num">(100)</span>
                </div>
                <span class="home-product-item__sale-off-percent">10%</span>
              </div>
              
            </div>
            
          </div>
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