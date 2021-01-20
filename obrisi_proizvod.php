<?php
    require("baza.php");
    require("korpa.php");

    $id = $_GET['id'];

    if($korpa->da_li_postoji_proizvod($id)){
        $korpa->obrisi_proizvod($id);
    }

    header('Location: korpa_table.php');
?>