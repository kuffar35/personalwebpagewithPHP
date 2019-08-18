<?php




session_start();
if(!isset($_SESSION["oturum"])){
		header("location: https://localhost/personal/login/login.php");
}

		header("location: https://localhost/personal/panel/panel.php?page=anasayfa.php");

if(isset($_POST["exit"])){
	session_start();
	session_destroy();
	header("location: https://localhost/personal/login/login.php");
}
?>