<!-- Navigation -->
<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="../index.php">DN Bouwwerken</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item <?php if ($_SERVER["SCRIPT_NAME"] == "/index.php") { echo"active"; }?>">
                    <a class="nav-link" href="../index.php">Home</a>
                </li>
                <li class="nav-item <?php if ($_SERVER["SCRIPT_NAME"] == "/fotos.php" || ($_SERVER["SCRIPT_NAME"] == "/portfolio.php")) { echo"active"; }?>">
                    <a class="nav-link " href="../portfolio.php">Projecten</a>
                </li>
                <li class="nav-item <?php if ($_SERVER["SCRIPT_NAME"] == "/contact.php") { echo"active"; }?>">
                    <a class="nav-link" href="../contact.php">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>