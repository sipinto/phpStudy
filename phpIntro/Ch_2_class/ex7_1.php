<?php // 클래스와 객체의 사용 예
    class Person {
        public $name;
        public $age;
        public function intro() {
            echo "이름 : ".$this->name.", 나이 : ".$this->age;
        }
    }

    $hong = new Person();

    $hong->name = "홍길동";

    $hong->age = 20;

    $hong->intro();

?>