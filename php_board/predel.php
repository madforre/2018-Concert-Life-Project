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
<body>
 <div class="write">
    <h1>게시글 쓰기</h1>
        <!-- 입력된 값을 다음 페이지로 넘기기 위해 FORM을 만든다. -->
        <form action=delete.php?id=<?=$_GET['id']?> method=post>
        <table width=300 border=0 cellpadding=2 cellspacing=1
        bgcolor=#777777>
        <tr>
            <td height=20 align=center bgcolor=#999999>
                <font color=white><B>비 밀 번 호 확 인</B></font>
            </td>
        </tr>
        <tr>
            <td align=center >
                비밀번호 : <br>
                <input type=password name=pass size=8>
                <input type=submit value="확 인">
                <input type=button value="취 소" onclick="history.back(-1)">
            </td>
        </tr>
        </table>
     </form>
     </div>
    </body>
    </html>