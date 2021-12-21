<html>
<head>
<link rel="icon" href="ZNAKfirmy.png" />
<link rel="stylesheet" href="style.css" />
</head>
</html>

<?php
   require_once "connect.php";

   $polonczenie = @new mysqli($host,$db_user,$db_pass,$db_name);

    if($polonczenie->connect_errno!=0)
    {
      echo "Error".$polonczenie->connect_errno;
    }
    else
    {
       $login = $_POST['Email'];
       $pok = $_POST['Haslo'];
       echo "It works";

       $sql = "SELECT*FROM Users WHERE user='$login' AND pass='$haslo'";

       $polonczenie->close();
    }



?>