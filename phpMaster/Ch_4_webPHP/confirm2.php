<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>PHP 테스트</title>
</head>
<body bgcolor="#FFFFFF" text="#000000">
확인 화면
<form name="form1" method="post" action="view4.php">
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
    <input type="hidden" name="onamae" value="<?=$_POST["onamae"]?>">
    <input type="hidden" name="honbun" value="<?=$_POST["honbun"]?>">
    <input type="hidden" name="user_id" value="<?=$_POST["user_id"]?>">
</form>  
</body>
</html>