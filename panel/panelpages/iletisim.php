<?php
include '../php/panel_iletisim.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title> </title>
	<link rel="stylesheet" type="text/css" href="../css/panel_iletisim.css">
</head>
<body>
	<form action="../php/panel_iletisim.php" method="post">
<div class="contactmBody">
	<label name="contactmail_lbl" class="lbl">email :</label>
	<input type="text" name="contactmail_txt" class="txt" placeholder="lütfen mail adresinizi giriniz" value="<?php echo $contact_mail;?>">

	<label name="phone_lbl" class="lbl">telefon numarası :</label>
	<input type="text" name="phone_txt" class="txt" placeholder="lütfen telefon numaranızı giriniz" value="<?php echo $contact_phone;?>">

	<label name="socialmedia_lbl" class="lbl">telefon numarası :</label>
	<textarea name="socialmedia_txtarea" class="txtarea" placeholder="lütfen sosyal media adreslerinizi giriniz"><?php echo $contact_socialmedia;?></textarea>

    <input type="submit" name="update" value="güncelleme" class="btn">
</div>
</form>
</body>
</html>