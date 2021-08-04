<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Free Bootstrap Admin Template : Two Page</title>
    <!-- BOOTSTRAP STYLES-->
    <link rel="stylesheet" type="text/css" href="../../assets/css/bootstrap.css" />
    <!-- FONTAWESOME STYLES-->
    <link rel="stylesheet" type="text/css" href="../../assets/css/font-awesome.css" />
    <!-- CUSTOM STYLES-->
    <link rel="stylesheet" type="text/css" href="../../assets/css/custom.css" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="adjust-nav">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">BERKAH</a>
                </div>
            </div>
        </div>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li class="text-center user-image-back">
                        <img src="../../assets/Image/find_user.png" class="img-responsive" />
                     
                    </li>


                    <li>
                        <a href="../../index.php"><i class="fa fa-desktop "></i>Dashboard</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('index.php/welcome');?>"><i class="fa fa-desktop "></i>LogOut</a>
                    </li>
                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" style="background-image: url('images/bg-01.jpg');">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1>Admin Dashboard</h1>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-6">
                        <h3>Table  User</h3>
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Password</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    foreach($datauser as $a){
                                ?>
                                <tr>
                                    <td><?php echo $a ['no'] ?></td>
                                    <td><?php echo $a ['nama'] ?></td>
                                    <td><?php echo $a ['password'] ?></td>
                                    <td>
                                        <a href="<?php echo base_url('index.php/welcome/edituser?id=');?><?php echo $a ['no'] ?>" class="btn btn-primary btn-lg btn-block ">Edit</a>
                                        <a href="<?php echo base_url('index.php/welcome/deleteuser?id=');?><?php echo $a['no'] ?>" class="btn btn-danger btn-lg btn-block mt-2r">Hapus</a>
                                    </td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>

                    </div>
                    <div class="col-md-6">
                        <h3>Table  Order</h3>
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>merek</th>
                                        <th>ukuran</th>
                                        <th>Alamat</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
