<?php
//데이터 베이스 연결하기
include "dbConnect.php";

# LIST 설정
# 1. 한 페이지에 보여질 게시물의 수
$page_size=5;

# 2. 페이지 나누기에 표시될 페이지의 수
$page_list_size = 10;

if(!isset($_GET['no'])){
	$no =0;
}else{
	$no =$_GET['no'];
}
if (!$no || $no < 0)  $no=0;

// 데이터베이스에서 페이지의 첫번째 글($no)부터 

// $page_size 만큼의 글을 가져온다.
$query = "SELECT * FROM joinmember2 ORDER BY id DESC LIMIT $no, $page_size ";

$result=$conn->query($query);

$result_count=$conn->query("SELECT count(*) FROM joinmember2");
// 총 게시물 수 를 구한다.

$result_row= mysqli_fetch_array($result_count);

////결과의 첫번째 열이 count(*) 의 결과다.
$total_row = $result_row[0];


//
//# 총 페이지 계산
if ($total_row <= 0) $total_row = 0;
$total_page = ceil($total_row / $page_size);
//
//# 현재 페이지 계산
$current_page = ceil(($no+1)/$page_size);
?>

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
</style>
</head>
<body topmargin=0 leftmargin=0 text=#464646>
<div class="write">
    <h1>게시글 목록</h1>
    <!-- 게시물 리스트를 보이기 위한 테이블 -->
    <table width=580 border=0 cellpadding=2 cellspacing=1
    bgcolor=#777777>
    <!-- 리스트 타이틀 부분 -->
    <tr height=20 bgcolor=#999999>
        <td width=30 align=center>
            번호
        </td>
        <td width=300 align=center>
           제 목
        </td>
        <td width=50 align=center>
            글쓴이
        </td>
        <td width=130 align=center>
            날 짜
        </td>
        <td width=40 align=center>
            조회수
        </td>
    </tr>
    <!-- 리스트 타이틀 끝 -->
    <!-- 리스트 부분 시작 -->
    <?php
        if ($result = $conn->query($query)) {
    while($row=$result->fetch_assoc()){

    ?>
    <!-- 행 시작 -->
    <tr>
        <!-- 번호 -->
        <td height=20 bgcolor=white align=center>
            <a href="read.php?id=<?=$row['id']?>&no=<?=$no?>">
            <?=$row['id']?></a>
        </td>
        <!-- 번호 끝 -->
        <!-- 제목 -->
        <td height=20 bgcolor=white>&nbsp;
            <a href="read.php?id=<?=$row['id']?>&no=<?=$no?>">
            <?=strip_tags($row['title'], '<b><i>');?></a>
        </td>
        <!-- 제목 끝 -->
        <!-- 이름 -->
        <td align=center height=20 bgcolor=white>
            <font color=black>
            <a href="mailto:<?=$row['email']?>"><?=$row['name']?></a>
            </font>
        </td>
        <!-- 이름 끝 -->
        <!-- 날짜 -->
        <td align=center height=20 bgcolor=white>
            <font color=black><?=$row['wdate']?></font>
        </td>
        <!-- 날짜 끝 -->
        <!-- 조회수 -->
        <td align=center height=20 bgcolor=white>
            <font color=black><?=$row['view']?></font>
        </td>
        <!-- 조회수 끝 -->
    </tr>
    <!-- 행 끝 -->
    <?php
    } // end While

        $result->free();
    }
    //데이터베이스와의 연결을 끝는다.
    $conn->close();
    ?>
    </table>
    <!-- 게시물 리스트를 보이기 위한 테이블 끝-->
    <!-- 페이지를 표시하기 위한 테이블 -->
    <table border=0>
    <tr>
        <td width=600 height=20 align=center rowspan=4>
        &nbsp;
    <?php
    $start_page = floor(($current_page - 1) / $page_list_size) 
                    * $page_list_size + 1;

    # 페이지 리스트의 마지막 페이지가 몇 번째 페이지인지 구하는 부분이다.
    $end_page = $start_page + $page_list_size - 1;

    if ($total_page < $end_page) $end_page = $total_page;
    if ($start_page >= $page_list_size) {
        # 이전 페이지 리스트값은 첫 번째 페이지에서 한 페이지 감소하면 된다.
        # $page_size 를 곱해주는 이유는 글번호로 표시하기 위해서이다.

        $prev_list = ($start_page - 2)*$page_size;
        echo "<a href=\"$_SERVER[PHP_SELF]?no=$prev_list\">◀</a>\n";
    }

    # 페이지 리스트를 출력
    for ($i=$start_page;$i <= $end_page;$i++) {
        $page= ($i-1) * $page_size;// 페이지값을 no 값으로 변환.
        if ($no!=$page){ //현재 페이지가 아닐 경우만 링크를 표시
            echo "<a href=\"$_SERVER[PHP_SELF]?no=$page\">";
        }

        echo " $i "; //페이지를 표시

        if ($no!=$page){
            echo "</a>";
        }
    }

    # 다음 페이지 리스트가 필요할때는 총 페이지가 마지막 리스트보다 클 때이다.
    # 리스트를 다 뿌리고도 더 뿌려줄 페이지가 남았을때 다음 버튼이 필요할 것이다.
    if($total_page > $end_page)
    {
        $next_list = $end_page * $page_size;
        echo "<a href=$_SERVER[PHP_SELF]?no=$next_list>▶</a><p>";
    }
    ?>
        </td>
    </tr>
    </table>
<a href=write.php>글쓰기</a>
    </div>
    
</body>
</html>