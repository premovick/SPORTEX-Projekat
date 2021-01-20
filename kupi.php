<?php
    require "korpa.php";
    require "baza.php";
    $baza =new Baza();
    
    $id = $_GET['id'];

    if($korpa->da_li_postoji_proizvod($id)){
        $korpa-> dodaj_kolicinu($id, 1);
    }else{
        $p = $baza->proizvod_1($id);
        $korpa->dodaj_proizvod_u_korpu($id, 1, $p['cena'], $p['prozivod']);
    }

    echo $korpa;
    echo "<a href='proizvodi.php'>PROIZVODI</a>";

?>