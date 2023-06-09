<?php
    $myAge = 19;
    check_adult($myAge);
    function check_adult($age){
        $adult_age = 20;
        $adult_check = ($adult_age <= $age)?"어른":"아이";
        print $adult_check."입니다";
    }
?>