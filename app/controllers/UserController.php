<?php
echo 'UserCon';
require_once 'app/core/Database.php';
class UserController extends Database
{
    public function fetchAll()
    {
        $query = Database::conn()->prepare("SELECT * FROM user");
        $query->execute();
        return $array = $query->fetchAll(PDO::FETCH_OBJ);
    }

    public function createUser($name)
    {
        $sql = Database::conn()->prepare("INSERT INTO user(name) VALUES ('$name')");
        if($sql->execute())
        {
            $result = self::fetchAll();
            return $result;
        }
    }
}