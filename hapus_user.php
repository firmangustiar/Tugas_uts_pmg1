<?php
include 'koneksi.php';
$id = $_GET["id_user"];
$pus = mysqli_query($koneksi, "DELETE FROM user WHERE id_user = '$id'");
if ($pus) {
    header("location: tampilan_user.php");} else {
    echo "query_error";
}
