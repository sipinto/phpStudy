<?php // private 접근 제어자의 사용 예시
    class Member {
        private $name;

        public function getName(){
            return $this->name;
        }
    }

    $mem = new Member();

    $mem->name = "홍길동"; // access error occur
    echo "이름 : ".$this->getName();
?>