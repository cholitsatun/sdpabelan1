<?php
include "koneksi.php";
$del=$_GET['del'];
$sql=" delete from ekskul where id_ekskul='$del' ";
$run=mysqli_query($conn, $sql);

if ($run) {
	?>
	<script>
		alert("Data Berhasil Dihapus");
		document.location='ekstrakulikuler.php';
	</script><?php
}
else {
	?>
	<script>
		alert("Data Gagal Dihapus");
		document.location='ekstrakulikuler.php';
	</script><?php
}
?>