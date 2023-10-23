<?php
include "../../config/koneksi.php"; //include file koneksi
date_default_timezone_set('Asia/Jakarta');


//inisiasi module & act
$module = $_GET['module'];
$act = $_GET['act'];

//bagian insert data
if ($module == 'pinjam' and $act == 'insert') :
    //inisialisasi nama field le dalam variabel
    $isbn = $_POST['buku'];
    $nisn = $_POST['siswa'];
    $kembali = $_POST['tanggal_kembali'];
    $id = date('dmyHis');
    $pinjam = date('Y-m-d');
    $status = 'pinjam';


    //query insert
    $query = "INSERT INTO muda_peminjaman (id_peminjaman, nisn, isbn, tanggal_pinjam, tanggal_kembali, status)
   VALUE ('$id','$nisn','$isbn','$pinjam','$kembali','$status')";

    //kondisi pengecekan apakah data berhasil dimasukan atau tidak
    if ($connection->query($query)) {

        //munculkan alert sukses simpan data
        session_start();
        $_SESSION["alert"] = "
        <div class = 'alert alert-success' role='alert'>
        Data Siswa Berhasil Di Simpan.
        </div>
        ";

        //redirect ke halaman awal
        header("location:../../media.php?module=" . $module);
    } else {

        //pesan error gagal insert data
        echo "data gagal disimpan!!";
    }
endif;
