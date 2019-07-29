<?php
require_once("db.php");
$query2 = "SELECT * from student_detail WHERE rollno = ".$_POST['rollno'];
if($stmt = $conn->query($query2))
{
  $row = $stmt->fetch(PDO::FETCH_ASSOC);
  if($row !== false)
  {
    $query3 = "UPDATE student_detail SET name=?,rollno=?,fatherName=?,motherName=?,gender=?,class=?,phone=?,course_id=?,address=? WHERE  rollno = ".$_POST['rollno'];
    $stmt = $conn->prepare($query3);
    $value = [$_POST['name'],$_POST['rollno'],$_POST['father'],$_POST['mother'],$_POST['gender'],$_POST['cls'],$_POST['phonenumber'],$_POST['courseid'],$_POST['address']];
    $stmt->execute($value);
    header("Location:http://localhost/My_PHP_Files/Stu_Detail_Dashboard/DATA_studentdetail.php");
    die();
  }
  else
  {
    $query = "INSERT into student_detail (`name`,`rollno`,`fatherName`,`motherName`,`gender`,`class`,`phone`,`course_id`,`address`) VALUES( ?,?,?,?,?,?,?,?,? )";
    $stmt = $conn->prepare($query);
    $data = [ $_POST['name'],$_POST['rollno'],$_POST['father'],$_POST['mother'],$_POST['gender'],$_POST['cls'],$_POST['phonenumber'],$_POST['courseid'],$_POST['address'] ];
    $stmt->execute($data);
    header("Location: http://localhost/My_PHP_Files/Stu_Detail_Dashboard/DATA_studentdetail.php");
    die();
  }

}
