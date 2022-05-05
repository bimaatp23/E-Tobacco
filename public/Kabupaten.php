<?php
	include 'Koneksi.php';
	echo "<option value=''>Kabupaten</option>";
	$query = "SELECT * FROM kabupaten";
	$dewan1 = $db1->prepare($query);
	$dewan1->execute();
	$res1 = $dewan1->get_result();
	while ($row = $res1->fetch_assoc()) {
		echo "<option value='" . $row['id'] . "'>" . $row['nama'] . "</option>";
	}
?>