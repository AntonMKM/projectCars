<?php

class MembersController
{
    function inscription()
    {
        if (!empty($_POST['email']) and !empty($_POST['pass']) and !empty($_POST['lastname']) and !empty($_POST['firstname']) and !empty($_POST['address'])) {
            $manage = new MembersManager();
            $member = new Member($_POST);
            $manage->signup($member);
            header('location: index.php?action=signin');
        } else {
            header('location: index.php?action=signup');
        }
    }
}
