<?php
    $sales = array("TV2" => "1000", "TV1" => "500", "RADIO1" => "800");
    ksort($sales);
    print "<pre>";
    print_r($sales);
    print "</pre>";
?>