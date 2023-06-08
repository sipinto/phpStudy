<?php

    $servername = "localhost";
    $username = "user";
    $passwd = "12345";
    $dbname = "sample";

    $conn = mysqli_connect($servername, $username, $passwd, $dbname);

    $sql = "insert into parent (name, tel, address) values('기묘선', '01012345678','경기도 권선구 수원시 온정로 123');";

    $result = mysqli_query($conn, $sql);

    if($result){
        echo "삽입완료!";
    } else {
        echo "데이터 삽입 오류: ".mysqli_error($conn);
    }

    mysqli_close($conn);
?>