<?php
include 'php/connection.php';
 
 $name="---";
 $dogumtarihi="---";
 $dogumyeri="---";
 $medenidurum="---";
 $ilkegitim="---";
 $liseegitim="---";
 $lisealan="---";
 $uniegitim="---";
 $uniegitimalan="---";
 $mail="---";
 $telefon="---";
 $hobiler="---";
 $sertifikalar="---";
 $yabancidil="---";
 $resim="---";



 $menuquery=mysqli_query($con,"select * from cv where cv_id='1'");
 $row=mysqli_fetch_assoc($menuquery);

  $name=$row['cv_name'];    
  $dogumtarihi=$row['cv_dogumtarihi'];  
  $dogumyeri=$row['cv_dogumyeri'];    
  $medenidurum=$row['cv_medenidurum'];
  $ilkegitim=$row['cv_ilkegitim'];    
  $liseegitim=$row['cv_liseegitim'];     
  $lisealan=$row['cv_lisealan'];    
  $uniegitim=$row['cv_uniegitim'];  
  $uniegitimalan=$row['cv_uniegitimalan'];    
  $mail=$row['cv_email'];
  $telefon=$row['cv_telefon'];    
  $hobiler=$row['cv_hobiler'];
  $sertifikalar=$row['cv_sertifikalar'];    
  $yabancidil=$row['cv_yabancidil'];  
  $resim=substr($row['cv_resim'],3);        

?>