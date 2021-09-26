<?php
echo 'User';
require_once '../core/Database.php';
require_once '../controllers/UserController.php';

$action = $_POST['action'];
switch ($action) {
    case 'create':
        $name = $_POST['name'];
        $User = new UserController();
        $execute = $User->createUser($name);
        echo json_encode($execute);
        break;

    default:
        break;
}