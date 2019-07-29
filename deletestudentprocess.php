<?php
require_once("db.php");
$query = "DELETE student_detail,student_result from student_detail INNER JOIN student_result ON student_detail.rollno = student_result.rollno where student_detail.rollno = ".$_POST['rollno'];
$conn->exec($query);
header("Location: http://localhost/My_PHP_Files/Stu_Detail_Dashboard/DATA_studentdetail.php");
die();
