<?php
    $file = fopen("hello.txt", "w");

    $str = '졸려 죽겠네 시발';
    fwrite($file, $str);

    echo "파일쓰기 완료";
    fclose($file);

?>