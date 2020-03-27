<?php
	session_start();

	if(isset($_POST['submit']))
	{
		$user = htmlspecialchars($_POST['user']);
		$pass = $_POST['pass']; //Bisa gunakan Enksripsi (md5, sha, dll) untuk melindungi password di database

		if($user=='admin' && $pass=='admin') {
			echo "Login Berhasil";
		} else {
			$_SESSION['alert'] = "Username atau Password tidak sesuai";
			header("location:index.php");
		}
	}


?>