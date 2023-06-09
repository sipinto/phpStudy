<?php
    check_member();
    function check_member($username = "guest",$password ="guest"){
        if($username == "guest" && $password == "guest"){
            print "게스트 이랏샤이마세!";
        } else {
            print "회원님 환영시마스!";
        }
    }
?>