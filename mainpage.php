<?php

include "header.php";
if (isset($_GET['rollno']))
{
  $studata = get_student_detail($conn);
}
else
{
}
 ?>
 <div class="content-wrapper">
     <!-- Content Header (Page header) -->
     <section class="content-header">
       <h1>
         Student Details
       </h1>
       <ol class="breadcrumb">
         <li><a href="#"><i class="fa fa-user"></i> STUDENT DETAILS</a></li>
         <li class="active">Add Student Details</li>
       </ol>
     </section>

     <!-- Main content -->
     <section class="content">
       <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">Student Details</h3>
            </div>
            <div class="box-body">
              <form role="form" action="studentprocess.php" method="post">
                <div class="form-row">
                  <div class="form-group col-md-11">
                      <label for="Name">Name</label>
                      <input type="text" class="form-control" name="name" value="<?php if (isset($_GET['rollno'])){echo $studata['name'];} ?>">
                  </div>
                  <div class="form-group col-md-1">
                    <label for="Rollno">Rollno.</label>
                    <input type="number" class="form-control" name="rollno" value="<?php if (isset($_GET['rollno'])){echo $studata['rollno'];} ?>">
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="FatherName">Father Name</label>
                    <input type="text" class="form-control" name="father" value="<?php if (isset($_GET['rollno'])){echo $studata['fatherName'];} ?>">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="MotherName">MotherName</label>
                    <input type="text" class="form-control" name="mother" value="<?php if (isset($_GET['rollno'])){echo $studata['motherName'];} ?>">
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-12">
                    <label>Gender</label>
                    <select class="form-control" name="gender" value="<?php echo $studata['gender'] ?>">
                      <option <?php if (isset($_GET['rollno'])){echo ($studata['gender'] == 'Male')?'selected':'';} ?> value="Male">Male</option>
                      <option <?php if (isset($_GET['rollno'])){echo ($studata['gender'] == 'Female')?'selected':'';} ?> value="Female">Female</option>
                    </select>
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-2">
                    <label for="Class">Class</label>
                    <input type="text" class="form-control" name="cls" value="<?php if (isset($_GET['rollno'])){echo $studata['class'];} ?>">
                  </div>
                  <div class="form-group col-md-10">
                      <label for="Phone">Phone</label>
                      <input type="text" class="form-control" name="phonenumber" value="<?php if (isset($_GET['rollno'])){echo $studata['phone'];} ?>">
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-12">
                    <label>Course Name</label>

                    <select class="form-control" name="courseid">
                      <?php
                          get_course_dropdown($conn, $studata['course_id'] );
                      ?>
                    </select>
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-12">
                  <label>Address</label>
                  <textarea class="form-control" rows="3" name="address"><?php if (isset($_GET['rollno'])){echo $studata['address'];} ?></textarea>
                </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-4"></div>
                  <div class="form-group col-md-4">
                    <button type="submit" class="btn btn-block bg-orange margin">Add Student Detail</button>
                  </div>
                  <div class="form-group col-md-4">
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
