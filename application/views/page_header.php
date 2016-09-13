<!DOCTYPE html>

<html lang="en">

<head>

  <meta charset="utf-8">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta name="description" content="">

  <meta name="author" content="">

  <link rel="icon" href="favicon.ico">



  <title>Dekoit Operations Dashboard</title>



  <!-- Bootstrap core CSS -->

  <link href="<?php echo base_url();?>dist/css/bootstrap.css" rel="stylesheet">

  <!-- Custom styles for this template -->

  <link href="<?php echo base_url();?>assets/css/dashboard.css" rel="stylesheet">



  <!-- DataTable Stylesheet -->

  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/jquery.dataTables.css">

<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/datepicker3.css">

<link href='http://fonts.googleapis.com/css?family=Quicksand:700' rel='stylesheet' type='text/css'>

  <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->

  <!--[if lt IE 9]><script src="assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

  <script src="<?php echo base_url();?>assets/js/ie-emulation-modes-warning.js"></script>

 

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->

<!--[if lt IE 9]>

      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>

      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

      <![endif]-->

  </head>



    <body class="nav-collapsed">

      <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">



        <div class="container-fluid">

          <div class="navbar-header">

            <button type="button" class="navbar-toggle collapsed"

            data-toggle="collapse" data-target="#navbar" aria-expanded="false"

            aria-controls="navbar">

            <span class="sr-only">Toggle navigation</span> <span

            class="icon-bar"></span> <span class="icon-bar"></span> <span

            class="icon-bar"></span>

          </button>

          <a class="menu-toggle toggle-me" href="#"><i class="glyphicon glyphicon-th-large"></i></a>

          <a class="navbar-brand brand-logo" href="#">deKoit</a>

        </div>

        <div id="navbar" class="navbar-collapse collapse">

          <ul class="nav navbar-nav navbar-right">

            <li><a href="#">Dashboard</a></li>

            <li><a href="#">Settings</a></li>

            <li><a href="#">Profile</a></li>

            <li><a href="#">Help</a></li>

          </ul>

          <form class="navbar-form navbar-right" action="search" method = "post">

            <input type="text" class="form-control" name="keyword" placeholder="Search...">
            
            <button type="submit" style="display:none;"> Search</button>

          </form>
        </div>
      </div>
    </nav>

    <div class="container-fluid">

      <div class="row">

        <nav class="offcanvas nav-collapsed" role="navigation">

          <ul class="nav nav-sidebar">

            <li class="active"><a href="<?php echo base_url()?>index.php/Upload_orders"><i class="glyphicon glyphicon-shopping-cart"></i> Orders</a></li>

            <!-- <li><a href="<?php echo base_url()?>index.php/upload"><i class="glyphicon glyphicon-upload"></i> PNL upload</a></li> -->

            <li><a href="new_orders"><i class="glyphicon glyphicon-download"></i> Download stock</a></li>

            <li><a href="new_orders"><i class="glyphicon glyphicon-pencil"></i> Stock Status</a></li>

            <li><a href="changestatus"><i class="glyphicon glyphicon-ok"></i> Change Status</a></li>

            <li><a href="new_orders"><i class="glyphicon glyphicon-fire"></i> Returns</a></li>

            <li><a href="new_orders"><i class="glyphicon glyphicon-print"></i> Invoice Upload</a></li>

            <!--<li><a href="stock_status"><i class="glyphicon glyphicon-tasks"></i> Stock Status</a></li>

             <li><a href=""><i class="glyphicon glyphicon-pencil"></i> Reports</a></li>

            <li><a href="#"><i class="glyphicon glyphicon-cog"></i> Analytics</a></li>

            <li><a href="#"><i class="glyphicon glyphicon-file"></i> Export</a></li> 

            <li><a href=""><i class="glyphicon glyphicon-euro"></i> Payment</a></li>

            <li><a href=""><i class="glyphicon glyphicon-circle-arrow-up"></i> Upload</a></li>

            <li><a href="stock_Status"><i class="glyphicon glyphicon-tasks"></i>Stock Status</a></li>

            <li><a href="new_orders"><i class="glyphicon glyphicon-shopping-cart"></i>Orders</a></li>

            <li><a href="returns"><i class="glyphicon glyphicon-fire"></i>Returns</a></li>

            <li><a href="purchase_detail"><i class="glyphicon glyphicon-book"></i> Purchase Detail</a></li>

            <li><a href="upload_pnl"><i class="glyphicon glyphicon-time"></i> Upload PNL</a></li>

            <li><a href="fetch_data"><i class="glyphicon glyphicon-check"></i> Process PNL</a></li>

            <li><a href="neft_detail"><i class="glyphicon glyphicon-eye-open"></i> Neft Detail</a></li>

            <li><a href="changestatus"><i class="glyphicon glyphicon-ok"></i> Change Status</a></li>

            <li><a href="returns"><i class="glyphicon glyphicon-fire"></i> Returns</a></li>

            <li><a href="claim_details"><i class="glyphicon glyphicon-book"></i> Claim Details</a></li>
            <li><a href="all_transactions"><i class="glyphicon glyphicon-list-alt"></i>All Detail</a></li>-->

            

            

          </ul>

        </nav>

</div>