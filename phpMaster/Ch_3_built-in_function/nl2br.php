<?php
    $string = "PHP의 함수는
    정말 편리
    합니당.";
    print $string."<br><hr>";
    $result = nl2br($string);
    print $result;
?>