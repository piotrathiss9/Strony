<?php

session_start();
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="utf-8" />
    <link rel="icon" href="ZNAKfirmy.png" />
    <title>Blood Games-sign in</title>
    <link rel="stylesheet" href="style.css" />

</head>
<body>
<form action="Zaloguj.php" method="post">
 Email: <input type="text" name="Email"></input><br/>
 Hasło: <input type="password" name="Haslo"></input><br><br>
 <input type="submit" value="Zaloguj się"/>

</form>
<?php
if(isset($_SESSION['error']))
{
echo $_SESSION['error'];
}
?>
</body>
</html>