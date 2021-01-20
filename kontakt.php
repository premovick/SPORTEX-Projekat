<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <title>Document</title>
</head>
<body>
    <?php
    require("include/header.php");
    ?>
    <div class="contact">
        <p class="tekst">KONTAKTIRAJ NAS</p>
    </div>
    <div class="contact2">
        <ul>
        <li class="adresa"><pre>
                                <i class="fa fa-map-marker"></i>
                                ADRESA
                                Bulevar Kralja Aleksandra,
                                Beograd,11000</pre></li>
        <li class="mejl"><pre>           
                            <i class="fa fa-envelope"></i>
                            EMAIL
                            info@sportex.com
                            contact@sportex.com</pre></li>
        <li class="telefon"><pre>
                                <i class="fa fa-phone"></i>
                                TELEFON
                                064-691-4789
                                065-981-3617</pre></li>
        <ul>

    </div>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2831.6348239174854!2d20.5145517155349!3d44.788249679098755!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x475a709c84740bb3%3A0x3f4f010a48c26e3f!2sBulevar%20kralja%20Aleksandra%2C%20Beograd%2C%20Serbia!5e0!3m2!1sen!2s!4v1609897194264!5m2!1sen!2s"
         width="100%" height="450" 
         frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        <?php
            if(!isset($_SESSION['admin']))
            $_SESSION['admin'] = [];
    

        ?>    
 <div class="glavni">
        <div class="prvi">
            <h3>KONTAKTIRAJ <span class="span1">SPORTEX</span></h3>
            <br>
            <form action="proveri_log.php" method="POST">
                <input type="text" name="ime" placeholder="Ime:"/>
                <input tpe="text" name="prezime" placeholder="Prezime:"/>
                <p>
                <input type="email" name="mejl" placeholder="Email:"/>
                <input type="text" name="sifra" placeholder="Sifra:"/>
                </p>
                <input class="posalji" type="submit" value="Prijavi se"/>
            </form>
        
        
            </div>
    </div>
    <?php
    require("include/footer.php");
    ?>
</body>
</html>