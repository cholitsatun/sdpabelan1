<?php
include "koneksi.php";
$del=$_GET['del'];
$sql=" delete from siswa where nis='$del' ";
$run=mysqli_query($conn, $sql);

if ($run) {
	?>
	<script>
		alert("Data Berhasil Dihapus");
		document.location='siswa.php';
	</script><?php
}
else {
	?>
	<script>
		alert("Data Gagal Dihapus");
		document.location='siswa.php';
	</script><?php
}
?>