<?php
	//koneksi ke database
    $konek = mysqli_connect("localhost", "id21937907_root", "(Itera_2223_02_012)", "id21937907_tb_nilai");

	//baca isi tabel prediksi
	$sql = mysqli_query($konek, "select * from tb_nilai  order by ID desc");
	$data = mysqli_fetch_array($sql);
	$prediksi = $data["prediksi"];
	if($prediksi=="") $prediksi = 0;
	echo $prediksi ;
?>