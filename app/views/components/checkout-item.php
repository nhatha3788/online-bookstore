<?php
    $book_id = $row['book_id'];
    $quantity = $row['quantity'];
    $db_book= "SELECT * FROM book WHERE book_id='$book_id' LIMIT 1";
    $db_book_run = mysqli_query($conn,$db_book);
    $book_info = mysqli_fetch_array($db_book_run);
    if($book_info['category_id'] == 1){
        $category = "Tiểu thuyết";
    }else if($book_info['category_id'] == 2){
        $category = "Sách kĩ năng";
    }else if($book_info['category_id'] == 3){
        $category = "Thiếu nhi";
    }else{
        $category = "Sách nước ngoài";
    }
?>

<?php

    echo "
        <div class='checkout-item'>
            <div class='image-info'>
                <div>
                    <div class='mui-checkbox'>
                        <input type='checkbox' value=''>
                    </div>
                </div><img src='$book_info[cover_image]' alt=''>
                <div class='item-info'>
                    <div><strong>$book_info[name]</strong></div>
                    <div><strong>Tác giả: </strong>$book_info[author]</div>
                    <div><strong>Thể loại: </strong>$category</div>
                </div>
            </div>
            <div class='price-quantity'>
                <span>Số lượng:</span>
                <input type='number' class='form-control' id='set-quantity' value='$row[quantity]' min='1'>
                <div class='price'> 98.000 đ</div>
            </div>
            <a href=''>Xóa</a>
        </div>
        <div class='mui-divider'></div>
    ";
?>