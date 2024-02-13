<?php
include 'koneksi.php';
// menyimpan data kedalam variabel
$id = $_POST['id'];
$nama = $_POST['nama'];
$kelamin = $_POST['jenis_kelamin'];
$angkatan = $_POST['angkatan'];
$kelas_diambil = $_POST['kelas_diambil'];

if($nama=="")
{
echo "<script>alert('Nama Belum diisi');history.go(-1);</script>";
}
if($kelas_diambil=="")
{
echo "<script>alert('Kelas Belum diisi');history.go(-1);</script>";
}
else
{
/* cek input ID apakah sudah ada id yang digunakan */
$pilih="select * from data_siswa where id='$id'";
$cek=mysqli_query($koneksi, $pilih);
$jumlah_data = mysqli_num_rows($cek);
if ($jumlah_data >= 1 )
{
echo "<script>alert('id yang sama sudah digunakan');history.go(-1);</script>";
}
else
{
// query untuk insert data anggota
$query="INSERT INTO data_siswa SET id='$id',nama='$nama',jenis_kelamin='$kelamin',angkatan='$angkatan',kelas_diambil='$kelas_diambil'";
mysqli_query($koneksi, $query);
// echo " Input Data yang anda masukkan sukses berhasil";
// header("location:query.php");
echo "<script>alert('Data yang anda Input sukses');window.location='forminput.php
'</script>";
}
}
?>