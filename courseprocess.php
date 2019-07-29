<?php

require_once("db.php");


$query = "INSERT into course_detail (`course_name`) VALUES( ? )";

$stmt = $conn->prepare($query);

$data = [ $_POST['courseName'] ];
$stmt->execute( $data );

header("Location: http://localhost/My_PHP_Files/Stu_Detail_Dashboard/DATA_coursedetail.php");
die();
