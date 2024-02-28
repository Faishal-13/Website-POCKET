<?php
	//koneksi ke database
	$konek = mysqli_connect("localhost", "id21937907_root", "(Itera_2223_02_012)", "id21937907_tb_nilai");

	//baca isi tabel label
	$sql = mysqli_query($konek, "select * from tb_nilai  order by ID desc");
	$data = mysqli_fetch_array($sql);
	$label = $data["label"];
	if($label=="") $label = "Objek Tidak Terdeteksi";
	echo $label ;
?>