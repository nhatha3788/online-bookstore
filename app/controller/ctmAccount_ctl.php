<?php
    include('../../config.php');
    include('../../model/ctmAccount_model.php');
    if(isset($_SESSION['customer_id'])){

        $customer_id = $_SESSION['customer_id'];
        $db_account="SELECT * FROM customer WHERE customer_id='$customer_id' LIMIT 1";
        $db_account_run = mysqli_query($conn,$db_account);
        if($db_account_run){
            $rs = mysqli_fetch_array($db_account_run);
            $name =$rs['name'];
            $email =$rs['email'];
            $phone_number=$rs['phone'];
        }else{
            header('location: ../LoginAndSignup/login.php');
            exit(0);
        }


        if(isset($_POST['newPhone-sm'])){
            $phone_number=$_POST['newPhone'];
        }
        if(isset($_POST['newEmail-sm'])){
            $email = $_POST['newEmail'];
        }
        if(isset($_POST['change-value-account'])){
            $phone_number=$_POST['phone'];
            $email = $_POST['email'];
            $mess=checkValid($email,$phone_number);
            if(empty($mess)){
                $update_account = "UPDATE customer SET phone='$phone_number', email='$email' WHERE customer_id='$customer_id' LIMIT 1";
                $update_account_run = mysqli_query($conn, $update_account);
                if($update_account_run){
                    $succMess="Đổi thông tin thành công.";
                }else{
                    $mess="Something went wrong...";
                }
            }
        }

        // ##########################################################
        // ##########################################################
        // ##########################################################
        // for address

        $db_account_add="SELECT * FROM `address` WHERE customer_id='$customer_id'";
        $db_account_add_run = mysqli_query($conn,$db_account_add);
        $temp_add_run = mysqli_query($conn,$db_account_add);
        if(!$db_account_add_run){
            header('location: ../LoginAndSignup/home.php');
            exit(0);
        }else{
            while($row = mysqli_fetch_array($db_account_add_run)){
                if($row['is_default'] == 1){
                    $default_add = $row['address'];
                    break;
                }
            }
        }
        // ##########################################################
        // ##########################################################
        // ##########################################################
        // for address

        $db_account_oder="SELECT * FROM `oder` WHERE customer_id='$customer_id' AND `status`!='0'";
        $db_account_oder_run = mysqli_query($conn,$db_account_oder);
        if(!$db_account_oder_run){
            header('location: ../LoginAndSignup/home.php');
            exit(0);
        }
    }else{
        header('location: ../LoginAndSignup/login.php');
        exit(0);
    }


?>