<?php


function read(){
include 'connection.php';

	session_start();
$username=$_POST["username_txt"];
$userpassword=$_POST["userpassword_txt"];
$userNameChecking;
$userPassChecking;

$menuquery=mysqli_query($con,"select * from login");

while ($row=mysqli_fetch_assoc($menuquery)) {
	 
	
	 $userNameChecking=$row['login_username'];
	 $userPassChecking=$row['login_userpassword'];
	 if($username==$userNameChecking and  $userpassword==$userPassChecking){
      $_SESSION["oturum"] = true;
      $_SESSION["session_name"] = $username;
      header("location: https://localhost/personal/php/panel.php");
	}
	else{
		header("location: https://localhost/personal/login/login.php");
	}

}

	
}


if(isset($_POST["control"])){
read();
}

?>