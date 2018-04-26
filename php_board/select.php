<?php
	header("Content-Type:text/html;charset=UTF-8");
?>
<?php 
	@session_start(); 
	if(!isset($_SESSION['sessionId'])){	
		echo "
			<script>
				alert('로그인 후에 이용해주세요');
				location.href='login.php';
			</script>
		";	
		exit;
	}

include "dbConnect.php";

$sessionId=$_SESSION['sessionId'];
$query="select * from joinMember where userId='$sessionId' ; ";
$result=$conn->query($query);

$userId;
$userPw;
$userName;
$userYear;
$userGender;
$userPhone;
if($result->num_rows==0){  //DB에 레코드가 없을 때
		echo "
			<script>
				alert('가져올 data가 없습니다');
				location.href='index.php';
			</script>
		";	
		exit;
}else{
		while($row=$result->fetch_assoc()){	//DB에 레코드가 있을 때
			$userId=$row['userId'];
			$userPw=$row['userPw'];
			$userName=$row['userName'];
			$userYear=$row['userYear'];
			$userGender=$row['userGender'];
			$userPhone=$row['userPhone'];	
		}
}

echo "
			<script>
				alert('회원조회 사이트로 이동합니다.');
				location.href='member.php?userId=$userId&userPw=$userPw&userName=$userName&userYear=$userYear&userGender=$userGender&userPhone=$userPhone';
			</script>
		";	


$conn->close();


?>











