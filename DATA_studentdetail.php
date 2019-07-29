<?php
include "header.php"
 ?>
 <div class="content-wrapper">
    <section class="content-header">
      <h1>
        <b>Student Table</b>
      </h1>
    </section>

    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-body">
              <table class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Name</th>
                  <th>Roll No.</th>
                  <th>Father Name</th>
                  <th>Mother Name</th>
                  <th>Gender</th>
                  <th>Class</th>
                  <th>Phone No.</th>
                  <th>Address</th>
                  <th>Course Name</th>
                  <th>More</th>
                </tr>
                </thead>
                <tbody>
                    <?php
                      studentdetail_row( $conn );
                    ?>
                </tbody>
              </table>
            </div>

          </div>
        </div>
      </div>
    </section>
   </div>
   <?php
   include('footer.php');
    ?>
