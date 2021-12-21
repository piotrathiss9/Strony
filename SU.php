<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Sign in</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="icon" href="ZNAKfirmy.png" />
</head>
<body>
<form action="" method="post">
  <table border="1" align="center" id="tabelka" height="700px" width="800px" bgcolor="blue">
    <tr>
      <td>
        <label>
          Wpisz Imie
        </label></td>
      <td><input type="text" name="firt_name"></td>

    <tr>
      <td>
        <label>
          Wpisz Nazwisko
        </label></td>
      <td><input type="text" name="last_name"></td>
    </tr>
    <tr>
      <td>
        <label id="nick">
          Wpisz Nickname
        </label></td>
      <td><input type="text" name="nick_name"></td>
    <tr>
      <td>
        <label>
          Wpisz E-mail
        </label></td>
      <td><input type="text" name="email"></td>


    </tr>
    <tr>
      <td>
        <label>
          Wpisz Hasło
        </label></td>
      <td><input type="text" name="password"></td>
    <tr>
      <td>
        <label>
          Wyślij na serwer
        </label></td>
      <td><input algin="center" type="submit" name="save" value="Submit"></td>


    </tr>


    </tr>
  </table>
</form>
</body>
</html>
<?php
$Serwername="localhost";
$username="root";
$password="";
$database_name="bloodsql";

$cann=mysqli_connect($Serwername, $username, $password, $database_name);

if (!$cann)
{
    die("Connection Failed:"  .mysqli_connect_error());
}
if (isset($_POST['save']))
{
   $name = $_POST['firt_name'];
   $email = $_POST['email'];
   $pasw = $_POST['password'];
   $nik = $_POST['nick_name']
   

   $sql_query = "INSERT INTO users (name,email,pasw)";
   if (mysqli_query($cann, $sql_query))
   {
    echo "Udalo sie zaladowac dane !"
   }
   else
   {
    echo "Error: " .$sql . "" .mysql_query($cann)
   }
   mysqli_close($cann)
}
