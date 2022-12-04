<?php
    include('../../config.php');

function checkValid($name, $email, $pass, $cpass, $conn){
    $mess="";
    do{
        if(strlen($name) <= 2 ||strlen($name) >= 50 ){
            $mess = "Hãy điền tên của bạn.";
            break;
        }
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $mess = "Email không hợp lệ.";
            break;
        }
        if(!($pass===$cpass)){
            $mess ="Các mật khẩu đã nhập không khớp. Hãy thử lại.";
            break;
        }
        if(mysqli_num_rows(mysqli_query($conn, "SELECT * FROM users WHERE email='$email'")) > 0){
            $mess ="Email đã được đăng kí";
            break;
        }
    
    }while(false);

    return $mess;
}

function sendmail_Verify($name, $email, $code, $mail){
        //Server settings
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'kingharemtad@gmail.com';                     //SMTP username
        $mail->Password   = 'tdtlkingharem';                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        $mail->setFrom('kingharemtad@gmail.com');
        $mail->addAddress($email);

        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'no reply';
        $mail->Body    = 'Here is the verification link <b><a href="http://http://localhost/BTL/src/LoginAndSignUp/test.php?verification='.$code.'">Click here.</a></b>';

        $mail->send();
        echo 'Message has been sent';

}
?>