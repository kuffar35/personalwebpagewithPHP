<!DOCTYPE html>
<html>
<head>
	<title>Omer Faruk Nar</title>
	<link rel="stylesheet" type="text/css" href="css/index.css">
</head>
	<body background="pictures/background.jpeg">

	<div class="indexBody">

<div class="strolling">
<ul class="menu">
	<li>
		<a href="#">gezinme noktası</a>
		<ul>
			<?php
                     include 'php/connection.php';
                     $menuquery=mysqli_query($con,"select * from pages_name");
                      while ($row=mysqli_fetch_assoc($menuquery)) {
                  ?>
			<li>
				<a href="index.php?page=<?php echo $row['pages_url'];?>"><?php echo $row['pages_url'];?></a>
			</li>
			 <?php
                   }
                  ?>
		</ul>
	</li>
</ul>
</div>
<div class="header">
	kuffar 
</div>
<div class="body">
	<?php
                    if(isset($_GET['page'])){
                    $page_name=$_GET['page'];
                 
                     include("pages/".$page_name);
                     }else{
               include("pages/anasayfa.php");
           }
                  ?>

</div>

</div>
</body>
</html>