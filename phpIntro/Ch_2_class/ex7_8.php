<?php // Setter / Getter 사용 예시 
    class Member {
        private $name;
        public function setName($name) {
            $this->name=$name;
        }
        public function getName() {
            return $this->name;
        }
    }

    $mem = new Member();
    $mem->setName("김민재");
    echo "이름 : ".$this->getName();

?>
