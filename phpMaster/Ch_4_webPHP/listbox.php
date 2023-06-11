<!DOCTYPE html>
<html>
<head>
    <title>PHP 테스트</title>
</head>
<body>
<?php   
    if(isset($_POST["hobby"])){
        print "저의 취미는 아래와 같습니다.";
        foreach($_POST["hobby"] as $hobby){
            print $hobby;
            print "<br>";
        }
    } else {
        print "저의 취미는 없어용";
    }
?>
</body>
</html>