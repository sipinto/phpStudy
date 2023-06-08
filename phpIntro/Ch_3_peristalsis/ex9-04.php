<?php
    $servername = "localhost";
    $username = "user";
    $passwd = "12345";
    $dbname = "sample";

    $conn = mysqli_connect($servername, $username, $passwd, $dbname);

    $sql = "insert into parent (name, tel, address) values ('백유진','01023662398','전주시 덕진구 아이파크');";
    $sql .= "insert into parent (name, tel, address) values ('채수빈','01023671398','천주시 덕진구 주공아파트');";
    $sql .= "insert into parent (name, tel, address) values ('임저아','01016715698','변주시 완산구 딤채아파트');";
    $sql .= "insert into parent (name, tel, address) values ('감유라','01023671398','천주시 인산구 주택');";
    $sql .= "insert into parent (name, tel, address) values ('이나우','01025661794','천주시 덕진구 햔데아파트');";
    
    $result = mysqli_multi_query($conn, $sql);

    if($result){
        echo "데이터 다중 삽입 완료!";
    } else {
        echo "데이터 삽입 오류:".mysqli_error($conn);
    }

    mysqli_close($conn);
?>