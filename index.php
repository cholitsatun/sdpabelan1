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
	<link rel="stylesheet" href="css/magnific-popup.css"/>
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


	<!-- Hero section -->
	<section class="hero-section">
		<div class="hero-slider owl-carousel">
			<div class="hs-item set-bg" data-setbg="img/hero-slider/sd2.jpg">
				<div class="hs-text">
					<div class="container">
						<div class="row">
							<div class="col-lg-8">
								<h2 class="hs-title">SELAMAT DATANG DI WEBSITE</h2>
								<h2 class="hs-title">SD NEGERI PABELAN 01</h2>
								
								
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="hs-item set-bg" data-setbg="img/hero-slider/sd3.jpg">
				<div class="hs-text">
					<div class="container">
						<div class="row">
							<div class="col-lg-8">
								<h2 class="hs-title">SELAMAT DATANG DI WEBSITE</h2>
								<h2 class="hs-title">SD NEGERI PABELAN 01</h2>
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Hero section end -->


	
	

	
	<!-- Enroll section -->
		<section class="enroll-section spad set-bg" data-setbg="img/sd1.jpg" id="visi">
		<div class="container">
			<div class="row">
				<div class="col-lg-5">
					<div class="section-title text-white">
						<h3>VISI DAN MISI</h3>
						<p>Berikut Visi dan Misi SDN PABELAN 01 :</p>
					</div>
					<div class="enroll-list text-white">
						<div class="enroll-list-item">
							<span>1</span>
							<h5>Visi</h5>
							<p>Membentuk manusia berakhlak mulia, cakap, cerdas dan trampil yang dilandasi Iman dan Taqwa kepada Tuhan Yang Maha Esa.</p>
						</div>
						<div class="enroll-list-item">
							<span>2</span>
							<h5>Misi</h5>
							<p>Dengan semangat kebersamaan kita tingkatkan mutu pendidikan dan sumber daya manusia yang maju/dinamis sesuai dengan tuntutan perkembangan jaman</p>
						</div>

					</div>
				</div>
				
			</div>
		</div>
	</section>
	<!-- Enroll section end -->


	<!-- Courses section -->
	<section class="courses-section spad">
		<div class="container">
			<div class="section-title text-center">
				<h3>EKSTRAKURIKULER</h3>
			</div>
			<div class="row">
				<!-- course item -->
				<?php
				// error_reporting(E_ALL ^ E_NOTICE ^ E_DEPRECATED);
				include "koneksi.php";
				$ekstra = "select * from ekskul, guru where ekskul.id_guru=guru.id_guru";
				$runekstra = mysqli_query($conn, $ekstra);
				
				while ($dataekstra = mysqli_fetch_array($runekstra)) {
					echo "
				
				<div class='col-lg-4 col-md-6 course-item'>
					<div class='course-thumb'>
						<img src='admin/pages/$dataekstra[foto_ekskul]' height='250' width='370' alt=''>
						<div class='course-cat'>
							<span>$dataekstra[nama_ekskul]</span>
						</div>
					</div>
					<div class='course-info'>
						<div class='date'><i class='fa fa-clock-o'></i> "; echo $dataekstra['jadwal']; echo "</div>
						<h4>Guru Pengampu :<br>$dataekstra[namaguru]</h4>
					</div>
				</div>
				";
				}
				?>
			</div>
		</div>
	</section>
	<!-- Courses section end-->

	<!-- Gallery section -->
	<div class="gallery-section">
		<div class="gallery">
			<div class="grid-sizer"></div>
			<div class="gallery-item gi-big set-bg" data-setbg="img/galeri/1.jpg">
				<a class="img-popup" href="img/galeri/1.jpg"><i class="ti-plus"></i></a>
			</div>
			<div class="gallery-item set-bg" data-setbg="img/galeri/2.jpg">
				<a class="img-popup" href="img/galeri/2.jpg"><i class="ti-plus"></i></a>
			</div>
			<div class="gallery-item set-bg" data-setbg="img/galeri/3.jpg">
				<a class="img-popup" href="img/galeri/3.jpg"><i class="ti-plus"></i></a>
			</div>
			<div class="gallery-item gi-long set-bg" data-setbg="img/galeri/5.jpg">
				<a class="img-popup" href="img/galeri/5.jpg"><i class="ti-plus"></i></a>
			</div>
			<div class="gallery-item gi-big set-bg" data-setbg="img/galeri/8.jpg">
				<a class="img-popup" href="img/galeri/8.jpg"><i class="ti-plus"></i></a>
			</div>
			<div class="gallery-item gi-long set-bg" data-setbg="img/galeri/4.jpg">
				<a class="img-popup" href="img/galeri/4.jpg"><i class="ti-plus"></i></a>
			</div>
			<div class="gallery-item set-bg" data-setbg="img/galeri/6.jpg">
				<a class="img-popup" href="img/galeri/6.jpg"><i class="ti-plus"></i></a>
			</div>
			<div class="gallery-item set-bg" data-setbg="img/galeri/7.jpg">
				<a class="img-popup" href="img/galeri/7.jpg"><i class="ti-plus"></i></a>
			</div>
		</div>
	</div>
	<!-- Gallery section -->

	<!-- Blog section -->
	<section class="blog-section spad">
		<div class="container">
			<div class="section-title text-center">
				<h3>ARTIKEL TERBARU</h3>
			</div>
			<div class="row">
				<?php
					require_once "koneksi.php";
					$urut="select * from artikel order by tanggal desc limit 4";
					$sql = mysqli_query($conn, $urut);
					while ($isiberita = mysqli_fetch_array($sql)) 
					{
						$kalimat= $isiberita['konten'];
						$jumlahkarakter=100;
						$tampilan = substr($kalimat, 0, $jumlahkarakter);

						   
				?>
				<div class="col-xl-6">
					
					<div class="blog-item">
						<div class="blog-thumb set-bg" data-setbg="admin/pages/<?php  error_reporting(E_ALL ^ E_NOTICE ^ E_DEPRECATED); echo $isiberita['foto_artikel'];?>"></div>
						<div class="blog-content">
							<h4><a href="single-blog.php?id_artikel= <?php echo $isiberita['id_artikel']?>"><?php echo $isiberita['judul'] ?></a></h4>
							<div class="blog-meta">
								<span><i class="fa fa-calendar-o"></i><?php echo date(' j F Y',strtotime($isiberita['tanggal']))?></span>
							</div>
							<p><?php echo $tampilan;?>
							<a href="single-blog.php?id_artikel= <?php echo $isiberita['id_artikel']?>">...selengkapnya</a></p>
						</div>
					</div>

					
				
				</div>
				<?php } ?>
			
		</div>
	</section>
	<!-- Blog section -->


		<section class="newsletter-section" id="komen">
		<div class="container">
			<div class="row">
				<div class="col-md-5 col-lg-7">
					<div class="section-title mb-md-0">
					<h3>Kritik dan Saran</h3>
					<p>Masukan kritik dan saran tentang website maupun sekolah</p><br>
				</div>
				<div class="col-md-7 col-lg-5">
					<div>
						<form class="newsletter" action="index.php#komen" method="post" enctype="multipart/form-data">
                        <table>
                            <tr>
                                <td><label>Nama</label></td>
                                <td> <input type="text" name='name' placeholder="Enter Name..."></td>
                            </tr>
                            <tr>
                                <td><label>Email</label></td>
                                <td><input type="email" name='email' placeholder="Enter Email..."></td>
                            </tr>
                            <tr>
                                <td><label>Komentar</label></td>
                                <td><textarea name='isi' cols="90" rows="10"></textarea></td>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                                <td><input type="submit" value="Kirim" name="submit" class="site-btn"></td>
                            </tr>
                        </table>
						</form>
						<?php
						error_reporting(E_ALL ^ E_NOTICE ^ E_DEPRECATED);
                        $nama = $_POST['name'];
                        $email = $_POST['email'];
                        $komen = $_POST['isi'];
                        $submit = $_POST['submit'];

                        if ($submit) {
                        	include 'koneksi.php';
                        	$query = "insert into komentar(nama, isi, email) values('$nama', '$komen', '$email')";
                        	$run = mysqli_query($conn, $query);
                        	if ($run) {
                        		?>
					            <script>
					                alert('Terima Kasih Atas Masukannya');
					            </script>
					            <?php
                        	}
                        }
                        ?>
                    </div>
				</div>
				</div>
				
			</div>
		</div>
	</section>


	<!-- Footer section -->
	<footer class="footer-section">
		<div class="container footer-top">
			<div class="row">
				<!-- widget -->
				<div class="col-sm-6 col-lg-3 footer-widget">
					<div class="about-widget">
						<img src="img/logo2.png" alt="">
						<p>Akhlak Mulia, Cakap, Cerdas dan Taqwa</p>
						
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
				<p>
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved
</p>
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