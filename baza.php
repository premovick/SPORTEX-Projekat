<?php

class Baza{
    public $conn;
    function __construct(){
        $this->conn = new mysqli("localhost", "root", "", "projekat");
        if($this->conn->connect_error)
            die("Nije konektovan na bazu");
    }
    function proizvodi(){
        $proizvodi = $this->conn->query("SELECT * FROM proizvodi");
        $p = $proizvodi->fetch_all(MYSQLI_ASSOC);
        return $p;
    }
    function proizvod_1($id){
        $proizvodi = $this->conn->query("SELECT * FROM proizvodi WHERE id=$id");
        $p = $proizvodi->fetch_all(MYSQLI_ASSOC);
        return $p[0];
    }
}

$baza = new Baza();