<?php // public 접근 제어자의 사용 예시
    class Member {
        public $name;

        public function getName() {
            return $this->name;
        }
    }

    $mem = new Member();

    $mem->name = "홍길동";
    echo "이름 : ".$mem->getName();
?>