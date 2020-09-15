<?php
include "koneksi.php";
$del=$_GET['del'];
$sql=" delete from kategori where id_kategori='$del' ";
$run=mysqli_query($conn, $sql);

if ($run) {
	?>
	<script>
		alert("Data Berhasil Dihapus");
		document.location='editkategori.php';
	</script><?php
}
else {
	?>
	<script>
		alert("Data Gagal Dihapus");
		document.location='editkategori.php';
	</script><?php
}
?>