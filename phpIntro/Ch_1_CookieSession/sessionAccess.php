<?php
    session_start();
    if (isset($_SESSION["username"])) {
        echo $_SESSION["username"]."님 안녕하세요!";
    } else {
        echo "username 세션이 존재하지 않아용";
    }
?>