<?php

if(!$_SESSION['sessionId']){
	echo "
		<script>
			alert('로그인 후 이용해주세요');
			location.href='login.php';
		</script>
	";
	exit;
}
?>