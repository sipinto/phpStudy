<?php 
    $mode = $_GET["mode"];  // modify: 수정, delete: 삭제
    $num = $_GET["num"];    // 레코드 번호
    $pass = $_GET["pass"];   // 비밀번호

    $con = mysqli_connect("localhost", "user", "12345", "sample");

    $sql = "select pass from freeboard where num=$num";
    $result = mysqli_query($con,$sql);

    $row = mysqli_fetch_assoc($result);

    $db_password - $row["pass"];
    mysqli_close($con);

    // $pass: 입력 비밀번호, $de_password: DB비밀번호
    if($pass == $db_password) {
        if($mode == "modify") {
            $url = "modify_form.php?num=$num";
        } else {
            $url = "delete.php?num=$num";
        }

        echo "<script>
            self.close();
            opener.location.href = '$url';
            </script>";
    } else {
        echo "<script>location.href='password_form.php?num=$num&error=y';</script>";
    }
?>