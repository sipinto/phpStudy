<?php
    session_start();
?>
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
        print $_SESSION["onamae"]."님으로부터의 메세지";
        print "<br><br>";
        print "본문 : <br>";
        print nl2br($_SESSION["honbun"]);
        ?>
        <br>
        <br>
        <a href="form4.html">한번 더 시험해 보려면 여기를 클릭</a>
        <hr>
        <pre>
            <?php print_r($_SESSION);?>
        </pre>
        <hr>
        <?php
    } else if(isset($_POST["back"])){
        ?>
        <font size="4">텍스트 발송 테스트</font>
        <form name="form1" method="post" action="sconfirm.php">
            이름:<br>
            <input type="text" name="onamae" value="<?=$_SESSION["onamae"]?>">
            <br>
            본문 :<br>
            <textarea name="honbun" cols="30" rows="5"><?=$_SESSION["honbun"]?></textarea>
            <br>
            <input type="submit" value="발송">
        </form>
        <?php
    } else {
        ?>
        오류입니다.<br>
        <a href="form4.html">form4.html</a>로 돌아갑니다.
        <?php
    }
?>
</body>
</html>