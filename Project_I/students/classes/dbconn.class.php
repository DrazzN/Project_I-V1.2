<?php
if (!defined('DB_SERVER')) {
    include '../includes/initialize.php';
}

class DBConnection
{
    private $host = DB_SERVER;
    private $username = DB_USERNAME;
    private $password = DB_PASSWORD;
    private $dbname = DB_NAME;

    protected function connect()
    {
        try {
            $dsn = 'mysql:host='. $this->host . ';dbname='  . $this->dbname;
            $pdo = new PDO($dsn, $this->username, "");//$this->password);
            // Set the PDO error mode to exception
            $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
        } catch (PDOException $e) {
            echo "Connection Failed " . $e->getMessage() . "<br/>";
            die();
        }
    }
}
