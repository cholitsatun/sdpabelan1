<?php
include "koneksi.php";
$del=$_GET['del'];
$sql=" delete from komentar where id_komen='$del' ";
$run=mysqli_query($conn, $sql);

if ($run) {
	?>
	<script>
		alert("Data Berhasil Dihapus");
		document.location='kritiksaran.php';
	</script><?php
}
else {
	?>
	<script>
		alert("Data Gagal Dihapus");
		document.location='kritiksaran.php';
	</script><?php
}
?>