<?php
session_start();

spl_autoload_register(function ($class) {
    $directories = ["class", "model", "controller"];
    foreach ($directories as $dir) {
        $file = $dir . "/" . $class . ".php";
        if (file_exists($file)) {
            require_once $file;
        }
    }
});
$member = new MembersController;

if (!empty($_GET)) {
    extract($_GET);
    if (isset($action)) {
        switch ($action) {
                // case 'inscription':
                //     $member->inscription();
                //     break;
            case 'signup':
                require 'view/inscription.php';
                break;
            case 'exemple':
                require 'view/exemple.php';
                break;
        }
    }
} else {
    require 'view/home.php';
}
