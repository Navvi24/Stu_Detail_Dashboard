<?php
require_once('db.php');
require_once('functions.php');
$data = print_marksheet( $conn );
$total = $data['marks1'] + $data['marks2'] + $data['marks3'] + $data['marks4'] + $data['marks5'];
$per = ($total/500)*100;
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Student Dashboard</title>
    <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  </head>
  <body onload="window.print();">
     <div class="content-wrapper">
        <!-- Main content -->
        <section class="invoice">
          <!-- title row -->
          <div class="row">
            <div class="col-xs-12">
              <h2 class="page-header">
                <center>
                <h1><i class="fa fa-university"></i> XYZ School</h1>
              </center>
              </h2>
            </div>
            <!-- /.col -->
          </div>

          <!-- info row -->
          <div class="row invoice-info">
            <div class="col-sm-12 invoice-col">
              <div class="Box">
                <table class="maintable table col-md-4">
                  <tr>
                    <th>Name : </th>
                    <td><?php echo $data['name'] ?></td>
                  </tr>
                  <tr>
                    <th>Father Name : </th>
                    <td><?php echo $data['fatherName'] ?></td>
                  </tr>
                  <tr>
                    <th>Mother Name : </th>
                    <td><?php echo $data['motherName'] ?></td>
                  </tr>
                  <tr>
                    <th>Class : </th>
                    <td><?php echo $data['class'] ?></td>
                  </tr>
                  <tr>
                    <th>Roll No : </th>
                    <td><?php echo $data['rollno'] ?></td>
                  </tr>
                  <tr>
                    <th>Gender : </th>
                    <td><?php echo $data['gender'] ?></td>
                  </tr>
                </table>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-xs-12 table-responsive">
              <table class="table table-striped">
                <thead>
                <tr>
                  <th>Subjects</th>
                  <th>Marks</th>
                </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><?php echo $data['subject1'] ?></td>
                    <td><?php echo $data['marks1'] ?></td>
                  </tr>
                <tr>
                  <td><?php echo $data['subject2'] ?></td>
                  <td><?php echo $data['marks2'] ?></td>
                </tr>
                <tr>
                  <td><?php echo $data['subject3'] ?></td>
                  <td><?php echo $data['marks3'] ?></td>
                </tr>
                <tr>
                  <td><?php echo $data['subject4'] ?></td>
                  <td><?php echo $data['marks4'] ?></td>
                </tr>
                <tr>
                  <td><?php echo $data['subject5'] ?></td>
                  <td><?php echo $data['marks5'] ?></td>
                </tr>
                <tr>
                  <th colspan="1" style="text-align:center;">Total</th>
                  <td><?php echo $total; ?></td>
                </tr>
                <tr>
                  <th colspan="1" style="text-align:center; ">Percentage [ % ]</th>
                  <td><?php echo $per; ?><span>%</span></td>
                </tr>
                </tbody>
              </table>
            </div>
            <!-- /.col -->
          </div>
