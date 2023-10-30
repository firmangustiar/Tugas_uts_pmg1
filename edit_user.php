<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemograman3.com</title>
</head>

<body>
    <h2>Pemograman 3 2023</h2>
    <?php
    include 'koneksi.php';
    $id = $_GET["id_user"];
    $data = mysqli_query($koneksi, "SELECT * FROM user WHERE id_user = '$id'");
    while ($akses = mysqli_fetch_array($data)); { ?>

    <?php } ?>


</body>

</html>