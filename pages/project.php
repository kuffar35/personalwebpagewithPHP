<?php
include 'php/project.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
		<link rel="stylesheet" type="text/css" href="css/project.css">
</head>
<body>
<form action="php/project.php" method="post" enctype="multipart/form-data">



<div class="projectBody">
	<?php
                     include 'php/connection.php';
                     $menuquery=mysqli_query($con,"select * from projects");
                      $i=0;
                      while ($row=mysqli_fetch_assoc($menuquery)) {
                      	$name=$row['project_name'];
                          $id=$row['project_id'];
                                         ?>	
                  <div class="project">
      
			<input type="submit" name="project_name" class="project_btn" value="incele">
      <input type="text" name="id_txt" class="txtReadony" value="# <?php echo $row['project_id']; ?>" readonly>
       
      <label name="projectName_lbl" class="projectName_lbl"><?php echo $name;?></label>

                    <div class="popup" id="xmas-popup">

      <div class="popup-content">
         <a href="#" class="close">x</a>
         <div class="space">
         </div>
          <label name="prct_name" class="popub_lbl">paroject name :</label>
           <label name="prctname_data" class="popubdata_lbl"><?php echo $name;?></label>
          <label name="prct_starting"  class="popub_lbl">paroject starting :</label>
           <label name="prctstr_data" class="popubdata_lbl">---</label>
          <label name="prct_finishing" class="popub_lbl">paroject finishing :</label>
           <label name="prctfns_data" class="popubdata_lbl">---</label>
          <label name="prct_defining" class="popub_lbl">paroject defining :</label>
           <label name="prctdef_data" class="prctdefdata_lbl">---</label>
          <label name="prct_projectfile " class="popub_lbl"> project file :</label>
           <label name="prctfl_data" class="popubdata_lbl">---</label>
         
      </div>
        

    </div>

	                </div>
	<?php
    }
	?>
</div>
	



</form>
</body>
</html>