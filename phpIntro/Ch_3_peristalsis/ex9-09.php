<?php 
    $servername = "localhost";
    $username = "user";
    $passwd = "12345";
    $dbname = "sample";

    $conn = mysqli_connect($servername, $username, $passwd, $dbname);

    $sql = "delete from parent where name='이나우';";

    $result = mysqli_query($conn, $sql);

    if($result){
        echo "삭제완료";
    } else {
        echo "삭제 실패:".mysqli_error($conn);
    }

    mysqli_close($conn);
?>