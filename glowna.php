<html lang="pl">
<head>
<link rel="icon" href="ZNAKfirmy.png" />
<link rel="stylesheet" href="style.css" />
</head>

<body>

<?php
session_start();

echo "<p>Witaj ".$_SESSION['name']." !";

?>

</body>

</html>