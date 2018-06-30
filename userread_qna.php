<?php
	//데이터 베이스 연결하기
	include "dbConnect.php";
    @session_start();
    
	$id = $_GET['id'];
	$no = $_GET['no'];
 
    //조회수 업데이트
    $query= "UPDATE $tableName3 SET view=view+1 WHERE id=$id";
                  
    $conn->query($query); 
    
    
	// 글 정보 가져오기
    $query = "SELECT * FROM $tableName3 where id=$id ";

    $result=$conn->query($query);

    $row=$conn->query("SELECT count(*) FROM $tableName3");

    
if ($result = $conn->query($query)) {
    while($row=$result->fetch_assoc()){
        
        $_SESSION['title']=$row['title'];
        $_SESSION['name']=$row['name'];
        $_SESSION['wdate']=$row['wdate'];
        $_SESSION['view']=$row['view'];
        $_SESSION['content']=$row['content'];
                                      
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>게시글 작성</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/userread.css">
</head>
<body>
   <div class="write_bg">
    <div class="write">
       <form action="writeOk.php">
        <h3 class="logo">글제목 : <?=$row['title']?></h3>
        <ul>
            <li class="s1">글쓴이 : <?=$row['name']?></li>
            <li class="s1">작성시간 : <?=$row['wdate']?></li>
            <li class="s1">조회수 : <?=$row['view']?></li>
            <li class="s4">
                <h3>
                    글 내용
                </h3>
            </li>
            <li class="s2"><textarea name="content" id="" cols="30" rows="10" readonly><?=$row['content']?></textarea></li>
            <li class="s3">
               <input type="hidden" value="글작성">
                <input type="hidden" class="reset" value="다시작성">
                <?php 
                    if(isset($_SESSION['sessionId'])){
                        echo "<input type='button' class='update' value='글수정'> <input type='button' class='delete' value='글삭제'>";
                
                    }
                ?>
                <input type="button" class="goback" value="되돌아가기">
            </li>
        </ul>
        </form>
    </div>
    </div>
    <script src="js/usertalk.js"></script>
</body>
</html>
    <?php
    } // end While

        $result->free();
    }

    ?>
    
     <?php
        // 현재 글보다 id 값이 큰 글 중 가장 작은 것을 가져온다. 
        // 즉 바로 이전 글
       

         $query= "SELECT id FROM $tableName3 WHERE id > $id LIMIT 1 ";

         $result=$conn->query($query);


           $result=$conn->query($query);

            if ($result) {
                while($prev_id=$result->fetch_assoc()){   

                  if ($prev_id['id']) // 이전 글이 있을 경우
                    {
                        echo "<a href='read.php?id=$prev_id[id]'>
                        <font color=white>[이전]</font></a>";
                    }
                    else
                    {
                        echo "[이전]";
                    }
                }
            }

                   
         $query= "SELECT id FROM $tableName3 WHERE id < $id  ORDER BY id DESC LIMIT 1 ";

         $result=$conn->query($query); 

        if ($result) {
                while($next_id=$result->fetch_assoc()){   
                    if ($next_id['id']) // 이전 글이 있을 경우
                  {
                  echo "<a href='read.php?id=$next_id[id]'>
                            <font color=white>[다음]</font></a>";
                     }
                        else
                        {
                            echo "[다음]";
                        }
                                }
            }

    ?>
    
    <?php


//데이터베이스와의 연결을 끊는다.
$conn->close();
?>
