<?php 
$db_host= "localhost";
$db_user ="root";
$db_pass = "";
$db_name = "sebelas_rpl";

$connection = mysqli_connect($db_host,$db_user,$db_pass,$db_name,);

// munculkan pesan jika koneksi gagal 
if (!$connection){
    echo "Koneksi Gagal! : " .mysqli_connect_error();
}

 ?>