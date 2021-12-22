<html lang="pl">
<head>
<link rel="icon" href="ZNAKfirmy.png" />
<link rel="stylesheet" href="style.css" />
</head>

<body>


<div id="container">
<div id="nav">
    <br />
    <a href="gry.html">GRY</a>
    <a href="o-nas.html">O NAS</a>
    <a href="dod.html">DODATKI</a>
    <a href="es.html">EASY WEB</a>


</div>
<img id="logo" src="ZNAKfirmy.png"/>
</div>
<br><br><br><br><br><br>
<?php
session_start();

echo "Witaj ".$_SESSION['name']." !";
unset($_SESSION['error']);
?>

</body>

</html>