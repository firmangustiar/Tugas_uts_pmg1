<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemograman3.com</title>
</head>

<body>
    <h3>Pemograman 1 2023 | TRANSAKSI</h3>
    <a href="tambah_transaksi.php">+TAMBAH TRANSAKSI</a>
    |
    <a href="index.php">HOME</a>
    <br>
    <br>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Tanggal Transaksi</th>
            <th>NO Transaksi</th>
            <th>Jenis Transaksi</th>
            <th>Penjualan Id</th>
            <th>Barang Id</th>
            <th>Jumlah Transaksi</th>
            <th>Id Member</th>
            <th>Total</th>
            <th>Opsi</th>

        </tr>
        <?php
        include 'koneksi.php';
        $no = 1;
        $data = mysqli_query($koneksi, "SELECT * FROM transaksi");
        while ($d = mysqli_fetch_array($data)) {

        ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $d["tgl_transaksi"]; ?></td>
                <td><?php echo $d["no_transaksi"]; ?></td>
                <td><?php echo $d["jenis_transaksi"]; ?></td>
                <td><?php echo $d["penjualan_id"]; ?></td>
                <td><?php echo $d["barang_id"]; ?></td>
                <td><?php echo $d["jumlah_transaksi"]; ?></td>
                <td><?php echo $d["id_member"]; ?></td>
                <td><?php echo $d["total"]; ?></td>
                <td>
                    <a href="">Edit</a>|<a href="">Hapus</a>
                </td>
            </tr>
        <?php } ?>
    </table>
</body>

</html>