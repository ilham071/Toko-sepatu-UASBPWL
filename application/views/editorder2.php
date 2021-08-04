<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Edit Order</title>

    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/main1.css'); ?>">
</head>

<body>
    <div class="page-wrapper bg-dark p-t-100 p-b-50">
        <div class="wrapper wrapper--w900">
            <div class="card card-6">
                <div class="card-heading">
                    <h2 class="title">Edit Order</h2>
                </div>
                <div class="card-body">
                    <form method="POST" action="<?php echo base_url('index.php/welcome/updateorder');?>">
                    <?php 

                    foreach ($data as $a){
                    ?>
                        <div class="form-row">
                            <div class="name">merek</div>
                            <div class="value">
                                <input class="input--style-6" type="hidden" name="no" value="<?php echo $a['no'];?>">
                                <input class="input--style-6" type="text" name="merek" value="<?php echo $a['merek'];?>">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">ukuran</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="text" name="ukuran" value="<?php echo $a['ukuran'];?>">
                                </div>
                            </div>
                        </div>
                        </div>
                        <div class="form-row" style="background-color:white;">
                            <div class="name">alamat</div>
                            <div class="value">
                                <div class="input-group">
                                    <textarea class="textarea--style-6" name="alamat"><?php echo $a['alamat'];?></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button class="btn btn--radius-2 btn--blue-2" type="submit">EDIT</button>
                        </div>
                        <?php } ?>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>


    <!-- Main JS-->
    <script src="js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->