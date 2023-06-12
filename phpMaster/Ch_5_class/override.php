<html>
<head>
    <title>클래스 오버라이드 테스트</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>
<h1>오버라이드 테스트</h1><br>

<?php
    class User {
        private $name =null;
        public function print_hello(){
            print $this->name;
            print "님, 안녕~?<br>";
        }
    }
    class Guest extends User{
        private $name = "쨜수";       
        public function print_hello(){
            print $this->name;
            print "님도 도우모<br>";
        }
    }
    $newUser = new Guest();
    $newUser->print_hello();
?>
</body>
</html>