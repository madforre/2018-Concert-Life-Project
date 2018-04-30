<?php 
	@session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>글 수정 로그인</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/trade_update.css">
</head>
<body>
    <div class="update_login">
    <?php
    include "dbConnect.php";
        
    $id = $_GET['id'];
    $query = "SELECT * FROM $tableName2 where id=$id ";
        
    $result=$conn->query($query);
    if ($result = $conn->query($query)){
        while($row=$result->fetch_assoc()){ //테이블의 data를 get..
        ?>
        <form action="trade_updateOk.php" method="post">
            <ul>
            <li><h3>게시글 수정 비밀번호 확인</h3></li>
            <li>아이디:<?=$row['name']?> <input type="hidden" name="name" value="<?=$row['name']?>"> </li>
            <li><input type="password" class="pass" name="pass" placeholder="비밀번호를 입력해주세요."></li>
            <li><input type="submit" class="submit" value="확인"></li>
        </ul>
        </form>
        <?php
        } // end While

            $result->free();
    }
    //데이터베이스와의 연결을 끝는다.
    $conn->close();
    ?>
   </div>
</body>
</html>
   