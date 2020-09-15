<?php
include "koneksi.php";
$del=$_GET['del'];
$sql=" delete from artikel where id_artikel='$del' ";
$run=mysqli_query($conn, $sql);

if ($run) {
	?>
	<script>
		alert("Data Berhasil Dihapus");
		document.location='editberita.php';
	</script><?php
}
else {
	?>
	<script>
		alert("Data Gagal Dihapus");
		document.location='editberita.php';
	</script><?php
}
?>