<?php
session_start();
if(!isset($_SESSION['sessionId'])){
    echo "
        <script>
                alert('로그인정보(세션값이)가 없습니다. login.php 페이지로 이동합니다');
                location.href='login.php';  
        </script>
        ";
    exit;    
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/footer.css">    
</head>
<body>
   <div id="wrap">
     <?php include 'header.php';?>
      <?=$_SESSION['sessionId']?>님 환영합니다^^ VIP 페이지입니다.
     <?php include 'footer.php';?> 
   </div>    
</body>
</html>