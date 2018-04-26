<?php
header("Content-Type:text/html;charset=UTF-8");
?>


<?php
session_start();
session_destroy();

echo"
    <script>
        alert('로그아웃 성공');
        location.href='index.php';
    </script>
    ";

?>