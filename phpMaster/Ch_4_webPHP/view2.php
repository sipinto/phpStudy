<!DOCTYPE html>
<html>
<head>
    <title>PHP 테스트</title>
</head>
<body>
<?php
    print $_POST["onamae"]."님의 메세지 입니다.<br>";
    print "<br>";
    print "본문 : <br>";
    print nl2br($_POST["honbun"]);
    print "<br><br>";
?>
<a href="form2.html">돌아갈랭</a>
</body>
</html>