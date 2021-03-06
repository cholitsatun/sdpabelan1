<!DOCTYPE html>
<?php
error_reporting(E_ALL ^ E_NOTICE);
include "konektor.php";
 ?>
<html lang="en">
<head>
	<title>SD N PABELAN 01</title>
	<meta charset="UTF-8">
	<meta name="description" content="Unica University Template">
	<meta name="keywords" content="event, unica, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->
	<link href="img/favicon.ico" rel="shortcut icon"/>

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/themify-icons.css"/>
	<link rel="stylesheet" href="css/animate.css"/>
	<link rel="stylesheet" href="css/owl.carousel.css"/>
	<link rel="stylesheet" href="css/style.css"/>
	<link rel="stylesheet" href="plugin/datatables.min.css">	
</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>
	<!-- header section -->
	<header class="header-section">
		<div class="container">
			<!-- logo -->
			<a href="index.html"><img width='292px' height='58px' src="img/logo.png" alt=""></a>
			<div class="nav-switch">
				<i class="fa fa-bars"></i>
			</div>
			<div class="header-info">

			</div>
		</div>
	</header>
	<!-- header section end-->


	<!-- Header section  -->
	<nav class="nav-section">
		<div class="container">

			<div class="scrollmenu">
				<a href="index.php">Home</a>
				<div class="dropdown">
					<button class="dropbtn">Profil</button>
					<div class="dropdown-content">
						<a href="index.php#visi">Visi dan Misi</a>
						<a href="about.php">Identitas Sekolah</a>
						
						
					</div>
				</div>
				<a href="guru.php">Guru</a>
				<a href="siswa.php">Siswa</a>
				<a href="blog.php">Artikel</a>
				<a href="index.php#komen">Kritik Dan Saran</a>
				<a href="admin/login/">Login Admin</a>
			</div>
	</nav>
	<!-- Header section end -->



	<!-- Breadcrumb section -->
	<div class="site-breadcrumb">
		<div class="container">
			<a href="#"><i class="fa fa-home"></i> Home</a> <i class="fa fa-angle-right"></i>
			<span>Siswa</span>
		</div>
	</div>
	<!-- Breadcrumb section end -->

<div class="container">
  <div class="section-title text-center">
    <h3>DIREKTORI SISWA</h3>
  </div>
  <form role="form" action="siswa.php" method="get">
                                        <div class="form-group">
                                            <label>Pilih Kelas</label><br>
                                            <select class='form-control' name = 'kelas'>
                                                <option value="" selected="">-- Pilih Kelas --</option>
                                            <?php
                                            //error_reporting(E_ALL ^ E_NOTICE ^ E_DEPRECATED);
                                            include "koneksi.php";
                                            $query2=" select * from siswa group by kelas order by kelas ASC ";
                                            $jalan=mysqli_query($conn, $query2);
                                            while ($data1=mysqli_fetch_array($jalan)) {
                                                echo "
                                                <option value='$data1[kelas]'>$data1[kelas]</option>
                                            ";
                                        }
                                            ?>
                                            </select>
                                            <input type="submit" name="submit" value="submit" class="btn btn-default">  
                                            <input type="submit" name="all" value="Tampilkan semua data" class="btn btn-default"><br><br>
                                            <?php
                                            $kelas = $_GET['kelas'];
                                            $submit = $_GET['submit'];
                                            $all = $_GET['all'];
                                            ?>
                                            <h4>Daftar Siswa Kelas <?php echo "$kelas"; ?> </h4>
                                        </div>
                                    </form>
	<div class="row">
		<div class="col-lg-12 col-sm-12">
			<table id="tabel-data" class="table table-striped table-bordered" width="100%" cellspacing="0">
				<thead>

					<tr>
						<th>NIS</th>
						<th>Nama</th>
						<th>Nama Guru</th>
						<th>Kelas</th>
						<th>Tanggal Lahir</th>
					</tr>
				</thead>
				<tbody>
					<?php
					error_reporting(E_ALL ^ E_NOTICE ^ E_DEPRECATED);
													if ($submit) {
														$query = "select * from siswa, guru where siswa.id_guru=guru.id_guru and kelas = $kelas order by siswa.nama ASC";
													}
													else if ($all) {
														?>
											                <script>
											                    document.location="siswa.php";
											                </script>
											            <?php
													}
													else {
														$query = "select * from siswa, guru where siswa.id_guru=guru.id_guru order by siswa.kelas ASC";
													}
													$hasil = mysqli_query($conn, $query);
													//if ( mysqli_num_rows($hasil) > 0){
														while ($data = mysqli_fetch_array($hasil)) {
															echo
															'
															<tr>
															<td>'.$data['nis'].'</td>
															<td>'.$data['nama'].'</td>
															<td>'.$data['namaguru'].'</td>
															<td>'.$data['kelas'].'</td>
															<td>'.$data['tgl_lahir'].'</td>
															</tr>

															';
														}
													//}
												 ?>

				</tbody>
			</table>
		</div>
	</div>
</div>


	
<!-- Footer section -->
	<footer class="footer-section">
		<div class="container footer-top">
			<div class="row">
				<!-- widget -->
				<div class="col-sm-6 col-lg-3 footer-widget">
					<div class="about-widget">
						<img src="img/logo.png" alt="">
						<p>Akhlak mulia, cakap, cerdas dan Taqwa</p>
						
					</div>
				</div>
				<!-- widget -->
				<div class="col-sm-6 col-lg-3 footer-widget">
					<h6 class="fw-title">USEFUL LINK</h6>
					<div class="dobule-link">
						<ul>
							<li><a href="about.php">Identitas Sekolah</a></li>
							<li><a href="visimisi.php">Visi dan Misi</a></li>
							
							<li><a href="guru.php">Guru</a></li>
							<li><a href="siswa.php">Siswa</a></li>
							<li><a href="blog.php">Artikel</a></li>
						</ul>
						
					</div>
				</div>
				<!-- widget -->
				<div class="col-sm-6 col-lg-3 footer-widget">
					<h6 class="fw-title">RECENT POST</h6>
					<ul class="recent-post">
						<?php  
						require_once 'konektor.php';
						$footer="select * from artikel order by tanggal desc limit 2";
						$sqlfooter = mysqli_query($conn, $footer);
						while ($beritafooter = mysqli_fetch_array($sqlfooter)) { ?>

					
						<li>
							<div class="col-sm-12"><p><?php echo $beritafooter['judul'] ?></p></div>
							<span><i class="fa fa-clock-o"></i><?php echo date(' j F Y',strtotime($beritafooter['tanggal']))?></span>
						</li>
						<?php } ?>
					</ul>
				</div>
				<!-- widget -->
				<div class="col-sm-6 col-lg-3 footer-widget">
					<h6 class="fw-title">CONTACT</h6>
					<ul class="contact">
						<li><p><i class="fa fa-map-marker"></i> Jl. A. Yani No. 219, Kartasura</p></li>
						<li><p><i class="fa fa-phone"></i> (0271) 726415</p></li>
						<li><p><i class="fa fa-envelope"></i> infodeercreative@gmail.com</p></li>
						<li><p><i class="fa fa-clock-o"></i> Monday - Saturday, 07:00AM - 01:00 PM</p></li>
					</ul>
				</div>
			</div>
		</div>
		<!-- copyright -->
		<div class="copyright">
			<div class="container">
				<p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
			</div>		
		</div>
	</footer>
	<!-- Footer section end-->



	<!--====== Javascripts & Jquery ======-->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.countdown.js"></script>
	<script src="js/masonry.pkgd.min.js"></script>
	<script src="js/magnific-popup.min.js"></script>
	<script src="js/main.js"></script>
	
</body>
</html>