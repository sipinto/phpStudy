<?php

$number = "12345";
if(preg_match("/[0-9]+/",$number)){
    print "숫자 입니당";
} else {
    print "숫자 이외의 문자입니다.";
}
?>