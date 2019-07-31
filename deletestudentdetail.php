<script type="text/javascript">
function validation()
{
  var roll = document.forms["stuform"]["rollno"];
  if (roll.value == "")
  {
      window.alert("Please enter rolln no.");
      roll.focus();
      return false;
  }
}
</script>
<?php
include "header.php"
 ?>
 <div class="content-wrapper">
     <!-- Content Header (Page header) -->
     <section class="content-header">
       <h1>
         Manage Student
       </h1>
       <ol class="breadcrumb">
         <li><a href="#"><i class="fa fa-user"></i> Home</a></li>
         <li class="active">Delete Student Detail</li>
       </ol>
     </section>

     <!-- Main content -->
     <section class="content">
       <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">Delete Student Detail</h3>
            </div>
            <div class="box-body">
              <form role="form" action="deletestudentprocess.php" method="post" name="stuform" onsubmit="return validation()">
                <div class="form-row">
                  <div class="form-group col-md-11">
                      <label for="Name">Enter Roll No.</label>
                      <input type="number" class="form-control" name="rollno" placeholder="Enter Roll No.">
                  </div>
                <div class="form-row">
                  <div class="form-group col-md-4"></div>
                  <div class="form-group col-md-4">
                    <button type="submit" class="btn btn-block btn-success margin">Delete Student Detail</button>
                  </div>
                  <div class="form-group col-md-12">
                    <small>(Before delete any student detail first enter a score of student.)</small>
                  </div>
                  <div class="form-group col-md-4"></div>
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
