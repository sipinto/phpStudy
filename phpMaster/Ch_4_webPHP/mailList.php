<html>
<head>
    <title>PHP 테스트</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>
메일 수신;:
<?php
    $username = "chairmankmj@gmail.com";
    $password = "als2513658";
    $mailserver = "imap.gmail.com";
    // POP3 서버 
    // $mailbox = @imap_open("{".$mailserver.":110/pop3}INBOX", $username, $password);
    // IMAP 서버
    // $mailbox = @imap_open("{".$mailserver.":143/imap/movalidate-cert}INBOX", $username, $password);
    // Gmail 서버
    // $mailbox = @imap_open("{".$mailserver.":993/imap/movalidate-cert/ssl}INBOX", $username, $password);

    // Gmail 서버 사용
    $mailbox = @imap_open("{".$mailserver.":993/imap/ssl}INBOX", $username, $password);

    if($mailbox){
        $mails = imap_check($mailbox);
        $count = $mails->Nmsgs;
        if($count >= 1){
            ?>
            메인이 <?=$count?>것 있습니다.<br>
            <table border="1">
                <tr>
                    <td>No</td>
                    <td>제목</td>
                    <td>날짜</td>
                    <td>발신자</td>
                    <td>크기</td>
                </tr>
                <?php
                    for($num =1; $num <=$count; $num ++){
                        $head = imap_header($mailbox,$num);
                        $body = imap_body($mailbox,$num,FT_INTERNAL);
                    ?>
                    <tr>
                        <td><?=$num?></td>
                        <td nowrap><?=htmlspecialchars(mb_decode_mimeheader($head->subject))?></td>
                        <td nowrap><?=$head->date?></td>
                        <td nowrap><?=htmlspecialchars(mb_decode_mimeheader($head->fromaddress))?></td>
                        <td nowrap><?=$head->Size?></td>
                    </tr>
                    <?php
                }
                ?>
            </table>
            <?php
        } else {
            ?>
            새로운 메일이 없습니다.<br>
            <?php
        }
        imap_close($mailbox);
    } else {
        ?>
        사용자명 또는 패스워드가 틀립니다.
        <?php
    }
?>
</body>
</html>