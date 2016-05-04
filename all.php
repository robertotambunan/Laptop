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
            <title>Admin - Daftar Laptop</title>
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
                                    <h2>Daftar</h2>
                                    <p>Semua Laptop</p>
                                </header>

                                <p>
                                <table style=" width: 650px;">
                                    <tr>
                                        <td align="center">NIM</td>
                                        <td align="center">Nama</td>
                                        <td align="center">Program Studi</td>
                                        <td align="center">No. Loker</td>
                                        <td align="center">Status</td>
                                        <td align="center">Pilihan</td>
                                    </tr>
                                    <?php
                                    $database = new mysqli('ap-cdbr-azure-southeast-b.cloudapp.net', 'bbb922ccc6e416', 'ddaf356d', 'prpl');
                                    $query2 = 'SELECT * FROM t_mahasiswa';
                                    $result_set2 = $database->query($query2);
                                    while ($row2 = $result_set2->fetch_assoc()) {
                                        echo '<tr>';
                                        echo '<td align="center">' . $row2['nim'] . '</td>';
                                        echo '<td align="center">' . $row2['nama'] . '</td>';
                                        echo '<td align="center">' . $row2['prodi'] . '</td>';
                                        echo '<td align="center">' . $row2['no_loker'] . '</td>';
                                        echo '<td align="center">' . $row2['status'] . '</td>';
                                        echo "<td align='center'><a href=edit.php?id=".$row2['id']."><img src='images/edit.png'></a><a href=hapus.php?id=".$row2['id']."><img src='images/delete.png'></a></td>";
                                        echo '</tr>';
                                    }
                                    ?>
                                </table>
                                <a href="add.php">Tambah Data</a>
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