<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemograman3.Com</title>

</head>

<body>
    <h3>Pemograman 1 2023 | USER</h3>
    <div class="btn">
        <a href="tambah_user.php">+TAMBAH USER</a>
        |
        <a href="index.php">HOME</a>
    </div>
    <br>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>NO</th>
            <th>NAMA</th>
            <th>PASSWORD</th>
            <th>LEVEL</th>
            <th>STATUS</th>
            <th>OPSI</th>
        </tr>
        <?php
        include 'koneksi.php';
        $no = 1;
        $data = mysqli_query($koneksi, "SELECT * FROM user");
        while ($d = mysqli_fetch_array($data)) {

        ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $d["nama"]; ?></td>
                <td><?php echo $d["password"]; ?></td>
                <td><?php echo $d["level"]; ?></td>
                <td><?php echo $d["status"]; ?></td>
                <td>
                    <a href="edit_user.php?id_user=<?php echo $d["id_user"]; ?>">Edit</a> |
                    <a href="hapus_user.php?id_user=<?php echo $d["id_user"]; ?>">Hapus</a>
                </td>
            </tr>
        <?php } ?>
    </table>
</body>

</html>