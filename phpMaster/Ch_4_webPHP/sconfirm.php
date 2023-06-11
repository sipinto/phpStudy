<?php
    session_start();
    $_SESSION["onamae"] = $_POST["onamae"];
    $_SESSION["honbun"] = $_POST["honbun"];
    if(isset($_POST["user_id"])){
        $_SESSION["user_id"] = $_POST["user_id"];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>PHP 테스트</title>
</head>
<body bgcolor="#FFFFFF" text="#000000">
확인 화면
<form name="form1" method="post" action="sview.php">
    <?php
        print "이름 :";
        print $_POST["onamae"];
        print "<br><br>";
        print "본문 :";
        print nl2br($_POST["honbun"]);
    ?>
    <br>
    <input type="submit" value="확인" name="confirm">
    <input type="submit" value="돌아가기" name="back">  
</form>  
</body>
</html>