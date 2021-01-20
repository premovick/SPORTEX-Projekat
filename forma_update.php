<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
       require("conn.php");


        $id = $_GET['id'];
        $a = $conn->query("SELECT * FROM proizvodi WHERE id=$id");    
        $a->data_seek(0);
        $red = $a->fetch_assoc();
    ?>

    <form action="update.php" method="POST">
        <input value="<?=$id?>" name="id" type="hidden" />
        Proizvod:<input value="<?=$red['prozivod']?>" type="text" name="prozivod" />
        Grupa:<input value="<?=$red['grupa']?>" type="text" name="grupa" />
        Pol:<input value="<?=$red['pol']?>" type="text" name="pol" />
        Cena:<input value="<?=$red['cena']?>" type="text" name="cena" />
        Slika:<input value="<?=$red['slika']?>" type="text" name="slika" />
        <input type="submit" value="PROMENI" />
    </form>
</body>
</html>