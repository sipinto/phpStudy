<?php 
    $servername = "localhost";
    $username = "user";
    $passwd = "12345";
    $dbname = "sample";

    $conn = mysqli_connect($servername, $username, $passwd, $dbname);

    $sql = "update parent set name='김효선' where num =1;";

    $result = mysqli_query($conn,$sql);

    if($result){
        echo "업데이트 완료!";
    } else {
        echo "업데이트 실패...오류 코드:".mysqli_error($conn);
    }

    mysqli_close($conn);
?>