<?php
    session_start();

    $_SESSION["userid"] = "oalswo";
    $_SESSION["username"] = "김민재";

    echo "<script>
        location.href = 'sessionPage.php';
    </script>";
?>