<?php 
    $servername = "localhost";
    $username = "user";
    $passwd = "12345";
    $dbname = "sample";

    $conn = mysqli_connect($servername, $username, $passwd, $dbname);

    $sql = "select * from parent;";

    $result = mysqli_query($conn, $sql);

    while($row = mysqli_fetch_assoc($result)){
        echo "이름: ".$row["name"]."<br>";
        echo "전화번호: ".$row["tel"]."<br>";
        echo "주소: ".$row["address"]."<br>";
        echo "--------------------------------------------<br>";
    }

    mysqli_close($conn);
?>