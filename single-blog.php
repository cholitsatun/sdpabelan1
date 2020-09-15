<!DOCTYPE html>
<?php
 error_reporting(E_ALL ^ E_NOTICE ^ E_DEPRECATED);
	include "konektor.php";
	//error_reporting(E_ALL ^ E_NOTICE);
    $id_artikel= $_GET['id_artikel'];
    $sql_news ="select * from artikel where id_artikel='$id_artikel'";
    $get_news=mysqli_query($conn,$sql_news);
    while($news=mysqli_fetch_array($get_news)){
    	$foto = $news[foto_artikel];
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
	<link rel="stylesheet" href="css/owl.carousel.css"/>
	<link rel="stylesheet" href="css/style.css"/>


	

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
			<span>Blog Details</span>
		</div>
	</div>
	<!-- Breadcrumb section end -->


	<!-- Blog page section  -->
	<section class="blog-page-section spad pt-0">
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<div class="post-item post-details">
						<img src="<?php echo $foto; ?>" class="post-thumb-full" alt="">
						<div class="post-content">
							<h3><a href="single-blog.html"><?php echo $news['judul']; ?></a></h3>
							<div class="post-meta">
								<span><i class="fa fa-calendar-o"></i> <?php echo date(' j F Y',strtotime($news['tanggal']))?></span>
							</div>
							<p><?php echo $news['konten']; ?></p>
							<?php  
							$id = $news['id_kategori'];
							$selectkategori = "select * from kategori where id_kategori = '$id' ";
							$sqlkategori = mysqli_query($conn, $selectkategori);
							$kategori = mysqli_fetch_array($sqlkategori);

						

							?>
							<div class="tag"><i class="fa fa-tag"></i><?php echo $kategori['kategori'] ;?></div>
						</div>
                    <?php
						}
						?>
					</div>
				</div>
				<!-- sidebar -->
				<div class="col-sm-8 col-md-5 col-lg-4 col-xl-3 offset-xl-1 offset-0 pl-xl-0 sidebar">
					<div class="widget">
						<h5 class="widget-title">Recent News</h5>
						<div class="recent-post-widget">
							<!-- recent post -->
							<div class="rp-item">
								<?php
								 error_reporting(E_ALL ^ E_NOTICE ^ E_DEPRECATED);
								$urut="select * from artikel order by tanggal desc limit 5";
						    	$sql = mysqli_query($conn, $urut);
								while ($isiberita = mysqli_fetch_array($sql)) 
						        {
						        	$foto = $isiberita[foto_artikel];
						   
						 ?>
								<div class="rp-thumb set-bg" data-setbg="<?php echo $foto ?>"></div>
								<div class="rp-content">
									<h6><a href="single-blog.php?id_artikel= <?php echo $isiberita['id_artikel']?>"><?php echo $isiberita['judul'] ?></a></h6>
									<p><i class="fa fa-clock-o"></i><?php echo date(' j F Y',strtotime($isiberita['tanggal']))?></p>
									<br>
								</div>
							<?php }?>
							</div>
						</div>
					</div>
					<!-- widget -->
					<div class="widget">
						<h4 class="widget-title">Tags</h4>
						<div class="tags">
							<?php
		                        $s = "select * from kategori";
		                        $q = mysqli_query($conn, $s);
		                        while ($a = mysqli_fetch_array($q)) {
		                        ?>
		                            <a href="kategori.php?id_kategori=<?php echo $a['id_kategori']; ?>" class="nav-link scroll"><?php echo $a['kategori']; ?></a>
		                        <?php
		                            }
		                            ?>
							
						</div>
					</div>
					<!-- widget -->
					<div class="widget">
						<h4 class="widget-title">Categories</h4>
						
						<ul>
							<?php
		                        $s = "select * from kategori";
		                        $q = mysqli_query($conn, $s);
		                        while ($a = mysqli_fetch_array($q)) {
		                        ?>
		                            <li><a href="kategori.php?id_kategori=<?php echo $a['id_kategori']; ?>" class="nav-link scroll"><?php echo $a['kategori']; ?></a></li>
		                        <?php
		                            }
		                            ?>
							
							
						</ul>
					
					</div>
					
				</div>
			</div>
		</div>
	</section>
	<!-- Blog page section end -->
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