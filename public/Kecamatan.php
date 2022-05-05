<?php
	include 'Koneksi.php';
	$kabupaten = $_POST['kabupaten'];
	echo "<option value=''>Kecamatan</option>";
	$query = "SELECT * FROM kecamatan WHERE id_kabupaten=?";
	$dewan1 = $db1->prepare($query);
	$dewan1->bind_param("i", $kabupaten);
	$dewan1->execute();
	$res1 = $dewan1->get_result();
	while ($row = $res1->fetch_assoc()) {
		echo "<option value='" . $row['id'] . "'>" . $row['nama'] . "</option>";
	}
?>