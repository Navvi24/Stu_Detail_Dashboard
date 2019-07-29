<?php
include "header.php";
if (isset($_GET['rollno']))
{
  $roll = $_GET['rollno'];
  $cl = $_GET['cls'];
  $form_data = get_result_data($conn);
}
 ?>
 <div class="content-wrapper">
     <!-- Content Header (Page header) -->
     <section class="content-header">
       <h1>
         Student Details
       </h1>
       <ol class="breadcrumb">
         <li><a href="#"><i class="fa fa-user"></i> Home</a></li>
         <li class="active">Student Marks Details</li>
       </ol>
     </section>

     <!-- Main content -->
     <section class="content">
       <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Student Marks Details</h3>
            </div>
            <div class="box-body">
              <form role="form" action="resultprocess.php" method="post">
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="Rollno">Rollno.</label>
                    <input type="text" class="form-control" name="rollno" value="<?php if (isset($_GET['rollno'])){echo $roll;} ?>" readonly>
                  </div>
                  <div class="form-group col-md-6">
                    <label for="Class">Class</label>
                    <input type="text" class="form-control" name="cls" value="<?php if (isset($_GET['rollno'])){echo $cl;} ?>" readonly>
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-12">
                    <h4 class="box-title">Enter Subject Name and Marks <span><small>(Marks should be out of 100)</small></span></h4>

                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-10">
                    <label for="Subject-1">Subject-1</label>
                    <input type="text" class="form-control" name="subject1" value="<?php if (isset($_GET['rollno'])){echo $form_data['subject1'];} ?>">
                  </div>
                  <div class="form-group col-md-2">
                    <label for="Marks">Marks</label>
                    <input type="number" class="form-control" name="marks1" value="<?php if (isset($_GET['rollno'])){echo $form_data['marks1'];} ?>">
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-10">
                    <label for="Subject-2">Subject-2</label>
                    <input type="text" value="<?php if (isset($_GET['rollno'])){echo $form_data['subject2'];} ?>" class="form-control" name="subject2" >
                  </div>
                  <div class="form-group col-md-2">
                    <label for="Marks">Marks</label>
                    <input type="number" class="form-control" name="marks2" value="<?php if (isset($_GET['rollno'])){echo $form_data['marks2'];} ?>">
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-10">
                    <label for="Subject-3">Subject-3</label>
                    <input type="text" class="form-control" name="subject3" value="<?php if (isset($_GET['rollno'])){echo $form_data['subject3'];} ?>">
                  </div>
                  <div class="form-group col-md-2">
                    <label for="Marks">Marks</label>
                    <input type="number" class="form-control" name="marks3" value="<?php if (isset($_GET['rollno'])){echo $form_data['marks3'];} ?>">
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-10">
                    <label for="Subject-4">Subject-4</label>
                    <input type="text" class="form-control" name="subject4" value="<?php if (isset($_GET['rollno'])){echo $form_data['subject4'];} ?>">
                  </div>
                  <div class="form-group col-md-2">
                    <label for="Marks">Marks</label>
                    <input type="number" class="form-control" name="marks4" value="<?php if (isset($_GET['rollno'])){echo $form_data['marks4'];} ?>">
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-10">
                    <label for="Subject-5">Subject-5</label>
                    <input type="text" class="form-control" name="subject5" value="<?php if (isset($_GET['rollno'])){echo $form_data['subject5'];} ?>">
                  </div>
                  <div class="form-group col-md-2">
                    <label for="Marks">Marks</label>
                    <input type="number" class="form-control" name="marks5" value="<?php if (isset($_GET['rollno'])){echo $form_data['marks5'];} ?>">
                  </div>
                </div>

                <div class="form-row">
                  <div class="form-group col-md-4"></div>
                  <div class="form-group col-md-4">
                    <button type="submit" class="btn btn-block bg-blue margin">Submit Result</button>
                  </div>
                  <div class="form-group col-md-4">
                  </div>
                </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
     </section>
   </div>

   <?php
   include('footer.php');
    ?>
