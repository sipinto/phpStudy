<?php 
    $name = $_POST["name"];
    $tel = $_POST["tel"];
    $address = $_POST["address"];

    $servername = "localhost";
    $username = "user";
    $passwd = "12345";
    $dbname = "sample";

    $conn = mysqli_connect($servername, $username, $passwd, $dbname);

    $sql = "insert into parent (name, tel, address) values('$name','$tel','$address');";
    $result = mysqli_query($conn, $sql);

    if($result){
        echo "parent 테이블에 데이터 삽입!";
    } else {
        echo "데이터 삽입 실패: ".mysqli_error($conn);
    }

    mysqli_close($conn);
?>