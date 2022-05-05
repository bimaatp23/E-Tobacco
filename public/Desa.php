<?php
	include 'Koneksi.php';
	$kecamatan = $_POST['kecamatan'];
	echo "<option value=''>Desa</option>";
	$query = "SELECT * FROM desa WHERE id_kecamatan=?";
	$dewan1 = $db1->prepare($query);
	$dewan1->bind_param("i", $kecamatan);
	$dewan1->execute();
	$res1 = $dewan1->get_result();
	while ($row = $res1->fetch_assoc()) {
		echo "<option value='" . $row['id'] . "'>" . $row['nama'] . "</option>";
	}
?>