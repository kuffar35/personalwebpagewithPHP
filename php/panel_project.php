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

  // create select opertation and variables
   
     $Select_projectname="---";
     $Select_projectstart;
     $Select_projectfinish;
     $Select_projectdefined="---";
       
function select(){
/*
	include 'connection.php';
	
	 $loginid=$GLOBALS['login_id']; 
	$menuquery=mysqli_query($con,"select * from projects where project_id=6 && login_id='$loginid'");
          while ($row=mysqli_fetch_assoc($menuquery)) {
          	$GLOBALS['Select_projectname']=$row['project_name'];
          	$GLOBALS['Select_projectstart']=$row['project_starting'];
          	$GLOBALS['Select_projectfinish']=$row['project_finishing'];
          	$GLOBALS['Select_projectdefined']=$row['project_defined'];
          }*/
}

function update(){
	include 'connection.php';

	 $projectId=$_POST['projectid_txt'];
     $projectname=$_POST['projectname_txt'];
     $projectstart=$_POST['projectstarting_txt'];
     $projectfinish=$_POST['projectfinishing_txt'];
     $projectdefined=$_POST['projectdefined_txt'];
     $projectfile=$_POST['document_txt'];
     $projectloginid=$_POST['id_txt'];

     $menuquery=mysqli_query($con,"update projects set  project_name='$projectname',project_starting='$projectstart',project_finishing=' $projectfinish',project_defined='$projectdefined',project_file='$projectfile' where project_id='$projectId' && login_id='$projectloginid'");
	header("location: https://localhost/personal/panel/panel.php?page=project.php");
}

function addition(){
     include 'connection.php';

     /*
       $_FILES[]
       tmp_name
       name
       size
       type
     */
       
       $maxBoyut=50000000;
$dosyaUzantisi=substr($_FILES["document_txt"]["name"], -4,4);
$dosyaAdi=rand(0,9999999).$dosyaUzantisi;
$dosyaYolu="../dosyalar/".$dosyaAdi;

if($_FILES["document_txt"]["size"]>$maxBoyut){

   echo "dosya boyutu en fazla 500kb olabilir";

}else{
  $d=$_FILES["document_txt"]["type"];
  if($d=="application/pdf"){
        
        if(is_uploaded_file($_FILES["document_txt"]["tmp_name"])){

              $tasi=move_uploaded_file($_FILES["document_txt"]["tmp_name"],$dosyaYolu);
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


     $projectname=$_POST['projectname_txt'];
     $projectstart=$_POST['projectstarting_txt'];
     $projectfinish=$_POST['projectfinishing_txt'];
     $projectdefined=$_POST['projectdefined_txt'];
     $projectloginid=$_POST['id_txt'];
     $menuquery=mysqli_query($con,"insert into projects(project_name,project_starting,project_finishing,project_defined,project_file,login_id) values('$projectname','$projectstart','$projectfinish','$projectdefined','$dosyaYolu','$projectloginid')");
	header("location: https://localhost/personal/panel/panel.php?page=project.php");
}

function delete(){
	 include 'connection.php';
	 $projectId=$_POST['projectid_txt'];
	 $menuquery=mysqli_query($con,"delete from projects where project_id='$projectId'");
	header("location: https://localhost/personal/panel/panel.php?page=project.php");	
}

if(isset($_POST['select_btn'])){
select();
  header("location: https://localhost/personal/panel/panel.php?page=project.php");
}
if(isset($_POST['update_btn'])){
update();
}
if(isset($_POST['addition_btn'])){
addition();
}
if(isset($_POST['delete_btn'])){
delete();
}
?>