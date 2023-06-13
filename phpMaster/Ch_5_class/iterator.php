<?php
    require_once 'memberclass.php';
    require_once 'membersclass.php';

    $member1 = new Member(1,"성 1","이름 1","email1$nav.com",'password1');
    $member2 = new Member(2,"성 2","이름 2","email2$nav.com",'password2');
    $member3 = new Member(3,"성 3","이름 3","email3$nav.com",'password3');
    $member4 = new Member(4,"성 4","이름 4","email4$nav.com",'password4');
    $member5 = new Member(5,"성 5","이름 5","email5$nav.com",'password5');

    $members = new Members();
    $members->add($member1);
    $members->add($member2);
    $members->add($member3);
    $members->add($member4);
    $members->add($member5);

    $iterator = $members->getIterator();

    foreach($iterator as $member){
        print $member->getId()." ";
        print $member->getLastName()." ";
        print $member->getFirstName()." ";
        print $member->getEmail()." ";
        print $member->getPassword()."<br>";
    }

?>