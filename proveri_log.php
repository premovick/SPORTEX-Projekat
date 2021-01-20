<?php
    session_start();
?>
​
<?php 
    require "baza.php";

    $baza = new Baza();
    $baza->connect();
​
    $ime = $baza->real_escape_string($_POST['ime']);
    $prezime = $baza->real_escape_string($_POST['prezime']);
    $mejl = $baza->real_escape_string($_POST['mejl']);
    $sifra=$baza->real_escape_string($_POST['sifra'])
​
    
        $podaci = $baza->logovanje($ime, $prezime, $mejl, $sifra);
        $p = $podaci->fetch_all(MYSQLI_ASSOC);
        if($podaci == true){
            echo "Uspešno logovanje! <a href='admin.php'>UNOS</a>";
            $id = $p[0]['id'];
            $_SESSION['admin'] = $id;
        else{
            echo "Greška! <a href='kontakt.php'>Pokušajte ponovo.</a>";
        }
    
​
​
​
​
?>