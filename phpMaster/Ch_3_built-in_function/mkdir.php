<?php
    $dirname = "temp";
    if(!is_dir($dirname) && mkdir($dirname)){
        print $dirname."생성 완료!";
    } else {
        print $dirname."는 만들 수 없습니다.";
    }
?>