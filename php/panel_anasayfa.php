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

$readid=$login_id;
$updateid=$login_id;

$readCV_name="---";
$readCV_databirth="---";
$readCV_birthplace="---";
$readCV_maritalstatus="---";
$readCV_firsteducation="---";
$readCV_highschool="---";
$readCV_highschooldepartmant="---";
$readCV_universty="---";
$readCV_universtydepartmant="---";
$readCV_email="---";
$readCV_phone="---";
$readCV_hobby="---";
$readCV_certificate="---";
$readCV_otherlanguage="---";
$readCV_picture="---";

function select(){
	include 'connection.php';
	$select_loginid=$GLOBALS['readid'];
	$menuquery=mysqli_query($con,"select * from cv where loginid='$select_loginid'");
while ($row=mysqli_fetch_assoc($menuquery)) {
	$GLOBALS['readCV_name']=$row['cv_name'];
	$GLOBALS['readCV_databirth']=$row['cv_dogumtarihi'];
	$GLOBALS['readCV_birthplace']=$row['cv_dogumyeri'];
    $GLOBALS['readCV_maritalstatus']=$row['cv_medenidurum'];
	$GLOBALS['readCV_firsteducation']=$row['cv_ilkegitim'];
	$GLOBALS['readCV_highschool']=$row['cv_liseegitim'];
	$GLOBALS['readCV_highschooldepartmant']=$row['cv_lisealan'];
	$GLOBALS['readCV_universty']=$row['cv_uniegitim'];
	$GLOBALS['readCV_universtydepartmant']=$row['cv_uniegitimalan'];
	$GLOBALS['readCV_email']=$row['cv_email'];
	$GLOBALS['readCV_phone']=$row['cv_telefon'];
	$GLOBALS['readCV_hobby']=$row['cv_hobiler'];
	$GLOBALS['readCV_certificate']=$row['cv_sertifikalar'];
	$GLOBALS['readCV_otherlanguage']=$row['cv_yabancidil'];

}
}
select();
$readCV_name;
$readCV_databirth;
$readCV_birthplace;
$readCV_maritalstatus;
$readCV_firsteducation;
$readCV_highschool;
$readCV_highschooldepartmant;
$readCV_universty;
$readCV_universtydepartmant;
$readCV_email;
$readCV_phone;
$readCV_hobby;
$readCV_certificate;
$readCV_otherlanguage;


function update(){
include 'connection.php';
$isim=$_POST['isim_txt'];
$dogumtarihi=$_POST['dogumtarihi_txt'];
$dogumyeri=$_POST['dogumyerini_txt'];
$medenidurumu=$_POST['medenidurum_slct'];
$ilkegitim=$_POST['ilkegitim_txt'];
$liseegitim=$_POST['liseegitim_txt'];
$lisealan=$_POST['lisebölüm_txt'];
$üniversiteegitim=$_POST['üniegitim_txt'];
$üniversitealan=$_POST['ünialan_txt'];
$email=$_POST['email_ml'];
$telefon=$_POST['telefon_tl'];
$hobiler=$_POST['hooby_txt'];
$sertifikalar=$_POST['sertifika_txt'];
$yabancidil=$_POST['yabancidil_txt'];
$login_id=$_POST['id_txt'];


$maxBoyut=50000000;
$dosyaUzantisi=substr($_FILES["resim_fl"]["name"], -4,4);
$dosyaAdi=rand(0,9999999).$dosyaUzantisi;
$dosyaYolu="../pictures/".$dosyaAdi;

if($_FILES["resim_fl"]["size"]>$maxBoyut){

   echo "dosya boyutu en fazla 500kb olabilir";

}else{
  $d=$_FILES["resim_fl"]["type"];
  if($d=="image/png"){
        
        if(is_uploaded_file($_FILES["resim_fl"]["tmp_name"])){

              $tasi=move_uploaded_file($_FILES["resim_fl"]["tmp_name"],$dosyaYolu);
              if($tasi){
               echo "dosya yükleme başarılı";
              }
              else{
                echo "dosya yükleme başarısız";
              }

        }else{
          echo "dosya yüklenirken hata oluştu";
        }

  }else{
    echo "dosya formatı png  -- jpeg formatında olmalıdır";
  }
}

$menuquery=mysqli_query($con,"update cv set cv_name='$isim',cv_dogumtarihi='$dogumtarihi',cv_dogumyeri='$dogumyeri',cv_medenidurum='$medenidurumu',cv_ilkegitim='$ilkegitim',cv_liseegitim='$liseegitim',cv_lisealan='$lisealan',cv_uniegitim='$üniversiteegitim',cv_uniegitimalan='$üniversitealan',cv_email='$email',cv_telefon='$telefon',cv_hobiler='$hobiler',cv_sertifikalar='$sertifikalar',cv_yabancidil='$yabancidil',cv_resim='$dosyaYolu' where loginid='$login_id'");

header("location: https://localhost/personal/panel/panel.php?page=anasayfa.php");

}

if(isset($_POST['update_btn'])){
update();
}

?>