<?php
    Class Member {
        private $id;
        private $lastName;
        private $firstName;
        private $email;
        private $password;
        public function __construct($id,$lastName,$firstName,$email,$password){
            $this->setId($id);
            $this->setLastName($lastName);
            $this->setFirstName($firstName);
            $this->setEmail($email);
            $this->setPassword($password);
        }
    }
?>