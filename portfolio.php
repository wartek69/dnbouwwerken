<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>DN Bouwwerken</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/modern-business.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">


</head>

<body class="bg-light">
<?php include("templates/navigation.php"); ?>

<!-- Page Content -->
<div class="container my-5">
    <?php
    $path = 'img/portfolio/';
    $dirs = scandir($path, 0);
    $dirs= array_diff($dirs, array('..', '.'));
    foreach($dirs as $dir) {
        $files = scandir($path . $dir, 0);
        $files= array_diff($files, array('..', '.', 'album'));
        $description = '';
        $header = '';
        $img = '';
        foreach($files as $file) {
            if(strpos($file, '.descr') !== false) {
                $description = file_get_contents($path . $dir . '/' . $file);
            } else {
                $img = $file;
                $header = substr($file, 0, strpos($file, "."));
            }
        }
        echo'<div class="row">
            <div class="col-lg-7">
                <a href="#">
                    <img class="img-fluid rounded mb-3 mb-md-0" src="' . $path . $dir . '/' . $img .'" alt="">
                </a>
            </div>
            <div class="col-lg-5 d-flex flex-column">
                <h3>'. $header . '</h3>
                <p class="description">'. $description . '</p>
    
                <a class="btn btn-primary mt-auto" href="fotos.php?id=' . $dir . '">Bekijk project <span class="glyphicon glyphicon-chevron-right"></span>
                </a>
            </div>
        </div>
        <!-- /.row -->
        <hr>';
    }
    ?>
</div>
<!-- /.container -->


<!-- Footer -->
<footer class="bg-dark footer mt-10">
    <p class="m-0 text-center text-white">Copyright &copy; DN Bouwwerken 2019</p>

</footer>

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Contact form JavaScript -->
<!-- Do not edit these files! In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
<script src="js/jqBootstrapValidation.js"></script>
<script src="js/contact_me.js"></script>
<script src="js/popup.js"></script>


</body>

</html>
