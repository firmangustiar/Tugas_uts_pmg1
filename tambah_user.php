<?php
// Koneksi
include 'koneksi.php';
// menangkap file yang ada di form
if (!empty($_POST["save"])) {
    $nama = $_POST["nama"];
    $password = $_POST["password"];
    $level = $_POST["level"];
    $status = $_POST["status"];

    $a = mysqli_query($koneksi, "INSERT INTO user VALUES('','$nama','$password','$level',' $status')");
    if ($a) {
        header("location: tampilan_user.php");
    } else {
        echo "query_error";
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemograman3.com</title>
</head>

<body>
    <h3>Pemograman 1 2023</h3>
    <a href="tampil_user.php">Back</a>
    <br>
    <br>
    <form action="" method="post">
        <table>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama" required autocomplete="off" autofocus></td>
            </tr>

            <tr>
                <td>Password</td>
                <td><input type="number" name="password" autocomplete="off"></td>
            </tr>
            <tr>
                <td>Level</td>
                <td><select name="level">
                        <option value="">...........Pilih</option>
                        <option value="1">Admin</option>
                        <option value="2">Staff</option>
                        <option value="3">Spv</option>
                        <option value="4">Mng</option>
                    </select></td>
            </tr>

            <tr>
                <td>Status</td>
                <td><select name="status">
                        <option value="">..........Pilih</option>
                        <option value="1">Aktiv</option>
                        <option value="0">Tidak Aktiv</option>
                    </select></td>
            </tr>

            <tr>
                <td></td>
                <td><input type="submit" name="save"></td>
            </tr>
        </table>


    </form>




</body>

</html>