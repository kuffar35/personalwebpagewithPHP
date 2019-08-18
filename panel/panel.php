
<?php

session_start();
if(!isset($_SESSION["oturum"])){
		header("location: https://localhost/personal/login/login.php");


}else{ ?>

<!DOCTYPE html>
<html>
<head>
	<title>panel pages</title>
</head>
<link rel="stylesheet" type="text/css" href="../css/panel.css">
<body>
 
    
         <div class="panel_area">
            
            <div class="header">
                <div class="link">
                  <?php
                     include '../php/connection.php';
                     $menuquery=mysqli_query($con,"select * from link_name");
                      while ($row=mysqli_fetch_assoc($menuquery)) {
                  ?>
                         <a href="panel.php?page=<?php echo $row['link_url'];?>" class="options_link"><?php echo $row['link_name'];?></a>
                  <?php
                   }
                  ?>
                </div>
                <div class="options">
                   <form action="../php/panel.php" method="post">
                	<div class="session">
                     
                		<a href="panel.php?page=options.php" class="options_link"><?php echo $_SESSION["session_name"];?></a>
                      
                	</div>
                	<div class="exit">
                		 <input type="submit" name="exit" value="exit" class="exit_button">
                	</div>
                    </form>
                </div>
            </div>
          <!- body icinde ürün islemleri -!>
            <div class="body">
                  <?php
                    if(isset($_GET['page'])){
                    $page_name=$_GET['page'];
                 
                     include("panelpages/".$page_name);
                     }
               
                  ?>
            </div>
         </div>
        

</body>
</html>
<?php

}
?>