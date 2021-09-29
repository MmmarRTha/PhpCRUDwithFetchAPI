<?php
include '../core/Database.php';
require_once '../controllers/UserController.php';

$type_query = $_POST['action_type'];
switch ($type_query) {
    case 'create':
        $nombre = $_POST['name'];
        $user = new UserController();
        $execute = $user->createUser($nombre);
        echo json_encode($execute);
    break;
    default:
        break;
}
