<?php
session_start();
if ($_SESSION['role'] != 4) {
    header("Location: ../index.php");
    exit();
}
$new_id = (int)$_GET['id'];
//$new_id = intval($_GET['id']);
include "../structura/sql.php";
$result = $con->query("select * from savollar WHERE id='$new_id'")->fetch_assoc();
//var_dump($result); exit;
if (isset($_POST['submit'])) {
$savol=$_POST['savol'];
$a =$_POST['a'];
$b =$_POST['b'];
$c =$_POST['c'];
$d =$_POST['d'];
$tj=$_POST['tj'];
$dars_id=$_POST['dars_id'];
$okey = $con->query("UPDATE savollar SET savol='$savol',a='$a', b='$b', c='$c', d='$d', t_j='$tj', dars_id='$dars_id' WHERE id=$new_id");
if ($okey)
    header('location:lesson.php');
}

?>
<!DOCTYPE html>

<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Starter</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect.
  -->
  <link rel="stylesheet" href="dist/css/skins/skin-blue.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>LT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Admin</b>LTE</span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->

          <!-- /.messages-menu -->

          <!-- Notifications Menu -->

          <!-- User Account Menu -->
          <li class="dropdown user user-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <!-- The user image in the navbar-->
              <img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <!-- hidden-xs hides the username on small devices so only the image appears. -->

              <span class="hidden-xs"><?php echo $_SESSION['users']; ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- The user image in the menu -->
              <li class="user-header">
                <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p>
                  <?php echo $_SESSION['users']; ?> - Web Developer
                  <small>Member since Nov. 2012</small>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#">Followers</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Sales</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Friends</a>
                  </div>
                </div>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="../structura/chiqish.php" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->

        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $_SESSION['users'];?></p>
          <!-- Status -->
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form (Optional) -->

      <!-- /.search form -->

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu">
        <li class="header">HEADER</li>
        <!-- Optionally, you can add icons to the links -->
        <li class="active"><a href="users.php"><i class="fa fa-link"></i> <span>Users</span></a></li>
        <li class="active"><a href="index.php"><i class="fa fa-link"></i> <span>News</span></a></li>
        <li class="active"><a href="message.php"><i class="fa fa-link"></i> <span>Message</span></a></li>
        <li class="active"><a href="lesson.php"><i class="fa fa-link"></i> <span>Add Lesson</span></a>
        </li>


      </ul>
    </section>
  </aside>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1 style="">
        Hello Admin
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
        <li class="active">Here</li>
      </ol>
    </section>
<div class="conteiner">

  <form class="form-horizontal" role="form" enctype="multipart/form-data" method="post">

    <div class="form-group has-success has-feedback">
        <label class="col-sm-2 control-label" for="inputSuccess"><a href="#">question</a> </label>
        <div class="col-sm-10">
            <input value="<?= $result['savol'] ?>" type="text" class="form-control" id="inputSuccess" name="savol">
            <span class="glyphicon glyphicon-ok-sign form-control-feedback"></span>

        </div>
    </div>

    <div class="form-group has-warning has-feedback">
        <label class="col-sm-2 control-label" for="exampleinputfile"><a href="#">A</a></label>
        <div class="col-sm-10">
            <input value="<?= $result['a'] ?>" type="text" class="form-control" id="exampleinputfile"
                   name="a">
            <span class="glyphicon glyphicon-picture form-control-feedback"></span>
        </div>
    </div>

    <div class="form-group has-error has-feedback">
        <label class="col-sm-2 control-label" for="inputError"><a href="#">b</a></label>
        <div class="col-sm-10">
            <input value="<?= $result['b'] ?>" type="text" class="form-control" id="inputError"
                   name="b">
            <span class="glyphicon glyphicon-text-width form-control-feedback"></span>
        </div>
    </div>

    <div class="form-group has-error has-feedback">
        <label class="col-sm-2 control-label" for="id_date"><a href="#">c</a></label>
        <div class="col-sm-10">
            <input value="<?= $result['c'] ?>" type="datetime" class="form-control" id="inputError" name="c">
            <span class="glyphicon glyphicon-time form-control-feedback"></span>
        </div>
    </div>

    <div class="form-group has-error has-feedback">
        <label class="col-sm-2 control-label" for="inputError"><a href="#">d</a></label>
        <div class="col-sm-10">
            <input value="<?= $result['d'] ?>" type="text" class="form-control" id="inputError" name="d">
            <i class="glyphicon glyphicon-user form-control-feedback"></i>

        </div>
    </div>

    <div class="form-group has-error has-feedback">
        <label class="col-sm-2 control-label" for="inputError"><a href="#">true question</a></label>
        <div class="col-sm-10">
            <input value="<?= $result['t_j'] ?>" type="text" class="form-control" id="inputError"
                   name="tj">
            <i class="glyphicon glyphicon-user form-control-feedback"></i>
        </div>
    </div>

    <div class="form-group has-error has-feedback">
        <label class="col-sm-2 control-label" for="inputError"><a href="#">Lesson_id</a></label>
        <div class="col-sm-10">
            <input value="<?= $result['dars_id'] ?>" type="text" class="form-control" id="inputError" name="dars_id">
            <i class="glyphicon glyphicon-user form-control-feedback"></i>
        </div>
    </div>





    <div class="form-group">
        <div class="col-md-offset-2">

            <button class="col-md-2 btn btn-success" style="margin-left: 15px" type="submit" name="submit">
                Save
            </button>
        </div>
    </div>
</form>

</div>
    <!-- Main content -->
    <section class="content">

      <!-- Your Page Content Here -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2016 <a href="#">Company</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li class="active"><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane active" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript::;">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript::;">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="pull-right-container">
                  <span class="label label-danger pull-right">70%</span>
                </span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 2.2.3 -->
<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>

<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. Slimscroll is required when using the
     fixed layout. -->
</body>
</html>
