<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Wenst u een meer informatie rond onze diensten? Aarzel niet en neem contact met ons op! Tot zo!">
    <meta name="author" content="DN Bouwwerken">

    <title>Contact</title>
    <link href="css/style.css" rel="stylesheet">

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/modern-business.css" rel="stylesheet">
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
<div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-5 mb-3">Contact
    </h1>

    <hr>

    <!-- Content Row -->
    <div class="row mb-5">
        <!-- Contact Form -->
        <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
        <div class="col-lg-8 mb-4">
            <h3>Stuur ons een email</h3>
            <form name="sentMessage" id="contactForm" novalidate>
                <fieldset disabled>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Naam:</label>
                            <input type="text" class="form-control" id="name" required
                                   data-validation-required-message="Naam is vereist!">
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Nummer:</label>
                            <input type="tel" class="form-control" id="phone" required
                                   data-validation-required-message="Nummer is vereist!">
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Email:</label>
                            <input type="email" class="form-control" id="email" required
                                   data-validation-required-message="email is vereist!">
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Bericht:</label>
                            <textarea rows="10" cols="100" class="form-control" id="message" required
                                      data-validation-required-message="Bericht is vereist!" maxlength="999"
                                      style="resize:none"></textarea>
                        </div>
                    </div>
                </fieldset>
                <div id="success"></div>
                <!-- For success/fail messages -->
                <button type="submit" class="btn btn-primary" disabled id="sendMessageButton">Send Message</button>
            </form>
        </div>
        <!-- Contact Details Column -->
        <div class="col-lg-4 mb-4">
            <h3>Contact Details</h3>
            <p>
                <abbr title="Phone">Nummer</abbr>: 0496787091
            </p>
            <p>
                <abbr title="Email">E-mail</abbr>:
                <a href="mailto:proff12@hotmail.com">proff12@hotmail.com
                </a>
            </p>
            <p>
                <abbr title="Facebook">Facebook</abbr>: <a
                    href="https://www.facebook.com/DN-Bouwwerken-289510351706982/">Vind ons ook op facebook!</a>
                </a>
            </p>
        </div>
    </div>
    <!-- /.row -->


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

</body>

</html>
