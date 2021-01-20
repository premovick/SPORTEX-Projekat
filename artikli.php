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
        $pol=$_GET['pol'];
        $grupa=$_GET['grupa'];

        $podaci_baze=$conn->query("SELECT * FROM proizvodi WHERE pol='$pol' AND grupa='$grupa'");
        $podaci_baze->data_seek(0);
        while($red=$podaci_baze->fetch_assoc()){
        echo "<div class='svi_proizvodi'>";
            echo "<div class='proizvodi'>";
                echo  "<div class='slika' style='background-image:url(\"slike/".$red['slika']."\")'></div>";
                echo  "<div class='proizvod'>";
                    echo  "<h4>".$red['prozivod']."</h4>";
                    echo "<a href='detaljnije.php?id=".$red['id']."'>Detaljnije</a>";
                    echo "<form>";
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