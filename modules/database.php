
<?php
include __DIR__ . "/../config/config.php";


class Database
{
    private function __construct()
    {

    }
    public static function connect()
    {
        try {
            $mysqli = new mysqli($host,$username,$password,$database);
        }catch (Exception $e){
            $error = $e->getMessage();
            echo $error;
        }
    }
}