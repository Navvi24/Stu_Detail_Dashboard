<?php
include 'header.php';
  $val = $_GET['rollno'];
  $data = get_marksheet( $conn );
  $total = $data['marks1'] + $data['marks2'] + $data['marks3'] + $data['marks4'] + $data['marks5'];
  $per = ($total/500)*100;
 ?>
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Student Marksheet
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-user"></i> Home</a></li>
        <li class="active">Marksheet</li>
      </ol>
    </section>
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
        <div class="col-sm-8 invoice-col">
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
      <!-- /.row -->

      <!-- /.row -->

      <!-- this row will not appear when printing -->
      <div class="row no-print">
        <div class="col-xs-12">
          <a href="marksheetprint.php?rollno=<?php echo $val; ?>" target="_blank" class="btn btn-default"><i class="fa fa-print"></i> Print</a>
        </div>
      </div>
    </section>
    <div class="clearfix"></div>
  </div>

   <?php
   include('footer.php');
    ?>
