<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    <?php 
        require("include/header.php");
        require "baza.php";

        ?>
        <?php
        $conn=new mysqli("localhost", "root", "", "projekat");
        $id=$_GET['id'];
        $podaci_baze=$conn->query("SELECT * FROM proizvodi WHERE id='$id'");
        //$podaci_baze->data_seek(0);
        while($red=$podaci_baze->fetch_assoc()){
        echo "<div class='pr'>";
            echo "<div class='levi_div'>";
                echo  "<div class='slika_d' style='background-image:url(\"slike/".$red['slika']."\")'></div>";
            echo "</div>";
                echo  "<div class='desni_div'>";
                    echo  "<h1>".$red['prozivod']."</h1>";
                    echo  "<h2><span class='naslov_2'>CENA</span></br>".$red['cena']."</h2>";
                    echo "<form action='kupi.php'>";
                    echo "<input type='hidden' name='id' value='".$red['id']."'/>";
                    echo "<input class='dug' type='submit' value='KUPI PROIZVOD'>";
                    echo "</form>";
                echo  "</div>";
        echo "</div>";
        }
        ?>
        <?php
        require("include/footer.php");
    ?>
</body>
</html>