<?php
    require("conn.php");

    $id=$_GET['id'];

    $a=$conn->query("DELETE FROM proizvodi WHERE id=$id ");

    if($a===false){
        die("GRESKA!".$conn->error);
    }/*else{
        echo "Obrisano: ".$conn->affected_rows;
    }*/
    header("Location: admin.php");
    require("include/footer.php");
?>