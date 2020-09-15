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

    <title>Edit Profil</title>

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
                    <h1 class="page-header">Profil Admin</h1>
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
                                            <label>Masukan Password Lama</label>
                                            <input type="password" class="form-control" name="pass">
                                        </div>
                                        <div class="form-group">
                                            <label>Masukan Password Baru (Harus lebih Dari 6 Karakter)</label>
                                            <input type="password" class="form-control" name="pass2">
                                        </div>
                                        <div class="form-group">
                                            <label>Konfirmasi Password Baru</label>
                                            <input type="password" class="form-control" name="konfpass">
                                        </div>
                                        <input type="submit" class="btn btn-default" name="submit" value="Simpan">
                                        <input type="submit" class="btn btn-default" name="cancel" value="Batal">
                                    </form>
                                </div>
                                <?php
                                error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
                                include 'koneksi.php';
                                $query = "select id from admin";
                                $jalan = mysqli_query($conn, $query);
                                $hasil = mysqli_fetch_array($jalan);

                                $oldpass = $_POST['pass'];
                                $newpass = $_POST['pass2'];
                                $konfpass = $_POST['konfpass'];
                                $submit = $_POST['submit'];
                                $batal = $_POST['cancel'];

                                if ($submit) {
                                    $cek = "select pwd from admin where pwd='$oldpass'";
                                    $run = mysqli_query($conn, $cek);
                                    if ($run->num_rows) {
                                        if (strlen($newpass) >= 6) {
                                            if ($newpass == $konfpass) {
                                                $id_user = $hasil['id'];
                                                $sql = "update admin set pwd='$newpass' where id = '$id_user'";
                                                $upd = mysqli_query($conn, $sql);
                                                if ($upd) {
                                                    ?>
                                                        <script>alert("Password Berhasil Diubah");
                                                        document.location='profil.php'</script>
                                                    <?php
                                                }
                                                else {
                                                    ?>
                                                        <script>alert("Password Gagal Diubah");</script>
                                                    <?php
                                                }
                                            }
                                            else {
                                                ?>
                                                    <script>alert("Konfirmasi password tidak cocok");</script>
                                                <?php
                                            }
                                        }
                                        else {
                                            ?>
                                                <script>alert("Minimal password baru adalah 5 karakter");</script>
                                            <?php
                                        }
                                    }
                                    else {
                                        ?>
                                            <script>alert("Password lama tidak cocok");</script>
                                        <?php
                                    }
                                }
                                else if ($batal) {
                                    ?>
                                        <script>
                                            document.location="profil.php";
                                        </script>
                                    <?php
                                }
                                ?>
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
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>
