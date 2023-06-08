<?php
    $servername = "localhost";
    $username = "user";
    $passwd = "12345";
    $dbname = "sample";

    $conn = mysqli_connect($servername, $username, $passwd, $dbname);

    $sql = "select name, tel, address from parent where name='기묘선';";

    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);

    echo $row["name"]."의 전화번호는 ".$row["tel"]." 입니당."."<br>";

    mysqli_close($conn);
?>