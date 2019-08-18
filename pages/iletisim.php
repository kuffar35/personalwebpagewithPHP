<?php
include 'php/iletisim.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
		<link rel="stylesheet" type="text/css" href="css/iletisim.css">
</head>
<body>
<div class="ConnectionBody">
	<label name="header" class="hdr_lbl">ILETISIM BILGILERI</label>	 

	    <label name="email" class="lbl">email :</label>
	    <label name="emailData" class="datalbl"><?php echo $mail?></label>

	    <label name="phoneNumber" class="lbl">telefon numarası :</label>
	    <label name="phoneNumberData" class="datalbl"><?php echo $telefon?></label>

	    <label name="socialMedia" class="lbl">sosyal medya uzantıları :</label>
	    <label name="socialMediaData" class="datalbl"><?php echo $socilAdress?></label>

</div>
</body>
</html>