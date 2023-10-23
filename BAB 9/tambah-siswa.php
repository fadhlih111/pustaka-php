<!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    </head>

    <body>
        <!-- navbar -->
        <?php include "templates/navbar.php"; ?>
        <!-- end navbar -->

        <!-- bagian content -->
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-sm-12 my-3">
                    <div class="card">
                        <div class="card-header">
                            <h5>Tambah Data Siswa</h5>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Data Siswa SMK Muda</h5>
                            <p class="card-text">Isi data siswa dengan benar.</p>

                            <!-- form tambah siswa -->
                            <form action="simpan-siswa.php" method="post">
                                <div class="mb-3">
                                    <label for="" class="form label">N.I.S.N</label>
                                    <input type="text" name="nisn" class="form-control" placeholder="NISN">
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form label">Nama Siswa</label>
                                    <input type="text" name="nama_siswa" class="form-control" placeholder="Nama Kamu">
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form label">Jurusan</label>
                                    <input type="text" name="jurusan" class="form-control" placeholder="Jurusan Kamu">
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form label">Jenis kelamin</label>
                                    <input type="text" name="jenis_kelamin" class="form-control" placeholder="L/P...">
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form label">Alamat</label>
                                    <input type="text" name="alamat" class="form-control" placeholder="Alamat Kamu">
                                </div>
                                <div class="mb-3">
                                    <input type="submit" value="Simpan Datakauu" class="btn btn-primary">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>

    </html>