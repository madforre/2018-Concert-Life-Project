<?php
header("Content-Type:text/html;charset=UTF-8");
?>
<?php
@session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>회원 가입</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="css/header.css">
	<link rel="stylesheet" href="css/join.css">
	<link rel="stylesheet" href="css/footer.css">
	<link rel="stylesheet" href="css/right_modal.css">
</head>
<body>
 <div id="wrap">
 	<?php include "header.php";?>
 	<?php include "right_modal.php";?>
	<div class="join">
		<h1 class="title">Join Us</h1>
		<p class="ptxt">회원가입 후 다양한 혜택과 정보를 얻으실 수 있습니다.</p>
		<form action="joinOk.php" method="post">
		<div class="contents">
			<ul>
				<li><input type="text" name="userId" maxlength="12" size="12" placeholder="아이디" ></li>
				<li><input type="password" name="userPw"  maxlength="16" size="16" placeholder="비밀번호"></li>
				<li><input type="password" name="pwCheck" maxlength="16" size="16" placeholder="비밀번호 확인"></li>
				<li><input type="text" name="userName" placeholder="이름 (실명으로 입력해주세요.)"></li>
				<li><input type="text" name="userYear" class='year' placeholder="생년월일" >
					<input type="radio" name="userGender" value='남자' checked>남자
					<input type="radio" name="userGender" value='여자'>여자
				</li>
				<li>
					<select name="userPhone[]" >
						<option value=""selected>핸드폰 앞자리</option>
						<option value="010" >010</option>
						<option value="011">011</option>
						<option value="070">070</option>
					</select>
					<input type="text" name="userPhone[]" class='phone' placeholder="나머지 번호 입력" >

				</li>
				<li>
					<input type="submit" value="가입완료" name="joinForm">

				</li>
			</ul>
			<div class="joinFooter">
			    <ul>
			        <li><a href="login.php">로그인</a></li>
			        <li><a href="index.php">HOME</a></li>
			    </ul>
			</div>
		</div>
		</form>
	</div>
 </div>
  <script src="js/gnb.js"></script>

<script>

$('.header .nav .menu.left>a>img').attr({ src: '/images/QnA2.png'});
$('.nav').removeClass('nav').addClass('nav_after');
</script>

</body>
</html>
