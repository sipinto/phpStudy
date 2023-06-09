<?php
    $data1 = array("name" => "고철순", "age" => 20);
    $data2 = array("name" => "로영희", "age" => 12);
    $data = $data1 + $data2;
    print "<pre>";
    var_dump($data);
    print "</pre>";
?>