<?php
    $member = array("name"=>"고철순","age" => "15", "tall"=>165);
    foreach($member as $key => $value){
        if($key == "name"){
            $title = "이름";
        } else {
            if($key == "age"){
                $title = "연령";
            } else {
                if($key == "tall"){
                    $title = "신장";
                } else {
                    print "처리를 건너뜁니다.<br>";
                    continue;
                }
            }
        }
        print "$title : $value";
        print "<br>";
    }



?>