<?php
    session_start();
    $time = date('Y-m-d(H:i:s)', $time);
?>
<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <h3>▶ 등록된 세션의 사용</h3>
        <table width="400" border="1">
            <tr>
                <td>아이디</td>
                <td>이름</td>
                <td>현재시간</td>
            </tr>
            <tr>
                <td><?=$userid ?></td>
                <td><?=$username ?></td>
                <td><?=$time ?></td>
            </tr>
        </table>
    </body>
</html>
