<?php
    require("baza.php");
    require("korpa.php");

    $id = $_GET['id'];

    if($korpa->da_li_postoji_proizvod($id)){
        $korpa-> dodaj_kolicinu($id, 1);
    }

    header('Location: korpa_table.php');
?>