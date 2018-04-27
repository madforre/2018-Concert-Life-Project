
<?php

	header("Content-Type:text/html;charset=UTF-8");
    @session_start();

    //데이터 베이스 연결하기
    include "dbConnect.php";

# LIST 설정
# 1. 한 페이지에 보여질 게시물의 수
$page_size=4;

# 2. 페이지 나누기에 표시될 페이지의 수(블록당 페이지 수)
$page_list_size = 3;

if(!isset($_GET['no'])){
	$no =0;
}else{
	$no =$_GET['no'];
}
if (!$no || $no < 0)  $no=0;

// 데이터베이스에서 페이지의 첫번째 글($no)부터

// $page_size 만큼의 글을 가져온다.
$query = "SELECT * FROM $tableName3 ORDER BY id DESC LIMIT $no, $page_size ";

$result=$conn->query($query);

$result_count=$conn->query("SELECT count(*) FROM $tableName3");
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
	<title>글목록</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="css/header.css">
	<link rel="stylesheet" href="css/qna.css">
	<link rel="stylesheet" href="css/right_modal.css">
	<link rel="stylesheet" href="css/footer.css">
</head>
<body>

<?php include "header.php" ?>
<?php include "right_modal.php" ?>
			<div class="wrap">
               <div class="imgShot"></div>
                <div class="title"><h1>QnA</h1>
                <p>무엇이든 물어보세요</p></div>

			    <div class="section">

			    	<ul>
			    		<li>글번호</li>
			    		<li>글제목</li>
			    		<li>회원이름</li>
			    		<li class="times">글쓴시간</li>
			    		<li>조회수</li>
			    	</ul>
			    
				
					<?php


					$result=$conn->query($query);

					if($result->num_rows!=0){ //DBFp
							while($row=$result->fetch_assoc()){	//DB에 레코드가 있을 때
								?><ul>
										<li><a href="userread_qna.php?id=<?=$row['id']?>&no=<?=$no?>"><?=$row['id']?></a></li>
										<li><a href="userread_qna.php?id=<?=$row['id']?>&no=<?=$no?>"><?=strip_tags($row['title'], '<b><i>');?></a></li>
										<li><?=$row['name']?></li>
										<li><?=$row['wdate']?></li>
										<li><?=$row['view']?></li>
								</ul>
					<?php
							}
                        $result->free();
					}
					$conn->close();
					?>
				
				</div>
				<div class="index">
				<?php
                            if(isset($_SESSION["sessionId"])){
                echo "<div class='UI'>
				        <a href='write_qna.php'>글작성</a>
				        <a href='write.php''>글수정</a>
				        <a href='write.php'>글삭제</a>
				    </div>";

            }else{
                echo "QnA를 작성하시려면 로그인이 필요합니다.<br> <a href='login.php'>로그인</a> <a href='join.php'>회원가입</a></h1>";
            }
								//스타트 페이지를 구한다. 한페이지에 들어갈 개수에서 현재페이지-1 을 나누어준다. 그리고 곱한뒤 1을 더한다.
                $start_page = floor(($current_page - 1) / $page_list_size) * $page_list_size + 1;

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
                </div>
                </div>
                <script>$('.nav').removeClass('nav').addClass('nav_after');</script>
<?php include "footer.php" ?>
</body>
</html>
