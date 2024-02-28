<?php
$konek = mysqli_connect("localhost", "id21937907_root", "(Itera_2223_02_012)", "id21937907_tb_nilai");


// Baca data yang dikirim oleh nodemcu
$label = $_GET["label"];
$prediksi = $_GET["prediksi"];


// Update data di database (tabel tb_nilai)
mysqli_query($konek, "ALTER TABLE tb_nilai AUTO_INCREMENT=1");

//untuk menghindari SQL injection
$label = mysqli_real_escape_string($konek, $label);
$prediksi = mysqli_real_escape_string($konek, $prediksi);

//nilai numerik tanpa kutip
$prediksi = (float)$prediksi;

//Run Querry
$simpan = mysqli_query($konek, "INSERT INTO tb_nilai (label, prediksi) VALUES ('$label', $prediksi)");
if ($simpan) {
    echo "Data Berhasil Dikirim";
} else {
    echo "Data Gagal Dikirim: ";
}

?>
