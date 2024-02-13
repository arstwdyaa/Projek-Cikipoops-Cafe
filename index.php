<?php 
session_start();
if($_SESSION['status']!="login"){
	header("location:login.php?pesan=belum_login");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Kelas Coding</title>
	<link rel="stylesheet" type="text/css" href="index.css">
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>

<body>

		
	<header>
		<div class="main"></div>
			<div class="logo"><img src="Logo.png"></div>
			<ul>
				<li class="active"><a href="#">HOME</a></li>
				<li><a href="tampilananggota.php">INFO CLASS</a></li>
				<li><a href="aboutus.php">ABOUT US</a></li>
				<li><a href="help.php">HELP</a></li>	
				<li><a href="logout.php">LOGOUT</a></li>	
			</ul>
		</div>
		
		<div class="title">
			<h1>WELCOME <?= $_SESSION['username'] ?> TO CIKIPOOPS CODINGS</h1>
		</div>
		
	</header>
	
	<footer>
        <div class="container">
            <small>Copyright &copy; 2021 - CikipoopsCodings. All Right Reserved</small>
        </div>
    </footer>
</body>
</html>