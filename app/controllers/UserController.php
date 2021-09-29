<?php
include 'app/core/Database.php';
class UserController extends Database
{
    public function getUsers()
    {
        $query = Database::connect()->prepare("SELECT * FROM user");
        $query->execute();
        return $array = $query->fetchAll(PDO::FETCH_OBJ);
    }

    public function createUser($name)
    {
        $sql = Database::connect()->prepare("INSERT INTO user(name) VALUES ('$name')");
        if($sql->execute())
        {
            $result = self::getUsers();
            return $result;
        }
    }
}