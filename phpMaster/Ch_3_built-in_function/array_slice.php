<?php
    $data = array("A" ,"B", "C" , "D","E" );
    print implode(',',$data)."<br>";
    $result = array_slice($data,0,4);
    print implode(',',$result)."<br>";
    $result = array_slice($result,-3,1);
    print implode(',',$result)."<br>";
    $result = array_slice($result,3,-1);
    print implode(',',$result)."<br>";
    $result = array_slice($data,2);
    print implode(',',$result)."<br>";
?>