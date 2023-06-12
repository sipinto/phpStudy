<html>
<head>
    <title>메소드 실행 테스트</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>
<?php
    $newUser = new User();
    $newUser->print_hello();
    class User {
        public $name = '쨜수';
        public function print_hello(){
            print $this->name;
            print "님 안녕!";
        }
    }
?>
</body>
</html>