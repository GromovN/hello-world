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
	<?php 
  require "db.php";

  $data = $_POST;
  if( isset($data['do_signup']))
  {
  	// здесь регистрируем

  	$errors = array();
  	if( trim($data['login']) == '' )
  	{
  		$errors[] = 'Введите логин!';
  	}
  


  if( trim($data['email']) == '' )
  	{
  		$errors[] = 'Введите Email!';
  	}
  

  if( $data['password'] == '' )
  	{
  		$errors[] = 'Введите пароль!';
  	}

  	
	if( $data['password_2'] != $data['password'] )
  	{
  		$errors[] = 'Повторный пароль введен не верно!';
  	}

  	if( R::count('users', "login = ?", array($data['login'])) > 0 )
  	{
  		$errors[] = 'Пользователь с таким логином уже существует!';
  	}

  	if( R::count('users', "email = ?", array($data['email'])) > 0 )
  	{
  		$errors[] = 'Пользователь с таким логином уже существует!';
  	}

  	if( empty($errors) )
  	{
     //все хорошо регестрируем

    $user = R::dispense('users');
    $user->login = $data['login'];
    $user->email = $data['email'];
    $user->password = password_hash($data['password'], PASSWORD_DEFAULT);
    R::store($user);
    echo '<div style="color: green;">Вы успешно зарегистрирваны!</div><hr>';


  	} else
    {
  	   echo '<div style="color: red;">'.array_shift($errors).'</div><hr>';
    }
}

?>
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
