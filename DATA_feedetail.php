<?php
include "header.php"
 ?>
 <div class="content-wrapper">
    <section class="content-header">
      <h1>
        <b>Fee Details Table</b>
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
                  <th>Roll No</th>
                  <th>Class</th>
                  <th>Total Fee</th>
                  <th>Paid Fee</th>
                  <th>Unpaid Fee</th>
                  <th>More</th>
                </tr>
                </thead>
                <tbody>
                    <?php
                      get_fee($conn);
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
