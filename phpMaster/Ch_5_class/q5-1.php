<?php
    class Board {
        public $subject = "오점";
        public $name = "고철순";
        public $contents = "민초카레";
        public function dispArticle(){
            print "제목".$this->subject."<br>";
            print "작성자".$this->name."<br>";
            print "내용".$this->contents."<br>";
        }   
    }
?>