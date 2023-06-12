<?php
    $user = new User();
    class User {
        public $name = '찰쑤';
        public function print_hello(){
            print $this->name;
            print "님 안녕!<br>";
        }
    }
?>