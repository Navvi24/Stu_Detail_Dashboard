<?php
session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != 1)
{
header("Location: http://localhost/My_PHP_Files/Stu_Detail_Dashboard/loginpage.php");
}
require_once('db.php');
require_once('functions.php');
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
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
      <header class="main-header">
        <a href="mainpage.php" class="logo">
          <span class="logo-mini"><b>STUDENT</b>detail</span>
          <span class="logo-lg"><b>STUDENT</b>detail</span>
      </a>
      <nav class="navbar navbar-static-top">
    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
      <span class="sr-only">Toggle navigation</span>
    </a>

    <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">
        <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <span class="hidden-xs"><?php echo $_SESSION['user']; ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-center">
                  <center>
                  <a href="signout.php" class="btn btn-default btn-flat">Sign out</a>
                </center>
                </div>
              </li>
            </ul>
          </li>
      </ul>
    </div>
  </nav>
</header>


<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>

        <!-- MANAGE STUDNT-->
        <li class="active treeview menu-open">
          <a href="#">
            <i class="fa fa-user"></i> <span>STUDENT DETAILS</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="mainpage.php"><i class="fa fa-circle-o"></i> Add Student Detail</a></li>
            <li><a href="DATA_studentdetail.php"><i class="fa fa-circle-o"></i>Manage Student Detail</a></li>
          </ul>
        </li>


        <!-- COURSE DETAIL-->
        <li class="active treeview menu-open">
          <a href="#">
            <i class="fa fa-book"></i>
            <span>COURSE DETAILS</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="courseDetail.php"><i class="fa fa-circle-o"></i> Add Course Detail</a></li>
            <li><a href="DATA_coursedetail.php"><i class="fa fa-circle-o"></i> Manage Course Detail</a></li>
          </ul>
        </li>

        <!--FEE DETAILS-->
        <li class="active treeview menu-open">
          <a href="#">
            <i class="fa  fa-money"></i>
            <span>FEES DETAILS</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="addfeedetail.php"><i class="fa fa-circle-o"></i>Add Fee Detail</a></li>
            <li><a href="DATA_feedetail.php"><i class="fa fa-circle-o"></i>Manage Fee Detail</a></li>
          </ul>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
