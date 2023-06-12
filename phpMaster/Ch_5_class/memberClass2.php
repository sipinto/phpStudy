<?php
    class Member{
        private $id;
        private $lastName;
        private $firstName;
        private $email;
        private $password;
        public function getId(){
            return $this->id;
        }
        public function setId($id){
            $this->id = $id;
        }
        public function getLastName(){
            return $this->lastName;
        }
        public function setLastName($lastName){
            $this->lastName = $lastName;
        }
        public function getFirstName(){
            return $this->firstName;
        }
        public function setFirstName($firstName){
            $this->firstName = $firstName;
        }
        public function getEmail(){
            return $this->email;
        }
        public function setEmail($email){
            $this->email = $email;
        }
        public function getPassword(){
            return $this->password;
        }
        public function setPassword($password){
            $this->password = $password;
        }
        public function regist(){

        }
        public function registMail(){

        }
        public function edit(){

        }
        public function resendPassword(){

        }
        public function delete(){

        }
    }
?>