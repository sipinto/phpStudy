<?php
    session_start();
    $_SESSION["name"] = "유후";
?>
<!DOCTYPE html>
<html>
<head>
    <title>세션 퀴즈 테스트</title>
</head>
<body>
<?php
    if(isset($_SESSION["name"])){
        ?>
        <p><?=$_SESSION["name"]?>님 안녕하세요?</p>
    <?php 
    } else{
        ?>
        그 딴거 모르겠고 로그인이나 해라.<br>
        <?php
    }
    ?>
</body>