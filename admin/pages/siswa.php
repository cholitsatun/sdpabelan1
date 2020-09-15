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

    <title>Data Siswa</title>

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
                    <h1 class="page-header">Data Siswa SDN Pabelan 01</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <form role="form" name="input" action="<?php $_SERVER['PHP_SELF'];?>" method="post" enctype="multipart/form-data">
			<input type="submit" name="input" class="btn btn-default" value="Input Siswa"><br><br>
            </form>
            <?php
            error_reporting(E_ALL ^ E_NOTICE ^ E_DEPRECATED);
            $input=$_POST['input'];
            if ($input) {
                ?>
                <script>
                    document.location="input_siswa.php";
                </script>
            <?php
            }
            ?>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                <div class="col-lg-6">
                                    <form role="form" action="siswa.php" method="get">
                                        <div class="form-group">
                                            <label>Pilih Kelas</label><br>
                                            <select class='form-control' name = 'kelas'>
                                                <option value="" selected="">-- Pilih Kelas --</option>
                                            <?php
                                            //error_reporting(E_ALL ^ E_NOTICE ^ E_DEPRECATED);
                                            include "koneksi.php";
                                            $query=" select * from siswa group by kelas order by kelas ASC ";
                                            $jalan=mysqli_query($conn, $query);
                                            while ($data1=mysqli_fetch_array($jalan)) {
                                                echo "
                                                <option value='$data1[kelas]'>$data1[kelas]</option>
                                            ";
                                        }
                                            ?>
                                            </select>
                                            <input type="submit" name="submit" value="submit" class="btn btn-default"><br><br>
                                            <?php
                                            error_reporting(E_ALL ^ E_NOTICE ^ E_DEPRECATED);
                                            $kelas = $_GET['kelas'];
                                            $submit = $_GET['submit'];
                                            ?>
                                            <h4>Daftar Siswa Kelas <?php echo "$kelas"; ?> </h4>
                                        </div>
                                    </form>
                                </div>

                                    <tr>
                                        <th>No</th>
                                        <th>NIS</th>
                                        <th>Nama Siswa</th>
										<th>Kelas</th>
										<th>Tanggal Lahir</th>
										<th>Nama Wali</th>
                                        <th>Wali Kelas</th>
                                        <th>Ubah</th>
                                        <th>Hapus</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    error_reporting(E_ALL ^ E_NOTICE ^ E_DEPRECATED);
                                    include "koneksi.php";
                                    $no=1;
                                        if ($submit){
                                             $sql = "select * from siswa where kelas = $kelas order by siswa.nama ASC ";

                                        }
                                        else {
                                             $sql = "select * from siswa order by siswa.nama ASC ";
                                        }
                                       
                                        $run = mysqli_query($conn, $sql);
                                        while ($data=mysqli_fetch_array($run)) {
                                            ?>
                                    <tr class='odd gradeX' id='tabel'>
                                        <td class='center'><?php echo $no ;  ?></td>
                                        <td class='center'><?php echo $data[nis] ;?></td>
                                        <td class='center'><?php echo $data[nama] ;?></td>
                                        <td class='center'><?php echo $data[kelas] ;?></td>
										<td class='center'><?php echo $data[tgl_lahir] ;?></td>
										<td class='center'><?php  echo $data[nama_wali]; ?></td>
										<td class='center'><?php 
                                                
                                                $id = $data[id_guru] ;
                                                $a= "SELECT * from guru where id_guru =  '$id' ";
                                                $b = mysqli_query($conn,$a);
                                                echo mysqli_fetch_array($b)[namaguru];
                                                ?></td>
                                        <td class='center'><a href='edit_siswa.php?upd=<?php echo $data[nis]; ?>'><i class='fa fa-pencil fa-fw'></i></a></td>
                                        <td class='center'><a href='del_siswa.php?del=<?php echo $data[nis]; ?>'><i class='fa fa-trash-o fa-fw'></i></a></td>
                                    </tr>
                                    <?php
                                    $no++;
                                }
                            
                            ?>
                                </tbody>
                            </table>
                            <!-- /.table-responsive -->
                            
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            
            
            <!-- /.row -->
                <!-- /.col-lg-6 -->
               
                <!-- /.col-lg-6 -->
            
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->
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