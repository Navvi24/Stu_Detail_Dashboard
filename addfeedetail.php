<?php
include "header.php";
if (isset($_GET['rollno']))
{
  $feedata = get_fee_detail($conn);
}
else
{
}
 ?>

 <div class="content-wrapper">
     <!-- Content Header (Page header) -->
     <section class="content-header">
       <h1>
         Manage Student
       </h1>
       <ol class="breadcrumb">
         <li><a href="#"><i class="fa fa-money"></i> FEE DETAILS</a></li>
         <li class="active">Add Fee Detail</li>
       </ol>
     </section>

     <!-- Main content -->
     <section class="content">
       <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box box-danger">
            <div class="box-header with-border">
              <h3 class="box-title">Add Fee Details</h3>
            </div>
            <div class="box-body">
              <form role="form" action="feeprocess.php" method="post">
                <div class="form-row">
                  <div class="form-group col-md-3">
                      <label for="Name">Enter Rollno</label>
                      <input type="text" class="form-control" name="rollno" placeholder="Enter RollNo." value="<?php if (isset($_GET['rollno'])){echo $feedata['rollno']; }?>"  <?php if (isset($_GET['rollno'])){?> readonly <?php } ?> >
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-3">
                      <label for="Name">Enter Total Fee</label>
                      <input type="text" class="form-control" name="fee" placeholder="Enter Total Fee" value="<?php if (isset($_GET['rollno'])){echo $feedata['total_fee'];} ?>">
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-3">
                      <label for="Name">Enter Paid Fee</label>
                      <input type="text" class="form-control" name="paid" placeholder="Enter Paid Fee" value="<?php if (isset($_GET['rollno'])){echo $feedata['paid_fee'];} ?>">
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-3">
                      <label for="Name">Enter Unpaid Fee</label>
                      <input type="text" class="form-control" name="unpaid" placeholder="Enter Unpaid Fee" value="<?php if (isset($_GET['rollno'])){echo $feedata['unpaid_fee'];} ?>">
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-4"></div>
                  <div class="form-group col-md-4">
                    <button type="submit" class="btn btn-block btn-danger margin">Add Fee Detail</button>
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
