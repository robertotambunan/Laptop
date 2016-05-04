<?php
session_start();
include_once('functions.php');

if (!isset($_SESSION['is_logged_in'])) {
    redirect('login.php');
} else {
    ?>
    <!DOCTYPE HTML>
    <!--
            Dopetrope by HTML5 UP
            html5up.net | @n33co
            Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
    -->
    <html>
        <head>
            <title>Admin - Edit Data</title>
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
        <body class="right-sidebar">

            <!-- Header -->
            <div id="header-wrapper">
                <div id="header">

                    <!-- Logo -->
                    <h1><a href="index.php">Aplikasi Checking Penyimpanan Laptop <br><br> Institut Teknologi Del</a></h1>
                    <p>Selamat Datang, Admin! | <a href="logout.php" class="new">Log out</a></p>

                    <!-- Nav -->
                    <nav id="nav">
                        <ul>
                            <li><a href="index.php">Simpan/Ambil</a></li>
                            <li><a href="cari.php">Pencarian</a></li>
                            <li  class="current"><a href="login.php">Admin</a></li>
                        </ul>
                    </nav>

                </div>
            </div>

            <!-- Main -->
            <div id="main-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="8u">

                            <!-- Content -->
                            <article class="box post">
                                <header>
                                    <h2>Ubah</h2>
                                    <p>Data Mahasiswa</p>
                                </header>

                                <p><?php
                                    $id = $_GET['id'];

                                    $database = new mysqli('127.0.0.1', 'user', 'user', 'prpl');
                                    $query = 'SELECT * FROM t_mahasiswa where id=' . $id;
                                    $result_set = $database->query($query);

                                    $row = $result_set->fetch_assoc();
                                    ?>
                                <form action="editproses.php?id=<?php echo $id; ?>" method="post"> 
                                    <table border="1"> 

                                        <tr> 
                                            <td>Nama</td> 
                                            <td>:</td> 
                                            <td><input type="text" height="12px" name="nama" value="<?php echo $row['nama'] ?>"></td> 
                                        </tr> 
                                        <tr> 
                                            <td>Nim</td> 
                                            <td>:</td> 
                                            <td><input type="text" name="nim" value="<?php echo $row['nim'] ?>"></td> 
                                        </tr>
                                        <tr> 
                                            <td>Program Studi</td> 
                                            <td>:</td> 
                                            <td><input type="text" name="prodi" value="<?php echo $row['prodi'] ?>"></td> 
                                        </tr> 
                                        <tr> 
                                            <td>Nomor Loker</td> 
                                            <td>:</td> 
                                            <td><input type="text" name="noloker" value="<?php echo $row['no_loker'] ?>"></td> 
                                        </tr> 
                                        <tr> 
                                            <td>Status</td> 
                                            <td>:</td> 
                                            <td>  <select name="status">
                                                    <option value="Tersimpan">Tersimpan</option>
                                                    <option value="Belum_tersimpan">Belum Tersimpan</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr> 
                                            <td>Foto</td> 
                                            <td>:</td> 
                                            <td><input type="text" name="foto" value="<?php echo $row['foto'] ?>"></td> 
                                        </tr> 
                                        <tr>
                                            <td colspan="3"><input type="submit" name="action" value="ubah data"></td>
                                        </tr> 
                                    </table> 
                                </form> 

                                </p>

                            </article>

                        </div>
                        <div class="4u">

                            <!-- Sidebar -->
                            <section class="box">
                                <p class="func">Pilihan</p>
                                <a href="belumsimpan.php" class="new">Cari Laptop yang Belum Tersimpan</a><br>
                                <a href="all.php" class="new">Daftar Status Laptop Mahasiswa</a><br>
                                <a href="nama.php" class="new">Cari Berdasarkan Nama Mahasiswa</a><br>
                                <a href="noloker.php" class="new">Cari Berdasarkan Nomor Loker Mahasiswa</a><br>
                                <a href="logout.php" class="new">Log out</a><br>
                            </section>

                        </div>
                    </div>
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

<?php } ?>