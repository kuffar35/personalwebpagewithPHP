<?php
include '../php/panel_anasayfa.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../css/panel_anasayfa.css">
</head>
<body>
		<form action="../php/panel_anasayfa.php" method="post" enctype="multipart/form-data">
 <div class="panel_anasayfabody">
 
 	<div class="left">
        
        <label name="kisiselbilgilerheader_lbl" class="kisiselheader_lbl">kişisel bilgiler</label>
 		<label name="isim_lbl" class="lbl">isim :</label>
 		<input type="text" name="isim_txt" class="txt" placeholder="isim ve soy ismi giriniz " value="<?php echo $readCV_name ;?>">

 		<label name="dogumtarihi_lbl" class="lbl">dogum tarihi :</label>
 		<input type="date" name="dogumtarihi_txt" class="txt" placeholder="isminizi giriniz " value="<?php echo $readCV_databirth ;?>">

 		<label name="dogumyeri_lbl" class="lbl">dogum yeri :</label>
 		<input type="text" name="dogumyerini_txt" class="txt" placeholder="dogum yerini giriniz " value="<?php echo $readCV_birthplace;?>">

 		<label name="medenidurumu_lbl" class="lbl">medini durumu :</label>
 		<select  name="medenidurum_slct" class="slct">
 			<option value="bekar">bekar</option>
 			<option value="evli">evli</option>
 		</select>

        <label name="egitimheader_lbl" class="kisiselheader_lbl">egitim bilgileri</label>
        <label name="ilkegitim_lbl" class="lbl">ilköğretim :</label>
 		<input type="text" name="ilkegitim_txt" class="txt" placeholder="ilköğretim bilginizi giriniz " value="<?php echo $readCV_firsteducation;?>">

 		<label name="liseegitim_lbl" class="lbl">lise egitim :</label>
 		<input type="text" name="liseegitim_txt" class="txt" placeholder="lise bilginizi giriniz " value="<?php echo $readCV_highschool;?>">

 		<label name="lisebölüm_lbl" class="lbl">lise bölüm :</label>
 		<input type="text" name="lisebölüm_txt" class="txt" placeholder="lise bölüm bilgiler " value="<?php echo $readCV_highschooldepartmant;?>">

 		<label name="üniegitim_lbl" class="lbl">üniversite egitim :</label>
 		<input type="text" name="üniegitim_txt" class="txt" placeholder="üniversite egitim bilgileri " value="<?php echo $readCV_universty;?>">

 		<label name="ünialan_lbl" class="lbl">üniversite alanı :</label>
 		<input type="text" name="ünialan_txt" class="txt" placeholder="üniversite alanı bilgileri " value="<?php echo $readCV_universtydepartmant;?>">

        <label name="iletisim_lbl" class="kisiselheader_lbl">iletisim bilgileri</label>
        <label name="email_lbl" class="lbl">email adresi :</label>
        <input type="email" name="email_ml" class="txt" placeholder="email adresini giriniz" value="<?php echo $readCV_email;?>">

        <label name="telefon_lbl" class="lbl">telefon numarası :</label>
        <input type="tel" name="telefon_tl" class="txt" placeholder="telefon numarsını giriniz" value="<?php echo $readCV_phone;?>">

 	</div>
 	<div class="right">
 		 <label name="hobbyheader_lbl" class="kisiselheader_lbl">hobi bilgileri</label>
 		 <label name="hoppy_lbl" class="lbl">hobiler :</label>
 		 <textarea name="hooby_txt" class="textarea" placeholder="hobileri giriniz" ><?php echo $readCV_hobby;?></textarea>

 		 <label name="sertifika_lbl" class="lbl">sertifikalar :</label>
 		 <textarea name="sertifika_txt" class="textarea" placeholder="sertifikaları giriniz"><?php echo $readCV_certificate;?></textarea>

 		 <label name="yabancidil_lbl" class="lbl">yabancı dil :</label>
 		 <textarea name="yabancidil_txt" class="textarea" placeholder="yabanci dil bilgilerini giriniz"><?php echo $readCV_otherlanguage;?></textarea>

 		 <label name="resim_lbl" class="lbl">resim :</label>
 		  <input type="file" name="resim_fl" class="file_css" value="dosyayı seçin">

        <label name="id_lbl" class="lbl">id :</label>
 	
 	    <select  name="id_txt" class="slct">
 			<option value="<?php echo $updateid; ?>"><?php echo $updateid; ?></option>
 		</select>

 	</div>
    <input type="submit" name="update_btn" value="update" class="button">

 </div>
 </form>
</body>
</html>