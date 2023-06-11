<!DOCTYPE html>
<html>
<head>
    <title>PHP 테스트</title>
</head>
<body>
<?php
    if(isset($_POST["confirm"])){
        ?>
        <?php
        print $_POST["onamae"]."님의 메세지 입니다.<br>";
        print "<br>";
        print "본문 : <br>";
        print nl2br($_POST["honbun"]);
        ?>
        <?php
    } else if(isset($_POST["back"])){
        ?>
        <font size="4">텍스트 발송 테스트</font>
        <form name="form1" method="post" action="confirm2.php">
            이름 :<br>
            <input type="text" name="onamae" value="<?=$_POST["onamae"]?>">
            <br>
            본문 :<br>
                <textarea name="honbun" cols="30" rows="5"><?=$_POST["honbun"]?></textarea>
                <br>
                <input type="submit" value="발송">
                <input type="hidden" name="user_id" value="<?=$_POST["user_id"]?>">                
        </form>
        <?php
    } else {
        ?>
        오류입니다.<br>
        <a href=form4.html>form4.html</a>로 돌아갑니다.
    <?php
    }
?>
</body>
</html>