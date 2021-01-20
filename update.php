<?php
   require("conn.php");

    $id=$_POST['id'];
    $proizvod=$conn->real_escape_string($_POST['prozivod']);
    $grupa=$conn->real_escape_string($_POST['grupa']);
    $pol=$conn->real_escape_string($_POST['pol']); 
    $cena=$conn->real_escape_string($_POST['cena']);
    $slika=$conn->real_escape_string($_POST['slika']);

    $a=$conn->query("UPDATE proizvodi
                    SET prozivod='$proizvod', grupa='$grupa', pol='$pol', cena='$cena', slika='$slika'
                    WHERE id='$id'");
    
    if($a===false){
        die("GRESKA!".$conn->error);
    }
    header("Location: admin.php");
    
    require("include/footer.php");



?>