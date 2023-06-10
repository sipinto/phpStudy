<?php
    $data = array("사과","귤","감");
    $apple = array_shift($data);
    print "<pre>";
    print_r($data);
    print "</pre>";
    print $apple;
    $data = array_shift($data);
    print "<pre>";
    print_r($data);
    print "</pre>";
?>