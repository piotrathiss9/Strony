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