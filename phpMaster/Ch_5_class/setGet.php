<?php
    include_once("memberClass2.php");
    $member = new Member();
    $member->setId("1");
    $member->setLastName("hong");
    $member->setFirstName("jaemin");
    $member->setEmail("alswo@naver.com");
    $member->setPassword("1234");
    $member->getId()."<br>";
    $member->getLastName()."<br>";
    $member->getFirstName()."<br>";
    $member->getEmail()."<br>";
    $member->getPassword()."<br>";
?>