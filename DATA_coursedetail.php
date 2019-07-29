<?php
include "header.php"
 ?>
 <div class="content-wrapper">
    <section class="content-header">
      <h1>
        <b>Course Table</b>
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
                  <th>Course Id</th>
                  <th>Course Name</th>
                </tr>
                </thead>
                <tbody>
                    <?php
                      coursedetail_row( $conn );
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
