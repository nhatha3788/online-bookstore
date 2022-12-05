<?php
session_start();
echo "THIS IS HOME BOISSSSSSSS";

if(isset($_SESSION['customer_id'])){
    echo $_SESSION['customer_id'];
}

echo "<br>"."<a href='../controller/logout_controller.php'>Log out</a>";
?>