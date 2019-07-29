<?php
session_start();
require_once("db.php");
$query = "SELECT * from login_page where username = '".$_POST['username']."' AND password = '".$_POST['password']."'";
$res = $conn->query($query);
if($res = $conn->query($query))
{
  $row = $res->fetch(PDO::FETCH_ASSOC);
  if($row !== false)
  {
    $_SESSION['loggedin'] = 1;
    $_SESSION['user'] = $row['username'];
    header("Location: http://localhost/My_PHP_Files/Stu_Detail_Dashboard/mainpage.php");
    die();
  }
  else
  {
    header("Location: http://localhost/My_PHP_Files/Stu_Detail_Dashboard/index.php?err=1");
    die();
  }
}
