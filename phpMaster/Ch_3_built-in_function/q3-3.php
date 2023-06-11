<?php
    $now = time() +(60*60*24);
    $next_day = date('Y년m월d일 H시i분s초',$now);
    print $next_day;
    print "<br>";
    $now = time();
    $next_day = date('Y년m월d일 H시i분s초',$now);
    print $next_day;
?>