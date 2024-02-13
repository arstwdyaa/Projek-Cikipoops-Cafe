<?php
include("koneksi.php");
if( isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = "Delete from data_anggota where id=$id";
    $query = mysqli_query($koneksi, $sql);
    if ($query) {
        header('Location: lismhs.php');
    } else {
        die("gagal menghapus...");
    }
} else {
    die("akses dilarang...");
}
?>