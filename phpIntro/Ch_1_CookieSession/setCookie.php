<?php 
    setcookie("username","김민재",time()+24*60*60*30);

    echo "쿠키 설정이 완료 되었습니다 ";//.$_COOKIE["username"]."님";
?>