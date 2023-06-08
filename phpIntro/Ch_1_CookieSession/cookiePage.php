<h3>쿠키로 로그인 처리하기</h3>
<?php
    if(!isset($_COOKIE["userid"])) {
        echo "<a href='cookieLogin.php'>로그인</a>";
    } else {
        echo "<a href='cookieLogout.php'>로그아웃</a>";
    }

?>