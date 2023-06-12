<?php
    class Test{
        public function TestPublic(){
            print "공개<br>";
        }
        function TestNothing(){
            print "선언없음<br>";
        }
        private function TestPrivate(){
            print "비밀<br>";
        }
    }
    $test = new Test();
    $test->TestPublic();
    $test->TestNothing();
    $test->TestPrivate();
?>