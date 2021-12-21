<html>
<head>
<link rel="icon" href="ZNAKfirmy.png" />
<link rel="stylesheet" href="style.css" />
</head>
</html>
<?php
    require_once "connect.php";
   $login = $_POST['Email'];
   $pok = $_POST['Haslo'];

   echo $login."<br />";
   echo $pok;

?>