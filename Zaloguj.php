<html>
<head>
<link rel="icon" href="ZNAKfirmy.png" />
<link rel="stylesheet" href="style.css" />
</head>
</html>

<?php
    session_start();
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


       $sql = "SELECT*FROM Users WHERE email='$login' AND pasw='$pok'";

       if ($rezultat = @$polonczenie->query($sql))
       {
         $ilu_userow = $rezultat->num_rows;

         if($ilu_userow > 0)
         {
            $wiersz = $rezultat->fetch_assoc();
            $EM = $wiersz['email'];
            $Password = $wiersz['pasw'];
            $name = $wiersz['name'];
            $_SESSION['name'] = $wiersz['name'];
            $rezultat->close();
            header('Location: glowna.php');

         }
         else
         {

            $_SESSION['error'] = '<span style="color:red">Nieprawidłowy login lub hasło! </span>';
            header('Location: SI.php');
         }

       }

       $polonczenie->close();
    }



?>