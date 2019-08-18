<!DOCTYPE html>
<html>
<head>
	<title>options</title>
	<link rel="stylesheet" type="text/css" href="../css/options.css">

</head>
<body>

 <div class="options">
 	
  <div class="information">
  
  <?php
      include '../php/options.php';
  ?>
     <label name="userId_lbl" class="lbl">user id :</label>
     <label name="userIdData_lbl" class="data_lbl"><?php echo $readUserId; ?></label>

     <label name="userName_lbl" class="lbl">user name :</label>
     <label name="userNameData_lbl" class="data_lbl"><?php echo $readUserName; ?></label>

     <label name="userPassword_lbl" class="lbl">user password :</label>
     <label name="userPasswordData_lbl" class="data_lbl"><?php echo $readUserPassword; ?></label>
      
  	<form action="" method="POST" name="selectForm">      
         <label name="userSelect_lbl" class="lbl">select name :</label>
         <input type="text" name="userSelect_txt" class="txt" placeholder="user ismini giriniz">
         <input type="submit" name="userQuery_btn" class="query_btn" value="query" >
         <?php 

         //txt den alınan veriyi session methoduyla php sayfasına yönlendirdik database ile sorgulamak için 

           $_SESSION["selectUserName"]=$_POST['userSelect_txt'];
          	
         ?>
      </form>
  </div>
<!-- bu kısımda kullanıcı adı ve şifre  için update işlemleri gerçekleşmekdedir -->
  <div class="update">
    <form action="../php/options.php" method="post">
    <label name="userUpdateId_lbl" class="lbl">user id :</label>
    <input type="text" name="userUpdateId_txt" class="txt_Update" placeholder="lütfen kullanıcı id'sini giriniz">

    <label name="userUpdatePassword_lbl" class="lbl">user password :</label> 
    <input type="password" name="userUpdatePassword_txt" class="txt_Update" placeholder="lütfen yeni bir şifre giriniz">    

    <label name="userUpdateControlPassword_lbl" class="lbl">user password :</label>
    <input type="password" name="userUpdateControlPassword_txt" class="txt_Update" placeholder="lütfen şifrenizi tekrar giriniz">    

    <input type="submit" name="updateControl" class="update_btn" value="güncelleme"> 

  </div>

 </div>

</body>
</html>