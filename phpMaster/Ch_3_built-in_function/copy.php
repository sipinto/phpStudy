<?php
    if(copy("test.txt","test.bak")){
        print "복사 성공!";
    } else {
        print "복사 실패!";
    }
?>