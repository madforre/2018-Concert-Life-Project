<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
<style>
*{
        margin: 0;padding: 0
    }
    html,body{
        width: 100%;height: 100%;
    }
<!--
td { font-size : 9pt; }
A:link { font : 9pt; color : black; text-decoration : none; 
font-family	: 굴림; font-size : 9pt; }
A:visited { text-decoration : none; color : black; font-size : 9pt; }
A:hover { text-decoration : underline; color : black; 
font-size : 9pt; }
-->
    .write{
        margin: 0 auto;
        width: 580px;
    }
    .contents{
        height: 100px;
        overflow: scroll;
        text-align: left;
        position: relative;
    }
    .contents pre{
        position: absolute;
        top: 0;
    }
</style>
</head>

<body topmargin=0 leftmargin=0 text=#464646>

<?php
	//데이터 베이스 연결하기
	include "dbConnect.php";

	$id = $_GET['id'];
	$no = $_GET['no'];
    
    
	// 글 정보 가져오기
    $query = "SELECT * FROM php_board where id=$id ";

$result=$conn->query($query);

$row=$conn->query("SELECT count(*) FROM php_board");
    
if ($result = $conn->query($query)) {
    while($row=$result->fetch_assoc()){

?>
<div class="write">
   <h1>게시글 읽기</h1>
    <table width=580 border=0 cellpadding=2 cellspacing=1
    bgcolor=#777777>
    <tr>
        <td height=20 colspan=4 align=center bgcolor=#999999>
            <font color=white><B><?=$row['title']?></B></font>
        </td>
    </tr>
    <tr>
        <td width=50 height=20 align=center bgcolor=#EEEEEE>글쓴이</td>
        <td	width=240 bgcolor=white><?=$row['name']?></td>
        <td width=50 height=20 align=center bgcolor=#EEEEEE>이메일</td>
        <td	width=240 bgcolor=white><?=$row['email']?></td>
    </tr>
    <tr>
        <td width=50 height=20 align=center bgcolor=#EEEEEE>
        날&nbsp;&nbsp;&nbsp;짜</td><td width=240
        bgcolor=white><?=$row['wdate']?></td>
        <td width=50 height=20 align=center bgcolor=#EEEEEE>조회수</td>
        <td	width=240 bgcolor=white><?=$row['view']?></td>
    </tr>
    <tr>
        <td bgcolor=white colspan=4 class='contents'>
        <pre><?=$row['content']?></pre>
        </td>
    </tr>
    <?php
    } // end While

        $result->free();
    }

    ?>
    <!-- 기타 버튼 들 -->
    <tr>
        <td colspan=4 bgcolor=#999999>
        <table width=100%>
            <tr>
                <td width=200 align=left height=20>
                    <a href="list.php?no=<?=$no?>"> [목록보기]</a>
                    <a href="write.php"><font color=white>
                    [글쓰기]</font></a>
                    <a href="edit.php?id=<?=$id?>&no=<?=$no?>">
                    [수정]</a>
                    <a href="predel.php?id=<?=$id?>">
                    <font color=white>[삭제]</font></a>
                </td>
                <!-- 기타 버튼 끝 -->
                <!-- 이전 다음 표시 -->
                <td align=right>
    <?php
        // 현재 글보다 id 값이 큰 글 중 가장 작은 것을 가져온다. 
        // 즉 바로 이전 글
       

         $query= "SELECT id FROM php_board WHERE id > $id LIMIT 1 ";

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

                   
         $query= "SELECT id FROM php_board WHERE id < $id  ORDER BY id DESC LIMIT 1 ";

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
                </td>
            </tr>
            </table>
            </td>
        </tr>
    </table>
    </div>
</body>
</html>
<?php
	 //조회수 업데이트
     $query= "UPDATE php_board SET view=view+1 WHERE id=$id";
                  
     $conn->query($query); 

//데이터베이스와의 연결을 끝는다.
$conn->close();
?>