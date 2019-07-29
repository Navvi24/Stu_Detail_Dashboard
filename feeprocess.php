<?php

require_once("db.php");
$query2 = "SELECT * from fee_detail WHERE rollno = ".$_POST['rollno'];
if($stmt = $conn->query($query2))
{
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    if($row !== false)
    {
      $query3 = "UPDATE fee_detail SET total_fee=?,paid_fee=?,unpaid_fee=? WHERE  rollno = ".$_POST['rollno'];
      $stmt = $conn->prepare($query3);
      $value = [$_POST['fee'],$_POST['paid'],$_POST['unpaid'] ];
      $stmt->execute($value);
      header("Location: http://localhost/My_PHP_Files/Stu_Detail_Dashboard/DATA_feedetail.php");
      die();
    }
    else
    {
      $query = "INSERT into fee_detail (`rollno`,`total_fee`,`paid_fee`,`unpaid_fee`) VALUES( ?,?,?,? )";
      $stmt = $conn->prepare($query);
      $data = [ $_POST['rollno'],$_POST['fee'],$_POST['paid'],$_POST['unpaid'] ];
      $stmt->execute( $data );
      header("Location: http://localhost/My_PHP_Files/Stu_Detail_Dashboard/DATA_feedetail.php");
      die();
    }
}
