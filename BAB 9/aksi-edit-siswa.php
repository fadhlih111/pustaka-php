<?php

//tambahkan koneksi
include "config/koneksi.php";


//inisiasi variabel untuk masing masing data
$nisn = $_POST['nisn'];
$nama = $_POST['nama'];
$jurusan = $_POST['jurusan'];
$jenis = $_POST['jenis'];
$alamat = $_POST['alamat'];

// query update data
$query = "UPDATE siswa_muda SET
                            nama_siswa   ='$nama',
                            jurusan      ='$jurusan',
                            jenis_kelamin='$jenis',
                            alamat       ='$alamat'
                    WHERE nisn = '$nisn'";

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if($connection->query($query)) {

    //redirect ke halaman awal
    echo "<script>
    alert('Data berhasil di update');
    window.location = 'tampil-siswa.php';
    </script>";

} else {

    //pesan error gagal insert data
    echo "Data Gagal Disimpan!";

}