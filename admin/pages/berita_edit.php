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

    <title>Edit Artikel</title>

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
$sql = " select * from artikel, kategori where artikel.id_kategori=kategori.id_kategori and id_artikel = '$upd' ";
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
                    <h1 class="page-header">Ubah Data Artikel</h1>
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
                                        <?php
                                        if ($query === FALSE) {
                                            die(mysql_error());
                                        }
                                        ?>
                                        <div class="form-group">
                                            <label>ID Artikel</label>
                                            <input type="text" class="form-control" name="id_artikel" value="<?php echo $hasil['id_artikel']; ?>" readonly>
                                        </div>
										<div class="form-group">
                                            <label>Judul Artikel</label>
                                            <input type="text" class="form-control" name="judul" value="<?php echo $hasil['judul']; ?>">
                                        </div>
										<div class="form-group">
                                            <label>Isi Konten</label>
                                            <textarea class="form-control" name="isi_berita"><?php echo $hasil['konten']; ?></textarea>
                                        </div>
										<div class="form-group">
                                            <label>Foto</label><br>
                                            <img src="<?php echo $hasil['foto_artikel']; ?>" height="100" width="100"><br>
                                            <input type="checkbox" name="ubah_foto" > <i>Ceklis jika ingin mengubah foto</i><br>
                                            <input type="file" class="form-control" name="foto">
                                        </div>
										<div class="form-group">
                                            <label>Kategori</label>
                                            <select class="form-control" name = "kategori">
                                                <option value='<?php echo $hasil['id_kategori']; ?>' selected><?php echo $hasil['kategori']; ?></option>
                                                <option>-----------------------------------------------------------------------------------------</option>
                                                <br>
                                                <?php
                                                error_reporting(E_ALL ^ E_NOTICE ^ E_DEPRECATED);
                                                include "koneksi.php";
                                                $query2=" select * from kategori order by kategori ASC ";
                                                $jalan2=mysqli_query($conn, $query2);
                                                while ($data1=mysqli_fetch_array($jalan2)) {
                                                    echo "
                                                    <option value='$data1[id_kategori]'>$data1[kategori]</option>
                                                ";
                                            }
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
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>
	
<?php
    include 'koneksi.php';
    $id = $_POST['id_artikel'];
    $judul = ($_POST['judul']);
    $konten = ($_POST['isi_berita']);
    $ceklis = ($_POST['ubah_foto']);
    $kategori = ($_POST['kategori']);
    $submit = $_POST['submit'];
    $batal=$_POST['batal'];

    if ($submit){
    if ($ceklis) {
        $foto = $_FILES['foto']['name'];
        $tmp = $_FILES['foto']['tmp_name'];
        $upload = 'img/'.$foto;
        if (move_uploaded_file($tmp, $upload)) {
            $sql2 = "select * from artikel where id_artikel = '$upd'";
            $query3 = mysqli_query($conn, $sql2);
            $data = mysqli_fetch_array($query3);
            if (is_file('img/'.$data['foto_artikel'])) 
                unlink('img/'.$data['foto_artikel']);

                $sql3 = " update artikel set judul='$judul', konten='$konten', foto_artikel='$upload', id_kategori='$kategori' where id_artikel='$upd' ";
                $run = mysqli_query($conn, $sql3);
                if ($run) {
                    ?>
                    <script>
                        alert('Data Berhasil Dimasukkan');
                        document.location="editberita.php";
                    </script>
                    <?php
                }
                else{
                    ?>
                    <script>
                        alert('Data Gagal Dimasukkan');
                    </script>
                    <?php
                }
        }
        else{
            ?>
                    <script>
                        alert('Maaf, Gambar gagal untuk diupload.');
                    </script>
                    <?php
        }
    }
    else{
        $sql4 = " update artikel set judul='$judul', konten='$konten', id_kategori='$kategori' where id_artikel='$upd' ";
        $run2 = mysqli_query($conn, $sql4);
        if ($run2) {
            ?>
                <script>
                    alert('Data Berhasil Dimasukkan');
                    document.location="editberita.php";
                </script>
           <?php
        }
        else{
            ?>
                <script>
                    alert('Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.');
                </script>
            <?php
        }
    }
}
else if ($batal) {
            ?>
                <script>
                    document.location="editberita.php";
                </script>
            <?php
        }
?>
    <script type="text/javascript" src="tinymce/tinymce.min.js"></script>
     <script>
        tinymce.init({
            selector:'textarea',
            height:400,
            width:600,
            menubar:false,
            media_poster: false,
            media_alt_source: false,
            plugins:[
                'advlist autolink link lists charmap print preview anchor textcolor',
                'searchreplace visualblocks code fullscreen',
                'insertdatetime table contextmenu paste code help tabfocus'
            ],
            toolbar:'undo redo | styleselect | bold italic | alignleft aligncenter alignriht alignjustify | bullist numlist outdent indent | removeformat | preview | help'

        });

    </script>

</body>

</html>