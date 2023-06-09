<?php
    $PrefectureList = array("서울특별시", "부산광역시",
    "대구광역시","인천광역시","광주광역시","대전광역시","울산광역시",
    "경기도","강원도","충청북도","충청남도","전라북도");
    for($i=0;$i<=count($PrefectureList)-1;$i++){
        print $PrefectureList[$i];
        print "<br>";
    }
?>