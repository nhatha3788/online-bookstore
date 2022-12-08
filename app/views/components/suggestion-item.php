<?php
        $db_book_suggest="SELECT * FROM `book` LIMIT 0,5";
        $db_book_suggest_run = mysqli_query($conn,$db_book);
        if(!$db_book_suggest_run){
            header('location: ../customer/home.php');
            exit(0);
        }
        $item = 0;
        while($suggest = mysqli_fetch_array($db_book_suggest_run)){
            if($item > 5){
                break;
            }
            $price = number_format($suggest['price'], 0, ',', '.') . "đ";
            echo "
            <div class='col suggested-item'>
            <a href='../product/product-detail.php?book_id=$suggest[book_id]' style='text-decoration: none'>
                <img  src='$suggest[cover_image]' alt='' class='suggested-cover' width='150px' height='150px'>
                <p class='home-product-item__name'>
                    $suggest[name]
                </p>
                <strong class='sub-price'>$price</strong>
            </a>
            </div>
            ";
            $item= $item +1;
        }

                // <div class='progress'>
                //     <div class='progress-bar bg-success' role='progressbar' aria-label='Success example' style='width: 25%' aria-valuenow='25' aria-valuemin='0' aria-valuemax='100'></div>
                // </div> 
?>