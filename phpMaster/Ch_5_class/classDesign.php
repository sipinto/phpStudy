<?php
    class Member{
        private $name = null;
        private $password = null;
        private $address = null;
        
        public function enroll($name,$password,$address){
            if($name != null && $password != null && $address != null){
                $this->name=$name;
                $this->password=$password;
                $this->address=$address;
                print "회원등록이 완료되었습니당";
            } else {
                print "정보를 바르게 입력해 주세요.";
            }
        }
        public function login($name,$password){
            if($this->name == $name && $this->password == $password){
                print "정상적으로 로그인 되었습니다!";
            } else {
                print "정보를 다시 입력해 주세요.";
            }
        }
    }


?>