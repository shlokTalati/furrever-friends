<?php 

    class Database{

    private $host = "localhost";
    private $username="root";
    private $password="";
    private $database="petmarket";
    protected $connection;

    function __construct(){
        $this->connection =  mysqli_connect( $this->host,  $this->username,  $this->password,  $this->database);
    }

    }
?>