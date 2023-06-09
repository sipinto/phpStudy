<?php
    $data = 5;
    function scope_test(){
        $GLOBALS['data'] += 1;
        print $GLOBALS['data'];
        print "<br>";
    }
    print $data;
    print "<br>";
    scope_test();
    print $data;
    print "<br>";

?>