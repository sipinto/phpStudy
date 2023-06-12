<html>
<head>
    <title>Trait 테스트</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>
<h1>Trait 테스트</h1>
<?php
    trait SayMorning{
        public function print_morning(){
            print $this->name;
            print "님, 안녕!<br>";
        }
    }
    class User{
        private $name = null;
        public function print_hello(){
            print $this->name;
            print "님, 반가워용!<br>";
        }
    }
    class Guest extends User{
        use SayMorning;
        private $name = "게슽";
        public function print_hello(){
            print $this->name;
            print "님, 하지메 마시떼!";
        }
    }
    $newUser = new Guest();
    $newUser->print_hello();
    $newUser->print_morning();
?>
</body>
</html>