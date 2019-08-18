<?php
include 'connection.php';

$mail="---";
$telefon="---";
$socilAdress="---";



$menuquery=mysqli_query($con,"select * from contact_information where contact_id='1'");
$row=mysqli_fetch_assoc($menuquery);

$mail=$row['contact_mail'];
$telefon=$row['contact_phone'];
$socilAdress=$row['contact_socialmedia'];

?>