<?php
include 'koneksi.php';
$id = $_GET["id_barang"];
$pus = mysqli_query($koneksi, "DELETE FROM user WHERE id_barang = '$id'");
if ($pus) {
    header("location: tampilan_barang.php");
} else {
    echo "query_error";
}
