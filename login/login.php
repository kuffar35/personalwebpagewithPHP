<!DOCTYPE html>
<html>
<head>
	<title>login page</title>
	<link rel="stylesheet" type="text/css" href="../css/login.css">
</head>
<body>
	<form action="../php/login.php" method="post">
 <div class="loginConsole">
	<!-- 
        first class: there is username tag
        second class: there is userpassword tag
        third class: there is button tag

	-->
	<div class="first">
       <label name="username_lbl" for="username_txt" class="label">kullanici adi</label>
       <input type="text" name="username_txt" class="input" placeholder="lütfen kullanıcı adınızı giriniz">
    </div>

    <div class="second">
      <label name="userpassword_lbl" for="userpassword_txt" class="label">kullanici sifre</label>
      <input type="password" name="userpassword_txt" class="input" placeholder="lütfen şifrenizi giriniz">
    </div>
    <div class="third">
    	<input type="submit" name="control" class="button" value="control">
    </div>
 </div>
</form>
</body>
</html>