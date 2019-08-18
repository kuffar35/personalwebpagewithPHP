<?php

$login_id;
function login(){
	include 'connection.php';
	//session_start();
$name=$_SESSION["session_name"];
$name;
$menuquery2=mysqli_query($con,"select * from login where login_username='$name'");
while ($row=mysqli_fetch_assoc($menuquery2)) {
 $GLOBALS["login_id"]=$row['login_id'];
}
}

login();
$login_id;

$contact_phone;
$contact_mail;
$contact_socialmedia;
function select(){
	include 'connection.php';
	$loginid=$GLOBALS['login_id']; 
$menuquery=mysqli_query($con,"select * from contact_information where loginid='$loginid'");
          while ($row=mysqli_fetch_assoc($menuquery)) {

                $GLOBALS['contact_phone']=$row['contact_phone'];
                $GLOBALS['contact_mail']=$row['contact_mail'];
                $GLOBALS['contact_socialmedia']=$row['contact_socialmedia'];
          }
}

select();
$contact_phone;
$contact_mail;
$contact_socialmedia;

function update(){
	include 'connection.php';
$contact_phone=$_POST['phone_txt'];
$contact_mail=$_POST['contactmail_txt'];
$contact_socialmedia=$_POST['socialmedia_txtarea'];
$menuquery=mysqli_query($con,"update contact_information set contact_phone='$contact_phone',contact_mail='$contact_mail',contact_socialmedia='$contact_socialmedia' where loginid=1");
header("location: https://localhost/personal/panel/panel.php?page=iletisim.php");
}

if(isset($_POST['update'])){
	update();
	
}
?>