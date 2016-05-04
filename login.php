<?php
session_start();
include_once 'functions.php';
if (isset($_SESSION['is_logged_in'])) {
    redirect('admin.php');
}
?>
<!DOCTYPE HTML>
<!--
        Dopetrope by HTML5 UP
        html5up.net | @n33co
        Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
    <head>
        <title>Admin</title>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
        <script src="js/jquery.min.js"></script>
        <script src="js/jquery.dropotron.min.js"></script>
        <script src="js/skel.min.js"></script>
        <script src="js/skel-layers.min.js"></script>
        <script src="js/init.js"></script>
        <noscript>
        <link rel="stylesheet" href="css/skel.css" />
        <link rel="stylesheet" href="css/style.css" />
        <link rel="stylesheet" href="css/style-desktop.css" />
        </noscript>
        <!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
    </head>
    <body class="homepage">

        <!-- Header -->
        <div id="header-wrapper">
            <div id="header">

                <!-- Logo -->
                <h1><a href="index.php">Aplikasi Checking Penyimpanan Laptop<br><br>Institut Teknologi Del</a></h1>

                <!-- Nav -->
                <nav id="nav">
                    <ul>
                        <li><a href="index.php">Simpan/Ambil</a></li>

                        <li><a href="cari.php">Pencarian</a></li>
                        <li  class="current"><a href="login.php">Admin</a></li>
                    </ul>
                </nav>

                <!-- Banner -->
                <section id="banner">
                    <header>
                        <h2>Login</h2>

                        <form action="loginproses.php" method="POST">
                            <table>
                                <tr><td><input type="text" name="username" style=" width: 300px;"></td></tr>
                                <tr><td><input type="password" name="password" style=" width: 300px; margin-top:4px "></td></tr>
                                <tr><td><input type="submit" name="submit" value="Submit" style=" width: 300px; margin-top: 4px;"></td></tr>
                            </table>    
                        </form>

                    </header>
                </section>
                 </div>
                        <div class="4u">
                            <section class="last">
                            </section>
                        </div>
                    </div>

                </section>

            </div>
        </div>


        <!-- Footer -->
        <div id="footer-wrapper">
            <section id="footer" class="container">
                <div class="row">
                    <div class="12u">

                        <!-- Copyright -->
                        <div id="copyright">
                            <ul class="links">
                                <li>&copy; 2016 for MSP</li><li>Roberto Tambunan</li>
                            </ul>
                        </div>

                    </div>
                </div>
            </section>
        </div>

    </body>
</html>