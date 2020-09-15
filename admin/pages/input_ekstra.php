<!DOCTYPE html>
<html lang="en">
<?php
error_reporting(E_ALL ^ E_NOTICE ^ E_DEPRECATED);
session_start();
$status=$_SESSION['username'];
if($status!="admin"){
    ?>
    <script>alert("Silahkan Login Untuk Mengakses Halaman");document.location='../login/';</script>
    <?php
}
?>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Input Ekstrakulikuler</title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	<link rel="icon" type="image/ico" href="img/logo.png" />

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <p class="navbar-brand" >Halaman Admin SD Pabelan 01</p>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                    
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <?php
                        include 'koneksi.php';
                        $profil = "select nama from admin where id = '99'";
                        $kode = mysqli_query($conn, $profil);
                        $exe = mysqli_fetch_array($kode);
                        ?>
                        <li>
                            <center>
                                <strong><?php echo $exe[nama]; ?></strong>
                            </center>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="profil.php">
                                <strong>Edit Profil</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="logout.php">
                                <strong>Logout</strong>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-alerts -->
                </li>
               
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="siswa.php"><i class="fa fa-user fa-fw"></i> Data Siswa </a>
                        </li>
                        <li>
                            <a href="guru.php"><i class="fa fa-suitcase fa-fw"></i> Data Guru </a>
                        </li>
                        <li>
                            <a href="forms.php"><i class="fa fa-edit fa-fw"></i>Input Artikel</a>
                        </li>
                        <li>
                            <a href="editberita.php"><i class="fa fa-file-text fa-fw"></i> Artikel </a>
                        </li>
                        <li>
                            <a href="editkategori.php"><i class="fa fa-list fa-fw"></i> Kategori</a>
                        </li>
                        <li>
                            <a href="ekstrakulikuler.php"><i class="fa fa-child fa-fw"></i> Ekstrakulikuler </a>
                        </li>
                        <li>
                            <a href="kritiksaran.php"><i class="fa fa-comment fa-fw"></i> Kritik Saran</a>
                        </li>
                        
                            
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Input Data Ekstrakulikuler</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" action="input_ekstra.php" method="post" enctype="multipart/form-data">
										<div class="form-group">
                                            <label>Masukan Nama Ekstrakulikuler</label>
                                            <input type="text" class="form-control" name="nama_ekstra">
                                        </div>
										<div class="form-group">
                                            <label>Masukan Jadwal Ekstrakulikuler</label>
                                            <input type="text" class="form-control" name="jadwal_ekstra">
                                        </div>
										<div class="form-group">
                                            <label>Upload Foto</label>
                                            <input type="file" class="form-control" name="foto_ekstra">
                                        </div>
										<div class="form-group">
                                            <label>Masukan Guru Pengampu</label>
                                            <select class="form-control" name = "guru_ekstra">
                                                <option value ="" selected="">--Pilih Guru Pengampu--</option>
                                                <?php
                                                ob_start();
                                                include 'koneksi.php';
                                                $sql=" select *from guru ";
                                                $run=mysqli_query($conn, $sql);
                                                while ($hasil=mysqli_fetch_array($run)){
                                                    echo "
                                                <option value ='$hasil[id_guru]'>$hasil[namaguru]</option>
                                                ";
                                                }
                                                ob_flush();
                                                ?>
                                            </select>
                                        </div>
                                        <input type="submit" name="submit" class="btn btn-default" value="Submit">
                                        <input type="submit" name="batal" class="btn btn-default" value="Batal">
                                    </form>
                                </div>
                                <!-- /.col-lg-6 (nested) -->

                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <?php
    error_reporting(E_ALL ^ E_NOTICE ^ E_DEPRECATED);
    include 'koneksi.php';
    $ekskul = ($_POST['nama_ekstra']);
    $jadwal = ($_POST['jadwal_ekstra']);
    $folder = 'img/';
    $foto = $_FILES['foto_ekstra']['name'];
    $upload = $folder.$foto;
    $guru = ($_POST['guru_ekstra']);
    $submit=$_POST['submit'];
    $batal=$_POST['batal'];

    if ($submit) {
        $query = "insert into ekskul(nama_ekskul, jadwal, foto_ekskul, id_guru) values('$ekskul', '$jadwal', '$upload', '$guru')";
        $run = mysqli_query($conn, $query);
        move_uploaded_file($_FILES['foto_ekstra']['tmp_name'],$upload);
        if ($run) {
            ?>
            <script>
                alert('Data Berhasil Dimasukkan');
                document.location="input_ekstra.php";
            </script>
            <?php
        }
        else {
            ?>
            <script>
                alert('Data Gagal Dimasukkan');
            </script>
            <?php
        }
    }
    else if ($batal) {
            ?>
                <script>
                    document.location="ekstrakulikuler.php";
                </script>
            <?php
        }
    ?>
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>
