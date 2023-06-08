<?php 
    $name = $_POST["name"];
    $tel = $_POST["tel"];
    $address = $_POST["address"];
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h3>POST로 전달받은 데이터 출력하기</h3>
    이름 : <?php echo $name; ?><br>
    전화번호 : <?php echo $tel; ?><br>
    주소 : <?php echo $address; ?><br>
</body>
</html>
<!-- Post방식: 폼 양식에 입력된 데이터를 전달하는 데 사용 -->