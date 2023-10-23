<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Siswa</title>
    <link rel="stylesheet" href="Assets/css/bootstrap.min.css">
</head>

<body>
    <!-- navbar -->
    <?php include "templates/navbar.php"; ?>
    <!-- end navbar -->

    <!-- bagian content -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-sm-12 my-3">

                <div class="card">
                    <div class="card-header">
                        <h5>Data Siswa</h5>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Data Siswa SMK Muda</h5>
                        <a href="tambah-siswa.php" class="btn btn-primary">Tambah Data Siswa</a>

                        <!-- table data siswa -->
                        <table class="table table-bordered mt-3">
                            <thead>
                                <th>NO</th>
                                <th>NISN</th>
                                <th>Nama Siswa</th>
                                <th>Jurusan</th>
                                <th>Jenis Kelamin</th>
                                <th>Alamat</th>
                                <th>Aksi</th>
                            </thead>
                            <tbody>
                                <?php
                                include('config/koneksi.php');
                                $no = 1;
                                $query = "SELECT * FROM siswa_muda";
                                $conn = mysqli_query($connection, $query);
                                while ($data = mysqli_fetch_array($conn)){
                                ?>
                                <tr>
                                    <td> <?php echo $no; ?></td>
                                    <td> <?php echo $data['nisn']; ?></td>
                                    <td> <?php echo $data['nama_siswa']; ?></td>
                                    <td> <?php echo $data['jurusan']; ?></td>
                                    <td> <?php echo $data['jenis_kelamin']; ?></td>
                                    <td> <?php echo $data['alamat']; ?></td>
                                    <td>
                                        <a href="editsiswa.php?id=<?php echo $data ['nisn'];?>" class="badge text-bg-success">Edit</a>
                                        <a href="" class="badge text-bg-danger" onclick="return confirm('Yakin Ingin Menghapus Data?');">Hapus</a>
                                    </td>
                                </tr>
                                <?php
                                $no++;
                                }
                                ?>
                            </tbody>
                        </table>
                        <!-- end table -->
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>


</html>