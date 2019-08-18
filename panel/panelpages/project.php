<?php
include '../php/panel_project.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../css/panel_project.css">
</head>
<body>
<form action="../php/panel_project.php" method="post" enctype="multipart/form-data">
<div class="projectBody">
	<div class="left">
		<label name="projectname_lbl" class="lbl">proje ismi :</label>
 		<input type="text" name="projectname_txt" class="txt" placeholder="lütfen proje ismini giriniz" value="<?php echo $Select_projectname;?>" >

 		<label name="projectstarting_lbl" class="lbl">başlangıç tarihi :</label>
 		<input type="date" name="projectstarting_txt" class="txt" value="<?php echo $Select_projectstart;?>" >

 		<label name="projectfinishing_lbl" class="lbl">bitiş tarihi :</label>
 		<input type="date" name="projectfinishing_txt" class="txt" value="<?php echo $Select_projectfinish;?>" >

        <label name="projectdefined_lbl" class="lbl">açıklama :</label>
 	    <textarea name="projectdefined_txt" class="textarea" placeholder="açıklamayı giriniz" ><?php echo $Select_projectdefined;?></textarea>

 	    <label name="document_lbl" class="lbl">dosya ekleme :</label>
 		 <input type="file" name="document_txt" class="file_css" >

        <label name="id_lbl" class="lbl">login id :</label>
	    <select  name="id_txt" class="slct">
 			<option value="<?php echo $login_id; ?>"><?php echo $login_id; ?></option>
 		</select>
	</div>
	<div class="right">
		<label name="projectid_lbl" class="lbl">id giriniz :</label>
         <select  name="projectid_txt" class="slct">

         	<option value="0">bir proje id seçiniz</option>
         	<?php
         	   include 'connection.php';
               $menuquery=mysqli_query($con,"select project_id,project_name from projects where login_id='$login_id;'");
               while ($row=mysqli_fetch_assoc($menuquery)) {
         	?>
 			<option value="<?php echo $row['project_id'];?>"><?php echo $row['project_id']."-".$row['project_name'];?></option>
 			<?php
               }
 			?>
      <?php
            $project=$_POST['projectid_txt'];
            $_SESSION["project_id"] = $username;
          ?>
 		</select>

         <input type="submit" name="select_btn" value="bilgi kontrol" class="button">
         <input type="submit" name="update_btn" value="güncelleme" class="button">         
         <input type="submit" name="addition_btn" value="ekleme" class="button">
         <input type="submit" name="delete_btn" value="silme" class="button">
	</div>
</div>
</form>
</body>
</html>