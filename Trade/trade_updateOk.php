<?php
header("Content-Type:text/html;charset=UTF-8");
?>
<?php
require_once "settingDB.php";
require_once "dbConnect.php";//userid, userpw db에 존재하면 로그인 성공

if(!isset($_POST['pass'])){
    echo "<script>
            alert('접속 오류');
            location.href='trade_update.php';
            </script>
        ";
        exit;
}

$pass = $_POST['pass'];
$name = $_POST['name'];


    if($pass==""||$pass==null){
        echo "<script>
            alert('비밀번호 입력해주세요.');
            history.go(-1);
            </script>
        ";
        exit;
    }

    
    $query="select pass from $tableName2 where name='$name'";

    $result=$conn->query($query);
    

    if ($result){        
            while($row=$result->fetch_assoc()){ //테이블의 data를 get..
                //echo $row['pass'];
                
                if($pass==$row['pass']){
                    
                     echo "<script>
                    alert('로그인 성공');
                    location.href='trade_read_write.php?id=".$row['id']."&no=".$row['no']."';
                    </script>";
                    }else{
                    
                     echo "<script>
                    alert('로그인 실패');
                    history.go(-1);
                    </script>
                ";
             exit;
                }
            } 
            
        }else{            
              echo "<script>
                    alert('DB정보가 없다');
                    history.go(-1);
                    </script>
                ";
             exit;
            
        } // end if

        $result->free();
   
        $conn->close(); //db 연결 해제


?>