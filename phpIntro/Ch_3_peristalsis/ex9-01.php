<?php
    $servername = "localhost"; //server name
    $username = "user"; // user name
    $password = "12345"; // password
    $dbname = "sample"; // database name 

    // mysql connect
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // connect check 
    if (!$conn) {
        die("연결 오류 : ".mysqli_connect_error());
    }

    echo "MySQL에 성공적으로 연결되었습니다!";
?>