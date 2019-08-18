<?php
include 'connection.php';



 $menuquery=mysqli_query($con,"select * from projects where project_id='8'");
 $row=mysqli_fetch_assoc($menuquery);
 $projectname=$row['project_name'];

 if(isset($_POST['project_name'])){
 	$projectId=$_POST['id_txt'];
 	echo $projectId;
    header('Location: https://localhost/personal/index.php?page=project.php#xmas-popup');
 }

?>