<html>
<head>
    <title>PHP 테스트</title>
</head>
<body>
    <?php
        if($_POST["prefecture"] != ""){
            print "행정구역: ";
            print $_POST["prefecture"];
        } else {
            print "행정구역을 선택하여 주세요.<br>";
        }
    ?>
</body>
</html>