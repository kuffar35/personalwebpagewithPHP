<?php
include'php/anasayfa.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/anasayfa.css">
</head>
<body>
<div class="cvBody">
	<div class="personalInformation">
		<div class="picture">
			<img src="<?php echo $resim;?>" class="img">
		</div>
		<div class="Information">
			 <label name="personalName" class="lbl">isim/soyisim :</label>
			 <label name="personalNameData" class="datalbl"><?php echo $name;?></label>

             <label name="personalBirthday" class="lbl">doğum tarihi :</label>
			 <label name="personalBirthdayData" class="datalbl"><?php echo $dogumtarihi;?></label>

			 <label name="personalLiveCity" class="lbl">şehir :</label>
			 <label name="personalLiveCityData" class="datalbl"><?php echo $dogumyeri;?></label>
		
			  <label name="personalMarialStatus" class="lbl">medeni durum :</label>
			 <label name="personalMarialStatusData" class="datalbl"><?php echo $medenidurum;?></label>

		</div>
	</div>
	<div class="personalEducation">
		<label name="header" class="hdr_lbl">EGITIM BILGILERI</label>

		<label name="firstSchool" class="E_lbl">ilkokul eğitim :</label>
	    <label name="firstSchoolData" class="E_datalbl"><?php echo $ilkegitim;?></label>

	    <label name="highSchool" class="E_lbl">lise eğitim :</label>
		<label name="highSchoolData" class="E_datalbl"><?php echo $liseegitim;?></label>

        <label name="highSchoolDepertman" class="E_lbl">lise bölüm :</label>
		<label name="highSchoolDepertmanData" class="E_datalbl"><?php echo $lisealan;?></label>
	    
	    <label name="Universty" class="E_lbl">üniversite :</label>
		<label name="UniverstyData" class="E_datalbl"><?php echo $uniegitim;?></label>	

		<label name="UniverstyDepertmant" class="E_lbl">üniversite bölüm :</label>
	    <label name="UniverstyDepertmantData" class="E_datalbl"><?php echo $uniegitimalan;?></label>
	</div>
	<div class="personalGeneralInformation">
		<label name="header" class="hdr_lbl">GENEL BILGILERI</label>

		<label name="hobby" class="GI_lbl">hobiler :</label>
	    <label name="hobbyData" class="GI_datalbl"><?php echo $hobiler;?></label>

	    <label name="certificies" class="GI_lbl">sertifikalar :</label>
	    <label name="certificiesData" class="GI_datalbl"><?php echo $sertifikalar;?></label>

	    <label name="otherLanguage" class="GI_lbl">yabancı dil :</label>
	    <label name="otherLanguageData" class="GI_datalbl"><?php echo $yabancidil;?></label>
	</div>
	
</div>

</body>
</html>