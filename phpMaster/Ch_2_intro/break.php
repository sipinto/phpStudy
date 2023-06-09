<?php
    $member[0] = "춘철순";
    $member[1] = "고영희";
    $member[2] = "금태양";
    $member[3] = "나문희";
    $member[4] = "임진묵";
    $i = 1;
    $limit = 3;
    foreach($member as $key => $value){
        if($i > $limit){
            print "반복을 빠져나옵니다.<br>";
            break;
        }
        print "이름 : $value";
        print "<br>";
        $i ++;
    }
?>