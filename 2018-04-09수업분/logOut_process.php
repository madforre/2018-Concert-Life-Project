<?php

 @session_start(); // @ <-- 오류로 인해 프로그램이 종료되는 것을 방지   
    unset($_SESSION["sessionId"]); // 특정 세션변수만 삭제

//    $_SESSION = array(); // 전체 세션변수 삭제.
        // 여러개의 세션변수들은 배열형태이기 때문에 빈배열로 세션변수 전체를 초기화 시킴으로서
        // 삭제한다.


//    bool session_destory ( void )
//        // 세션에 등록되는 모든 데이터 파괴.
//        // 파괴 성공시 true, 실패시 false 를 반환
//        // 세션을 파괴하는 경우 session_start() 함수가 호출되어야 함
//        
//        session_destory();
//            //세션변수뿐만 아니라 서버에 저장된 데이터까지 제거하는 경우 사용한다.
//    
    echo "<script>
        alert('로그아웃에 성공하였습니다. logOut.php 페이지로 이동합니다.');
        location.href='logOut.php';
        </script>";
    exit;