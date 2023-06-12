<!DOCTYPE html>
<html>
<head>
    <title>PHP 테스트</title>
</head>
<body>
<?php
    $file_dir = 'C:\xampp\htdocs\source\phpStudy\phpMaster\Ch_4_webPHP\\'; // 파일이 이동할 경로 설정
    $file_path = $file_dir.$_FILES["uploadfile"]["name"];
    if(move_uploaded_file($_FILES["uploadfile"]["tmp_name"],$file_path)){
        $img_dir = "Ch_4_webPHP/";
        $img_path = $img_dir.$_FILES["uploadfile"]["name"];
        $size = getimagesize($file_path);
    ?>
    파일 업로드를 완료하였습니다.<br>
    <img src="<?=$img_path?>" <?=$size[3]?>><br>
    <b><?=$_POST["comment"]?></b><br>
    <?php
    } else {
        ?>
        정상적으로 업로드 되지 않았습니다.<br>
    <?php
    }
    ?>
</body>
</html>