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

<body >
 <div class="write">
    <h1>게시글 쓰기</h1>
     <!-- 입력된 값을 다음 페이지로 넘기기 위해 FORM을 만든다. -->
    <form action='insert.php' method='post'>
    <table width=580 border=0 cellpadding=2 cellspacing=1 bgcolor=#777777>
        <tr>
            <td height=20 align=center bgcolor=#999999>
            <font color=white><B>글 쓰 기</B></font>
            </td>
        </tr>
        <!-- 입력 부분 -->
        <tr>
            <td bgcolor=white>
                <table>
                    <tr>
                        <td width=60 align=left >이름</td>
                        <td align=left >
                            <input type=text name='name' size=20 maxlength=10>
                        </td>
                    </tr>
                    <tr>
                        <td width=60 align=left >이메일</td>
                        <td align=left >
                            <input type=text name=email size=20 maxlength=25>
                        </td>
                    </tr>
                    <tr>
                        <td width=60 align=left >비밀번호</td>
                        <td align=left >
                            <input type=password name=pass size=8 maxlength=8> 
                            (수정,삭제시 반드시 필요)
                        </td>
                    </tr>
                    <tr>
                        <td width=60 align=left >제 목</td>
                        <td align=left >
                            <input type=text name=title size=60 maxlength=35>
                        </td>
                    </tr>
                    <tr>
                        <td width=60 align=left >내용</td>
                        <td align=left >
                            <TEXTAREA name=content cols=65 rows=15></TEXTAREA>
                        </td>
                    </tr>
                    <tr>
                        <td colspan=10 align=center>
                            <input type=submit value="글 저장하기">
                            <input type=reset value="다시 쓰기">
                            &nbsp;&nbsp;
                            <input type=button value="되돌아가기" 
                            onclick="history.back(-1)">
                        </td>
                    </tr>
                   </table>
            </td>
        </tr>
    <!-- 입력 부분 끝 -->
    </table>


    </form>
     
 </div>

</body>
</html>