<?php
$servername = "localhost";
$username =  "root";
$pass = "";
$db_name = "studentDetails";

try
{
    $conn = new PDO("mysql:host=$servername;dbname=".$db_name, $username,$pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e)
{
  echo "Connection Failed :" . $e->getMessage();
}
?>
