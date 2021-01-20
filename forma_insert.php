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


        $id = $_POST['id'];
        $a = $conn->query("SELECT * FROM proizvodi WHERE id='$id'");    
        $a->data_seek(0);
        $red = $a->fetch_assoc();
    ?>
    <form action="insert.php" method="post">
    <input value="<?=$id?>" name="id" type="hidden" />
        Proizvod:<input value="<?=$red['prozivod']?>" type="text" name="ime" />
        Grupa:<input value="<?=$red['grupa']?>" type="text" name="rodjendan" />
        Pol:<input value="<?=$red['pol']?>" type="text" name="rodjendan" />
        Cena:<input value="<?=$red['cena']?>" type="text" name="rodjendan" />
        Slika:<input value="<?=$red['slika']?>" type="text" name="rodjendan" />
        <input type="submit" value="DODAJ" />
    </form>

</body>
</html>