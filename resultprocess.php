<?php
require_once("db.php");
$query2 = "SELECT * from student_result WHERE rollno = ".$_POST['rollno'];
if($stmt = $conn->query($query2))
{
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    if($row !== false)
    {
      $query3 = "UPDATE student_result SET subject1=?,subject2=?,subject3=?,subject4=?,subject5=?,marks1=?,marks2=?,marks3=?,marks4=?,marks5=? WHERE  rollno = ".$_POST['rollno'];
      $stmt = $conn->prepare($query3);
      $value = [$_POST['subject1'],$_POST['subject2'],$_POST['subject3'],$_POST['subject4'],$_POST['subject5'],$_POST['marks1'],$_POST['marks2'],$_POST['marks3'],$_POST['marks4'],$_POST['marks5'] ];
      $stmt->execute($value);
      header("Location: http://localhost/My_PHP_Files/Stu_Detail_Dashboard/DATA_studentdetail.php");
      die();
    }
    else
    {
      $query = "INSERT into student_result (`rollno`,`class`,`subject1`,`subject2`,`subject3`,`subject4`,`subject5`,`marks1`,`marks2`,`marks3`,`marks4`,`marks5`) VALUES(?,?,?,?,?,?,?,?,?,?,?,?)";
      $stmt = $conn->prepare($query);
      $data = [$_POST['rollno'],$_POST['cls'],$_POST['subject1'],$_POST['subject2'],$_POST['subject3'],$_POST['subject4'],$_POST['subject5'],$_POST['marks1'],$_POST['marks2'],$_POST['marks3'],$_POST['marks4'],$_POST['marks5'] ];
      $stmt->execute( $data );
      header("Location: http://localhost/My_PHP_Files/Stu_Detail_Dashboard/DATA_studentdetail.php");
      die();
    }

}
