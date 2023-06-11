<?php
    session_start();
    $count = 1;
    if(isset($_SESSION["count"])){
        $count = $_SESSION["count"];
        $count ++;
    }
    $_SESSION["count"] = $count;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>세션 변수 테스트</title>
</head>
<body>
<?php
    if($count ==1){
        ?>
        첫 방문입니다. <br>
        <br>
        세션 변수에 데이터가 없습니다.<br>
        페이지를 새로고침 하세요.<br>
<?php
    } else {
        ?>
        당신의 방문은 <?=$count?> 번째 입니다.<br>
        <?php
    }
?>
</body>
</html>