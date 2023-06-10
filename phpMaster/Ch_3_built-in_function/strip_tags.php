<?php
    $string = '<a href="http://www.namgarambooks.co.kr/">남가람북스</a><hr><br>';
    $result = strip_tags($string,ENT_QUOTES);
    print $result;
?>