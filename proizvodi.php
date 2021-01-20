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
        $baza=new Baza();

        ?>
        <?php
        $conn=new mysqli("localhost", "root", "", "projekat");

        $podaci_baze=$conn->query("SELECT * FROM proizvodi");
        $podaci_baze->data_seek(0);
        while($red=$podaci_baze->fetch_assoc()){
        echo "<div class='svi_proizvodi'>";
            echo "<div class='proizvodi'>";
                echo  "<div class='slika' style='background-image:url(\"slike/".$red['slika']."\")'></div>";
                echo  "<div class='proizvod'>";
                    echo  "<h4>".$red['prozivod']."</h4>";
                    echo "<a href='detaljnije.php?id=".$red['id']."'>Detaljnije</a>";
                    echo "<form action='kupi.php'>";
                    echo "<input type='hidden' name='id' value='".$red['id']."'/>";
                    echo "<input class='dugme_kupi' type='submit' value='KUPI PROIZVOD'>";
                    echo "</form>";
                echo  "</div>";
            echo "</div> ";
        echo "</div>";
        }
        ?>
        <?php
        require("include/footer.php");
    ?>
</body>
</html>