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
  <?php include 'header.php';?>
   <form action="logIn_process.php" method="post">
     <label for="userId">ID : </label><input type="text" name="userId"><br>
     <label for="userPw">PW : <input type="password" name="userPw"><br>
     <input type="submit" value="로그인">
   </form>
  <?php include 'footer.php';?>
    
</body>
</html>