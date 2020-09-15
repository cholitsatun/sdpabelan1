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

    <title>Edit Guru</title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">


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
                            <a class="text-center" href="#">
                                <strong><?php echo $exe[nama]; ?></strong>
                            </a>
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
                    <h1 class="page-header">Ubah Data Guru</h1>
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
                                    <?php
                                    // ob_start();
                                    // error_reporting(E_ALL ^ E_NOTICE ^ E_DEPRECATED);
                                     include 'koneksi.php';
                                    $upd=$_GET['upd'];
                                    $query=" SELECT * from guru WHERE  id_guru ='$upd' ";
                                     $jalan=mysqli_query($conn, $query);
                                   while( $hasil=mysqli_fetch_array($jalan)){
                                    // ob_flush();
                                    ?>
                                    <form role="form" action="" method="post">
                                        <div class="form-group">
                                            <label>NIP</label>
                                            <input type="text" class="form-control" name="nip" value="<?php echo $hasil[nip]; ?>">
                                        </div>
										<div class="form-group">
                                            <label>Nama Guru</label>
                                            <input type="text" class="form-control" name="nama" value="<?php echo $hasil[namaguru]; ?>">
                                        </div>
										<div class="form-group">
                                            <label>Jabatan</label>
                                            <textarea class="form-control" name="jabatan"><?php echo $hasil[jabatan]; ?></textarea>
                                        </div>
										<div class="form-group">
                                            <label>Tingkat Pendidikan</label>
                                            <input type="text"  class="form-control" name="tgkt_pddkn" value=<?php echo $hasil[t_pddkn]; ?> >
                                        </div>
										<div class="form-group">
                                            <label>Jurusan</label>
                                            <input type="text" class="form-control" name="jurusan" value="<?php echo $hasil[jurusan]; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Tahun Lulus</label>
                                            <input type="number" class="form-control" name="thn_lulus" value="<?php echo $hasil[thn_lulus]; ?>">
                                        </div>
                                        <input type="submit" name="submit" class="btn btn-default" value="Submit">
                                        <input type="submit" name="batal" class="btn btn-default" value="Batal">
                                    </form>
                                <?php } ?>
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
    $id_guru = $hasil['id_guru'];
    $nip=($_POST['nip']);
    $nama=($_POST['nama']);
    $jabatan=($_POST['jabatan']);
    $tgkt_pddkn=($_POST['tgkt_pddkn']);
    $jurusan=($_POST['jurusan']);
    $thn_lulus=($_POST['thn_lulus']);
    $submit=$_POST['submit'];
    $batal=$_POST['batal'];
if ($_POST['submit']) {
    $sql = "UPDATE `guru` SET `nip`='$nip',`namaguru`='$nama',`jabatan`='$jabatan',`t_pddkn`='$tgkt_pddkn',`jurusan`='$jurusan',`thn_lulus`='$thn_lulus' WHERE `id_guru` ='$upd'";
    $query = mysqli_query($conn, $sql);
    if ($query) {
        echo "<script>window.location='guru.php';</script>";
    }

    
}
else if ($batal) {
            ?>
                <script>
                    document.location="guru.php";
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
