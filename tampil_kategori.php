<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemograman3.com</title>
</head>

<body>
    <h3>Pemograman 1 2023 | KATEGORI</h3>
    <a href="tambah_kategori.php">+TAMBAH USER</a>
    |
    <a href="index.php">HOME</a>
    <br>
    <br>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Nama Kategori</th>
            <th>Discount</th>
            <th>Opsi</th>
        </tr>
        <?php
        include 'koneksi.php';
        $no = 1;
        $data = mysqli_query($koneksi, "SELECT * FROM kategori");
        while ($d = mysqli_fetch_array($data)) {

        ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $d["nama_kategori"] ?></td>
                <td><?php echo $d["diskon"] ?></td>
                <td>
                    <a href="">Edit</a>|<a href="">Hapus</a>
                </td>
            </tr>
        <?php } ?>
    </table>
</body>

</html>