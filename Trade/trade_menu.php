<?php
//데이터 베이스 연결하기
include "dbConnect.php";

# LIST 설정
# 1. 한 페이지에 보여질 게시물의 수
$page_size=10;

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
$query = "SELECT * FROM board ORDER BY id DESC LIMIT $no, $page_size ";

$result=$conn->query($query);

$result_count=$conn->query("SELECT count(*) FROM board");
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
    <title>usertalk</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/trade_menu.css">
</head>
<body>
    <div id="wrap">
       <div class="imgShot"></div>
        <div class="title"><h1>고객문의</h1>
        <p>모든 티켓은 날짜 확인후 거래 진행해주세요.</p></div>
        <?php
        if ($result = $conn->query($query)) {
    while($row=$result->fetch_assoc()){

    ?>
        <div class="section">
            <ul>
            <li><a href="trade_read.php?no=<?=$no?>&id=<?=$row['id']?>"><?=$row['id']?></a></li>
            <li><a href="trade_read.php?no=<?=$no?>&id=<?=$row['id']?>"><?=$row['title']?></a></li>
            <li><?=$row['wdate']?></li>
            <li><?=$row['view']?></li>
            <li></li>
        </ul>
        <?php
    } // end While

        $result->free();
    }
    //데이터베이스와의 연결을 끝는다.
    $conn->close();
    ?>
        </div>
          <div class="index">
              <ul>
                  <li class="page">
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
                  </li>
              </ul>
              <div class="write">
                  <a href=trade_write.php>글쓰기</a>
              </div>
          </div>
           
        
    </div>
</body>
</html>