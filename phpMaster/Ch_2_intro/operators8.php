<?php
    $filelist = `ls -laF`;
    // $filelist - `dir`;
    print "<pre>";
    print $filelist;
    print "</pre>";
?>