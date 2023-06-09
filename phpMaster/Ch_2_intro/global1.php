<?php
    $data = 5;
    function scope_test(){
        $data = 1;
        print $data;
        print "<br>";
    }
    print $data;
    print "<br>";
    scope_test();
    print $data;
    print "<br>";
?>