
<!DOCTYPE html>
<html lang="en">
 <head>
	<title>Login to Class</title>
	<link rel="stylesheet" type="text/css" href="index.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>

<body>
<header>	
	<div class="login-box">
	<img src="logologin.png" class="logologin">
		<h1>Login Here</h1>
		<?php 
		if(isset($_GET['pesan'])){
			if($_GET['pesan'] == "gagal"){
				echo "Login gagal! username dan password salah!";
			}else if($_GET['pesan'] == "logout"){
				echo "Anda telah berhasil logout";
			}else if($_GET['pesan'] == "belum_login"){
				echo "Anda harus login untuk mengakses halaman admin";
			}
		}
		?>
		<form method="post" action="cek_login.php">
			<input type="text" name="username" placeholder="Enter Username">
			<p>Password :</p>
			<input type="password" name="password" placeholder="Enter Your Password">
			<center><button type="submit">LOGIN</button></center><br>
			<center><a href="#">Forgot Password?</a></center>
		</form>
	</div>
</header>	
	<footer>
        <div class="container">
            <small>Copyright &copy; 2021 - Cikipoops Codings. All Right Reserved</small>
        </div>
    </footer>
</body>
</html>