<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/main.css" charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/main_page.css" charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/reg.css" charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.css" charset="utf-8">
	<title>Bodydirt - Регистрация</title>
</head>
<body>
	
	<div class="container">
		<img src="img/qwe.png">
	<form>
		<div class="dws-input">
	<input type="text" name="username" placeholder="Введите логин" value="<?php echo @$data['login']; ?>">
</div>
<div class="dws-input">
	<input type="text" name="usermail" placeholder="Введите ..Email" value="<?php echo @$data['email']; ?>">
</div>
<div class="dws-input">
	<input type="password" name="password" placeholder="Введите пароль" value="<?php echo @$data['password']; ?>">
</div>
<div class="dws-input">
	<input type="password" name="password_2" placeholder="Введите повторный пароль" value="<?php echo @$data['password_2']; ?>">
</div>
	<input class="dws-submit" type="submit" name="do_signup" value="ЗАРЕГИСТРИРОВАТЬСЯ">
	<br />
	
</div>
	</form>
	</div>			
</body>	
