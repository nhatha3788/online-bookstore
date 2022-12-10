<?php
    include('../config.php');
    if(isset($_GET['delete_book']) && isset($_SESSION['customer_id'])){
        $delete_book= "DELETE FROM `cart` WHERE customer_id =$_SESSION[customer_id] AND book_id=$_GET[delete_book]";
        $delete_book_run = mysqli_query($conn,$delete_book);
        if(!$delete_book_run){
            header('location: ../views/LoginAndSignup/home.php');
            exit(0);
        }else{
            header('location: ../views/checkout/cart.php');
            exit(0);
        }
    }
?>