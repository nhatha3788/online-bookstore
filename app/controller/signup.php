<?php
    //Import PHPMailer classes into the global namespace
    //These must be at the top of your script, not inside a function
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    include('../../config.php');
    include('../../model/signup.php');

    //Load Composer's autoloader
    require '../../vendor/autoload.php';

    $name ="";
    $mail ="";
    $succMess="";
    if(isset($_POST['signup']))
    {
        $name = mysqli_real_escape_string($conn, $_POST['name']);
        $email = mysqli_real_escape_string($conn, $_POST['mail']);
        $pass = mysqli_real_escape_string($conn, md5($_POST['pass']));
        $cpass = mysqli_real_escape_string($conn, md5($_POST['cpass']));
        $code = mysqli_real_escape_string($conn, md5(rand()));
        $mess = checkValid($name, $email, $pass, $cpass, $conn);
        if(empty($mess)){
            $sql = "INSERT INTO users(name,email,pass,code) VALUES ('$name','$email','$pass','$code')";
            $result = mysqli_query($conn,$sql);
            if($result){
                // $mail = new PHPMailer(true);
                // sendmail_Verify($name, $email, $code, $mail);
                $succMess="Đăng kí thành công. Kiểm tra email để xác thực.";
            }
        }
    
    }
?>