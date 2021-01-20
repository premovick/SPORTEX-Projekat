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
    <header>
        <div class="prva">
            <img class="slika" src="slike/logo.jpg"/>
        </div>
        <div class="meni">
            <ul type="none">
                <li class="active"><a href="naslovna.php"><i class="fa fa-home"></i>Početna</a></li>
                <li><a href="proizvodi.php"><i class="fa fa-bars"></i>Proizvodi</a>
                    <div class="submeni">
                        <ul>
                            <li ><a href="proizvodi.php">Svi proizvodi</a></li>
                            <li class="artikli"><a href="pol.php?pol=musko">Muškarci</a><i class="fas fa-caret-right"></i>
                            <div class="submeni2">
                                <ul>
                                    <li><a href="artikli.php?pol=musko&grupa=patike">Patike</a></li>
                                    <li ><a href="artikli.php?pol=musko&grupa=odeca">Odeća</a></li>
                                </ul>
                            </div>
                            </li>
                            <li class="artikli"><a href="pol.php?pol=zensko">Žene</a><i class="fas fa-caret-right"></i>
                            <div class="submeni2">
                                <ul>
                                    <li><a href="artikli.php?pol=zensko&grupa=patike">Patike</a></li>
                                    <li><a href="artikli.php?pol=zensko&grupa=odeca">Odeća</a></li>
                                </ul>
                            </div>
                        </li>
                            <li class="artikli"><a href="pol.php?pol=decije">Deca</a><i class="fas fa-caret-right"></i>
                            <div class="submeni2">
                                <ul>
                                    <li><a href="artikli.php?pol=decije&grupa=patike">Patike</a></li>
                                    <li><a href="artikli.php?pol=decije&grupa=odeca">Odeća</a></li>
                                </ul>
                            </div>
                        </li>
                        </ul>
                    </div>
                     </li>
                <li><a href="kupi.php?"><i class="fas fa-cart-arrow-down"></i>Kupovina</a></li>
                <li><a href="kontakt.php"><i class="fa fa-phone"></i>Kontakt</a></li>
            </ul>
        </div>
    </header>
                
</body>
</html>