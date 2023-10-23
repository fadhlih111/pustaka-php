<?php

//tambahkan koneksi
include "config/koneksi.php";


//inisiasi variabel untuk masing masing data
$nisn = $_POST['nisn'];
$nama = $_POST['nama'];
$jurusan = $_POST['jurusan'];
$jenis = $_POST['jenis'];
$alamat = $_POST['alamat'];

//query insert data
$query = "INSERT INTO siswa_muda (nisn,nama_siswa,jurusan,jenis_kelamin,alamat)
VALUES ('$nisn','$nama','$jurusan','$jenis','$alamat')";

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if($connection->query($query)) {

    //redirect ke halaman index.php 
    header("location: tambah-siswa.php");

} else {

    //pesan error gagal insert data
    echo "Data Gagal Disimpan!";

}