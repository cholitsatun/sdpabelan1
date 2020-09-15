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

    <title>Edit Siswa</title>

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
<?php
error_reporting(E_ALL ^ E_NOTICE ^ E_DEPRECATED);
include 'koneksi.php';
$upd = $_GET['upd'];
$sql = " select * from siswa, guru where siswa.id_guru=guru.id_guru and siswa.nis = '$upd' ";
$query = mysqli_query($conn, $sql);
$hasil = mysqli_fetch_array($query);
?>
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
                    <h1 class="page-header">Ubah Data Siswa</h1>
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
                                    <form role="form" method="post" action="<?php $_SERVER['PHP_SELF'];?>" enctype="multipart/form-data" name="update">
                                        <div class="form-group">
                                            <label>NIS</label>
                                            <input type="text" class="form-control" name="nis" value="<?php echo $hasil['nis']; ?>">
                                        </div>
										<div class="form-group">
                                            <label>Nama Siswa</label>
                                            <input type="text" class="form-control" name="nama" value=" <?php echo $hasil['nama']; ?> ">
                                        </div>
										
										<div class="form-group">
                                            <label>Tanggal Lahir</label>
                                            <input type="date"  class="form-control" name="tgl_lahir" value=<?php echo $hasil['tgl_lahir']; ?> >
                                        </div>
                                        <div class="form-group">
                                            <label>Kelas</label><br>
                                            <select class="form-control" name = "kelas">
                                                <option value='<?php echo $hasil['kelas']; ?>' selected><?php echo $hasil['kelas']; ?></option>
                                                <option>-----------------------------------------------------------------------------------------</option>
                                                <br>
                                                <?php
                                                error_reporting(E_ALL ^ E_NOTICE ^ E_DEPRECATED);
                                                include "koneksi.php";
                                                $query2=" select * from siswa group by kelas order by kelas ASC ";
                                                $jalan2=mysqli_query($conn, $query2);
                                                while ($data1=mysqli_fetch_array($jalan2)) {
                                                    echo "
                                                    <option value='$data1[kelas]' >$data1[kelas]</option>
                                                ";
                                            }
                                                ?>
                                            </select>
                                        </div>
										<div class="form-group">
                                            <label>Nama Wali</label>
                                            <input type="text" class="form-control" name="nama_wali" value=" <?php echo $hasil['nama_wali']; ?> ">
                                        </div>
										<div class="form-group">
                                            <label>Wali Kelas</label>
                                            <select class="form-control" name = "guru">
                                                <option value='<?php echo $hasil['id_guru']; ?>' selected><?php echo $hasil['namaguru']; ?></option>
                                                <option>-----------------------------------------------------------------------------------------</option>
                                                <br>
                                                <?php
                                                    ob_start();
                                                    error_reporting(E_ALL ^ E_NOTICE ^ E_DEPRECATED);
                                                    include "koneksi.php";
                                                    $sql3="SELECT * FROM guru ORDER BY 'id_guru' ASC";
                                                    $jalan= mysqli_query($conn, $sql3);
                                                    while ($data= mysqli_fetch_array($jalan)) {
                                                        echo "
                                                        <option value='$data[id_guru]'>$data[namaguru]</option>
                                                        ";
                                                
                                                    }
                                                    ob_flush();
                                                ?>
                                            </select>
                                        </div>
                                        <input type="submit" name="submit" class="btn btn-default" value="Ubah">
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
    include 'koneksi.php';
    $nis = ($_POST['nis']);
    $nama = ($_POST['nama']);
   
    $tgl_lahir = ($_POST['tgl_lahir']);
    $kelas = ($_POST['kelas']);
    $nama_wali = ($_POST['nama_wali']);
 
    $wali_kelas = ($_POST['guru']);
    $submit = $_POST['submit'];
    $batal=$_POST['batal'];

    if ($submit) {
        $sql2 = " update siswa set nis='$nis', nama='$nama', kelas='$kelas', tgl_lahir='$tgl_lahir', nama_wali='$nama_wali',  id_guru='$wali_kelas' where nis='$upd' ";
        $run2 = mysqli_query($conn, $sql2);
        if ($run2) {
            ?>
                <script>alert("Data Berhasil Diubah");
                document.location='siswa.php'</script>
            <?php
        }
        else {
            ?>
                <script>alert("Perubahan Gagal");</script>
            <?php
        }  
    }
    else if ($batal) {
            ?>
                <script>
                    document.location="siswa.php";
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