<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oleh-oleh Pekanbaru</title>
</head>

<body>
    <h2>Makanan Khas Melayu</h2>
    <p>Pilih menu makanan dibawah ini :</p>
    <ol>
        <li>DRN</li>
        <li>PTN</li>
        <li>JALA</li>
        <li>KMJ</li>
    </ol>

    <form action="" method="POST">
        Kode Makanan : <input type="kode">
        <button type="submit" name="send">Kirim</button>
    </form>

    <?php
    // cek apakah ada button submit yang ditekan
    if (isset($_POST['send'])) {
        $kode = $_POST['kode'];
        //setelah mendapatkan kode makanan , lakukan SWITCH CASE
        switch ($kode) {
            case 'DRN':
                $namaMakanan = "Lempuk Durian";
                break;
            case 'PTN':
                $namaMakanan = "Ikan Patin";
                break;
            default
            $namaMakanan = "Tidak Sesuai";

        }
        echo "<br/>Makanan Khas Riau yang dipilih <b>$namaMakanan</b>";
    }

    ?>
</body>

</html>