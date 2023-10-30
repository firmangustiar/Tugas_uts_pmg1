<?php
include 'koneksi.php';
$id = $_GET["id_member"];
$pus = mysqli_query($koneksi, "DELETE FROM user WHERE id_member = '$id'");
if ($pus) {
    header("location: tampil_member.php");
} else {
    echo "query_error";
}
