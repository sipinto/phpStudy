<!DOCTYPE html>
<html>
<head>
    <title>텍스트 송신 테스트</title>
    
</head>
<body>
<?php
    if(isset($_POST["gender"]) && ($_POST["gender"] == "남" || $_POST["gender"] =="여")){
        print "성별:<br>";
        print $_POST["gender"];
    } else {
        print "성별을 선택하세요.";
    }
?>
</body>
</html>