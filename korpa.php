<?php
    session_start();
class Korpa{
    function __construct()
    {
        if(!isset($_SESSION['stavke_korpe']))
            $_SESSION['stavke_korpe'] = [];
    }

    function dodaj_proizvod_u_korpu($id, $kol, $cena, $naziv){
        array_push($_SESSION['stavke_korpe'], 
            ['id'=>$id, 'prozivod'=>$naziv, 'cena'=>$cena, 'kolicina'=>$kol]);
    }
    function promeni_kolicinu($id, $kol){
        for($i=0; $i<count($_SESSION['stavke_korpe']); $i++)
            if($_SESSION['stavke_korpe'][$i]['id'] === $id)
               $_SESSION['stavke_korpe'][$i]['kolicina'] = $kol; 
    }
    function dodaj_kolicinu($id, $kol){
        for($i=0; $i<count($_SESSION['stavke_korpe']); $i++)
            if($_SESSION['stavke_korpe'][$i]['id'] === $id)
               $_SESSION['stavke_korpe'][$i]['kolicina'] += $kol; 
    }
    function obrisi_proizvod($id){
        for($i=0; $i<count($_SESSION['stavke_korpe']); $i++)
            if($_SESSION['stavke_korpe'][$i]['id'] === $id){
                array_splice($_SESSION['stavke_korpe'], $i, 1);
                return;
            }
    }
    function obrisi_korpu(){
        $_SESSION['stavke_korpe'] = [];
    }
    function __toString()
    {
       return json_encode($_SESSION['stavke_korpe']); 
    }
    function da_li_postoji_proizvod($id){
        for($i=0; $i<count($_SESSION['stavke_korpe']); $i++){
            if($_SESSION['stavke_korpe'][$i]['id'] === $id)
                return true;
        }
        return false;
    }
    
    function prikazi(){
        
                    echo "<table>";
                    echo "<thead>";
                        echo "<tr>";
                            echo "<th> NAZIV </th>";
                            echo "<th> CENA </th>";
                            echo "<th> KOLICINA </th>";
                            echo "<th> UKUPNO </th>";
                        echo "</tr>";
                    echo "</thead>";
                    
                    for($i=0; $i<count($_SESSION['stavke_korpe']); $i++){
                        echo "<tr>";
                            echo "<td>".$_SESSION['stavke_korpe'][$i]['prozivod']."</td>";
                            echo "<td>".$_SESSION['stavke_korpe'][$i]['cena']."</td>";
                            echo "<td>".$_SESSION['stavke_korpe'][$i]['kolicina']."</td>";
                            echo "<td>".(($_SESSION['stavke_korpe'][$i]['cena'])*($_SESSION['stavke_korpe'][$i]['kolicina']))."</td>";
                            echo "<td>";
                            echo "<form action='dodaj_kolicinu.php' method='GET'>";
                            echo "<input type='hidden' value='".$_SESSION['stavke_korpe'][$i]['id']."' name='id' />";
                            echo "<input type='submit' value='DODAJ' />";
                        echo "</form>";
                        echo "</td>";
                        echo "<td>";
                        echo "<form action='obrisi.php' method='GET'>";
                        echo "<input type='hidden' value='".$_SESSION['stavke_korpe'][$i]['id']."' name='id' />";
                        echo "<input type='submit' value='OBRISI' />";
                    echo "</form>";
                    echo "</td>";
                        echo "</tr>";
                    }

                    echo "</table>";
                    echo "<form>";
                    echo "<input type='submit' value='SNIMI'/>";
                    echo "</form>";
                
    }
    function ukupno(){
        $s=0;
        for($i=0; $i<count($_SESSION['stavke_korpe']); $i++)
            $s+=(($_SESSION['stavke_korpe'][$i]['cena'])*($_SESSION['stavke_korpe'][$i]['kolicina']));
        echo "<p>Ukupna vrednost je:" .$s. " dinara </p>";
    }
    
}
$korpa = new Korpa();

?>