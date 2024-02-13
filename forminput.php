<!DOCTYPE html>
<html>
<head>
<title>Insert Data</title>
</head>
<body>
<h2>Input Data Siswa</h2>
<form method="post" action="simpan.php">
<input type="hidden" value="<?php echo $data['id'];?>" name="id">
<table>
<tr><td>Id  :</td><td><input type="text" name="id"></td></tr>
<tr><td>Nama :</td><td><input type="text" name="nama"></td></tr>

<tr><td>Jenis Kelamin</td><td>
<input type="radio" name="jenis_kelamin" value="L" checked>Laki Laki
<input type="radio" name="jenis_kelamin" value="P">Perempuan
</td></tr>

<tr><td>Angkatan :</td><td>
<select name="angkatan" size="1" id="angkatan">

<?php
for ($i=2019;$i<=2025;$i++)
{

echo "<option value=".$i.">".$i."</option>";
}
?>
</td></tr>
<tr><td>Kelas Diambil :</td><td><input type="text" name="kelas_diambil"></td></tr>

<tr><td colspan="2"><button type="submit" value="simpan">Save</button></td></tr>
</table>
</form>
</body>
</html>