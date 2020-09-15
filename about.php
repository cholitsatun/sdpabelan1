<!DOCTYPE html>
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


	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

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
			<a href="index.php"><i class="fa fa-home"></i> Home</a> <i class="fa fa-angle-right"></i>
			<span>Identitas Sekolah</span>
		</div>
	</div>
	<!-- Breadcrumb section end -->


	<!-- About section -->
	<section class="about-section spad pt-0">
		<div class="container">
			<div class="section-title text-center">
				<h3>IDENTITAS SEKOLAH</h3>

			</div>
			<div class="row">
				<div class="col-lg-6 about-text">
					<h5>Profil Sekolah</h5>
					<ul style='list-style-type:disc;'>
						<li>Nama Sekolah : SD Negeri Pabelan 01</li>
						<li>NSS : 101031112007</li>
						<li>Alamat Sekolah : Jl. A. Yani No. 219, Kartasura</li>
						<li>Nomor Telepon : (0271) 726415</li>
						<li>Status Sekolah : Negeri Terakreditasi Nilai A</li>
						<li>Jumlah Guru : 12 Orang</li>
						<li>Jumlah Siswa : 124 Orang</li>
						<li>Luas Tanah Sekolah : 2.250 m2</li>
						<li>Luas Bangunan : 609 m2</li>
						<li>Status Tanah : Milik Desa</li>
					</ul>
					<h5 class="pt-4">Tujuan Sekolah</h5>
					<ol>
						<li>Memiliki jiwa toleransi ,taat dan tertib menjalankan ibadah sesuai ajaran agama yang dianut dalam praktik kehidupan sehari-hari.</li>
						<li>Menunjukkan kebiasaan hidup bersih, sehat, aman dan memanfaatkan waktu luang sesuai tuntunan agama.</li>
						<li>Memiliki kecerdasan, pengetahuan, ketrampilan,berakhlak mulia berlandaskan iman dan taqwa.</li>
						<li>Menunjukkan kecintaan dan kepedulian terhadap sesama manusia dan lingkungan sebagai mahkluk Tuhan Yang Maha Esa.</li>
						<li>Memperoleh nilai secara optimal, minimal sama dengan standar ketuntasan Belajar Minimal.</li>
					</ol>
				</div>
				<div class="col-lg-6 pt-5 pt-lg-0">
					<img src="sd/IMG_9182.JPG" alt="">
				</div>
			</div>
		</div>
	</section>
	<!-- About section end-->


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