<!DOCTYPE html>
<html>
  <head>
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://bootswatch.com/flatly/bootstrap.min.css">
    <link href="<?php echo base_url('assets/css/style.css'); ?>" rel='stylesheet' type='text/css' />
    <link class="glyphicon glyphicon-dashboard" rel="icon"  type="icon" sizes="16x16">
    
  </head>
  <body>

<nav class="navbar navbar-default header">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand navbar-hover menuitems" href="<?php echo base_url('home')?>">Dashboard</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <?php //if ($this->session->userdata('user_logged') == true) { ?>
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle navbar-hover" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">
          <?php //echo $this->session->userdata('username');?> <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo site_url('auth/logout')?>">Logout</a></li>
          </ul>
        </li>
      </ul>
      <?php //} ?>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>