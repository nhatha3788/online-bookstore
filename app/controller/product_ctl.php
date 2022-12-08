<?php
        include('../../config.php');
        include('../../model/ctmAccount_model.php');
        
        $db_book="SELECT * FROM `book`";
        $db_book_run = mysqli_query($conn,$db_book);
        if(!$db_book_run){
            header('location: ../LoginAndSignup/home.php');
            exit(0);
        }

        if(isset($_GET['book_id'])){
            $book_id = $_GET['book_id'];
            $book="SELECT * FROM `book` WHERE book_id=$book_id LIMIT 1";
            $book_run = mysqli_query($conn,$book);
            if($db_book_run){
                $book_info = mysqli_fetch_array($book_run);
            }else{
                header('location: ../LoginAndSignup/home.php');
                exit(0);
            }
            // GET COMMENT
            $cmt="SELECT * FROM `rate` WHERE book_id=$book_id";
            $cmt_run = mysqli_query($conn,$cmt);
            $number_of_rate = mysqli_num_rows($cmt_run);
            if(!$cmt_run){
                header('location: ../LoginAndSignup/home.php');
                exit(0);
            }

            $daban = "SELECT * FROM `contain` WHERE book_id=$book_id";
            $daban_run = mysqli_query($conn,$daban);
            $soluong_daban = mysqli_num_rows($daban_run);
            if(!$daban_run){
                header('location: ../LoginAndSignup/home.php');
                exit(0);
            }
        }
?>