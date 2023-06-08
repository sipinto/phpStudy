<?php
    class Customer {
        public $name;
        public $address;
        private $phone;

        public function __construct($name, $address) {
            $this->name = $name;
            $this->address = $address;
        }
        public function setPhone($phone) {
            $this->phone = $phone;
        }
        public function getPhone() {
            return $this->phone;
        }
    }

    $obj = new Customer("김민재", "전주");
    $obj->setPhone("010-4559-9480");

    echo "이름 : ".$obj->name;
    echo "주소 : ".$obj->address;
    echo "전화번호 : ".$obj->getPhone();

?>