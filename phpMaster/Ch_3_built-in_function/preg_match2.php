<?php
    $number = "123456";
    if(preg_match("/([0-9][0-9])([0-9]+)/",$number,$matches)){
        print $matches[0];
        print "<br>";
        print $matches[1];
        print "<br>";
        print $matches[2];
    }
?>