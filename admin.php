<?php
    require("conn.php");
    $podaci_baze=$conn->query("SELECT * FROM proizvodi");
     if($podaci_baze===false)
        die("GRESKA U UPITU!".$conn->error);

    echo "<a class='dodaj' href='forma_insert.php'>DODAJ</a>";
    echo "<table class='tabela' border='1'>";
    echo "<thead class='naslovi'>";
        echo "<tr>";
            echo "<th>ID</th>";
            echo "<th>PROIZVOD</th>";
            echo "<th>GRUPA</th>";
            echo "<th>POL</th>";
            echo "<th>CENA</th>";
            echo "<th>SLIKA</th>";
        echo "</tr>";
    echo "</thead>";

    $podaci_baze->data_seek(0);
    while($red=$podaci_baze->fetch_assoc()){
        echo "<tr>";
        echo "<td>".$red['id']."</td>";
        echo "<td>".$red['prozivod']."</td>";
        echo "<td>".$red['grupa']."</td>";
        echo "<td>".$red['pol']."</td>";
        echo "<td>".$red['cena']."</td>";
        echo "<td>".$red['slika']."</td>";
        echo "<td><a href='forma_update.php?id=".$red['id']."'>PROMENI</a></td>";
        echo "<td><a href='delete.php?id=".$red['id']."'>OBRISI</a></td>";
        echo "<tr>";
    }
    echo "</table>";

require("include/footer.php");
?>