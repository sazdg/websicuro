<?php
class Database {
    private $host = "localhost";
    private $nome = "blogwebsicuro";
    private $username = "root";
    private $password = "";
    private $conn;

    public function connessione(){
        $this->conn = null;
        try {
            $this->conn = new PDO("mysql:host=".$this->host.";dbname=".$this->nome.";charset=utf8", $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }catch(PDOexception $e){
            echo "{ DB doesn't work }" . $e->getMessage();
        }

        return $this->conn;
    }
}

?>