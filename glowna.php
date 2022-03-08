<html lang="pl">
<head>
<link rel="icon" href="ZNAKfirmy.png" />
<link rel="stylesheet" href="style.css" />
<title>Lost Games</title>
</head>

<body>


<div id="container">
<div id="nav">
    <br />
    <a href="gry.html">GRY</a>
    <a href="o-nas.html">O NAS</a>
    <a href="dod.html">DODATKI</a>
    <a href="es.html">EASY WEB</a>
    <a href="index.html">Wyloguj się</a>
    <a href="ustawienia.html">Profil</a>



</div>
<img id="logo" src="ZNAKfirmy.png"/>
</div>
<br><br><br><br><br><br>
<?php
session_start();

echo "Witaj ".$_SESSION['name'];
unset($_SESSION['error']);
?>

<h1><a href="sklep.php"><marquee behavior="alternate">Kup Bcoin</marquee></a><h1>
</body>

</html>