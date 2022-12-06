<?php
  session_start();
  include('../../model/checkLogin_model.php');
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
   
  <script src="https://kit.fontawesome.com/9d371022aa.js" crossorigin="anonymous"></script>
  <title>Home</title>
</head>
<body>
  <?php
    include '../components/header.php';
  ?>
  <?php
    include '../components/footer.php';
  ?>
</body>
</html>