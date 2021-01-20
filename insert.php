<?php
    require("conn.php");

    $id=$_POST['id'];
    $proizvod=$conn->real_escape_string($_POST['prozivod']);
    $grupa=$conn->real_escape_string($_POST['grupa']);
    $pol=$conn->real_escape_string($_POST['pol']); 
    $cena=$conn->real_escape_string($_POST['cena']);
    $slika=$conn->real_escape_string($_POST['slika']);

    $a=$conn->query("INSERT INTO proizvodi(id, prozivod, grupa, pol, cena, slika) VALUES ('$id', '$proizvod', '$grupa', '$pol', '$cena', '$slika')");
    if($a===false){
        die("GRESKA!".$conn->error);
    }else{
        echo "Novi ID: ".$conn->affected_rows;
    }
    require("include/footer.php");
?>