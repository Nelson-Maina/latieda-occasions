<?php


class DATABASE
{
    public $servername;
    private $username ;
    private $dbpassword ;
    private $dbname ;
    private $charset ;
 
    public function conn()
    {
        $this->servername ="localhost";
        $this->username ="root";
        $this->dbpassword ="";
        $this->dbname ="latieda_db";
        $this->charset  ="utf8mb4";
 
       
        try {
            $dsn =  "mysql:host=".$this->servername.";dbname=".$this->dbname.";charset=".$this->charset ;
            $pdo = new PDO($dsn, $this->username, $this->dbpassword);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
        } catch (PDOExeption $e) {
            echo "Connection failed".$e->getMessage();
        }
    }
    
    public function query_1($sql, $id)
    {
        $stmt = $this->conn()->prepare($sql);
        $stmt->execute([$id]);
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $data = $row;
        }
        return $data;
    }
    //this function executes only queries wihout prepared statements
    public function queryNone($sql)
    {
        $stmt = $this->conn()->prepare($sql);
        $stmt->execute();
        $data = [];
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $data[] = $row;
        }
        return $data;
    }

    public function queryInsert($sql)
    {
        $stmt = $this->conn()->prepare($sql);
        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function writeSpecific($sql, $condition)
    {
        $stmt = $this->conn()->prepare($sql);
        if ($stmt->execute([$condition])) {
            return true;
        } else {
            return false;
        }
    }
}
