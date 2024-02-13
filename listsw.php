<?php
include 'koneksi.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="info.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    

</head>
<body>
    <div class="art layout-cell">
        <p><img width="80" height="70" alt="" src="Logo.png" style="padding-left:20px;float:left;padding-top: 10px;"></p>
    </div>
    <header>
        <div class="container">
        <h1><a href="index.php">CIKIPOOPS CODINGS</a></h1>
        <ul>
            <li><a href="index.php">HOME</a></li>
            <li class="active"><a href="listsw.php">INFO CLASS</a></li>
            <li><a href="aboutus.php">ABOUT US</a></li>
            <li><a href="logout.php">LOGOUT</a></li>    
        </ul>
        </div>
    </header>

<html>
<head>
<title>Data Siswa</title>
</head>
<body>
<header>
<h2>Nama Siswa</h2>
</header>
<nav>
<a href="tampilananggota.php">[<--] Back </a>
<a href="forminput.php">[+] Add </a>

</nav>
<br>
<table border="5" style= "top: 50px; padding-left:10px;float:left;padding-top: 10px;">
<thead>
<tr>
<th>Id</th>
<th>Nama</th>
<th>Jenis Kelamin</th>
<th>Angkatan</th>
<th>Kelas diambil</th>
<th>Tambah / Hapus</th>

</tr>
</thead>
<tbody>
<?php
$sql= "SELECT * FROM data_siswa";
$query=mysqli_query($koneksi,$sql);
while ($siswa=mysqli_fetch_array($query)){
    echo "<tr>";
    echo "<td>".$siswa['id']."</td>";
    echo "<td>".$siswa['nama']."</td>";
    echo "<td>".$siswa['jenis_kelamin']."</td>";
    echo "<td>".$siswa['angkatan']."</td>";
    echo "<td>".$siswa['kelas_diambil']."</td>";

    echo "<td>";

    echo "<a href='forminput.php?id=".$siswa['id']."'>Tambah</a> |  " ;
    echo "<a href='hapus.php?id=".$siswa['id']."'>Hapus</a> " ;
    echo "</td>";

    echo "</tr>";
}
?>
</tbody>
</table>
<p>Total: <?php echo mysqli_num_rows($query) ?></p>
</body>

</html>


