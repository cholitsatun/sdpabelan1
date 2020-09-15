<?php
include "koneksi.php";
$del=$_GET['del2'];
$sql=" delete from guru where id_guru='$del' ";
$run=mysqli_query($conn, $sql);

if ($run) {
	?>
	<script>
		alert("Data Berhasil Dihapus");
		document.location='guru.php';
	</script><?php
}
else {
	?>
	<script>
		alert("Data Gagal Dihapus");
		document.location='guru.php';
	</script><?php
}
?>