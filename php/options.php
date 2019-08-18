<?php

include 'connection.php';
$readUserId="---";
$readUserName="---";
$readUserPassword="---";



$name=$_SESSION["selectUserName"];

$menuquery=mysqli_query($con,"select * from login where login_username='$name'");
while ($row=mysqli_fetch_assoc($menuquery)) {
	 
	 $readUserId=$row['login_id'];
	 $readUserName=$row['login_username'];
     $readUserPassword=$row['login_userpassword'];

}

function update(){
include 'connection.php';
$updateId=$_POST["userUpdateId_txt"];
$updatePassword=$_POST["userUpdatePassword_txt"];
$updateCheckPassword=$_POST["userUpdateControlPassword_txt"];

$menuquery=mysqli_query($con,"select login_id from login ");
while ($row=mysqli_fetch_assoc($menuquery)) {
	 
	 $readCheckUserId=$row['login_id'];
	 if($updateId==$readCheckUserId){
          if($updatePassword==$updateCheckPassword and $updateId!=""){

             $menuquery=mysqli_query($con,"update login set login_userpassword='$updatePassword' where login_id='$updateId' ");
             header("location: https://localhost/personal/panel/panel.php?page=options.php");
            }
          else{
                  ?>
                   <script type='text/javascript'>
                   alert('şifre girişinde yada id girişinde hata yaptınız');
                   window.location.href="https://localhost/personal/panel/panel.php?page=options.php";
                   </script>
                  <?php
               }
	  }
	  else{
	  	 ?>
                   <script type='text/javascript'>
                   alert('şifre girişinde yada id girişinde hata yaptınız');
                   window.location.href="https://localhost/personal/panel/panel.php?page=options.php";
                   </script>
                  <?php
	  } 

}



}


if(isset($_POST["userQuery_btn"])){
	header("location: https://localhost/personal/panel/panel.php?page=options.php");

}

if(isset($_POST['updateControl'])){
	update();
	
}

?>
