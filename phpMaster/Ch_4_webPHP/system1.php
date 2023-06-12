<?php
    header('Content-Type: text/html; charset=EUC-KR');
    $files = system("dir");
    print "<br>";
    print $files;
?>