<?php
    setcookie("userid","김민재",time()+24*60*60*30);

    echo "<script>
        location.href = 'cookiePage.php';
    </script>";
?>