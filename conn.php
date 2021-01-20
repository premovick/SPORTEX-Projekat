<?php
    require("include/header.php");
     $conn=new mysqli("localhost", "root", "","projekat");
     if($conn->connect_error)
         die("Greska!".$conn->connect_error);
     $conn->set_charset("utf8");

?>