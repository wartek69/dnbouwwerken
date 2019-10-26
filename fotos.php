<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Fotos van ons vakmanschap. Enkele renovaties verricht voor verschillende klanten kan u hier terug vinden.">
    <meta name="author" content="DN Bouwwerken">

    <title>Renovatie fotos</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/modern-business.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-137514577-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-137514577-1');
    </script>



</head>

<body class="bg-light">

<?php include("templates/navigation.php"); ?>

<!-- Page Content -->
<div class="container mb-5">


    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-5 mb-3">Portfolio</h1>
    <hr>

    <div class="row mb-5">
        <?php
        $dir = 'img/portfolio/' . $_GET["id"] . '/album/';
        $files = scandir($dir, 0);
        $files = array_diff($files, array('..', '.'));
        foreach($files as $value) {
        echo '<div class="col-lg-6 portfolio-item">
            <div class="card h-100">
                <a class="pop"><img class="card-img-top clickable" src="'. $dir . $value .'" alt=""></a>
            </div>
        </div>';
        }
        ?>
    </div>
    <!-- /.row -->

</div>
<!-- /.container -->
</div>
<!-- /.container -->
<!-- modal for img popup -->
<div class="modal fade" id="imagemodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" data-dismiss="modal">
        <div class="modal-content">
            <div class="modal-body">
                <img src="" class="imagepreview img-responsive">
            </div>
        </div>
    </div>
</div>
<!-- /modal-->


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
