<?php
    $to = "xxxx@xxxxxx";
    $subject = "발송 테스트";
    $message = "현재 메일 테스트 중임";
    $add_header = "From: xxxx@xxxxxx\r\nCc: xxxx@xxxxx";
    if(mb_send_mail($to,$subject,$message,$add_header)){
        print "메일 발송 성공";
    } else {
        print "메일 발송 실패";
    }
?>