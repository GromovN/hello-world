<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
	<title>Bodydirt - Оборудывание для грязелечения</title>
	<link rel="stylesheet" type="text/css" href="css/main.css" charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/main_page.css" charset="utf-8">
  	<meta name="decription" content="Оздоровительные процедуры, грязелечение, косметалогия, омоложение">
	<meta name="keywords" content="грязевые аппликации, термокомпрессор, санаторий, косметалогия, лечебная грязь">
	<meta name="viewport" content="width=device-width, intial-scale=1">
	<link href="img/list.ico" rel="shortcut icon" type="image/x-icon">
	<link rel="stylesheet" href="css/font-awesome.min.css">
</head>
<body>
    <div id= "wrapper">
        <div id= "content">
   <?php
   require_once "blocks/header.php"
   ?>

<div id="main">
<div id="news">
<h2 class="heading">Грязелечение - новая технология</h2>
<div style="clear: both"><br></div>
<!-- статья -->
<?php
for ($i = 0; $i < 8; $i++)
  echo '
<div class="article">
<img src="https://ptsmed.ru/wp-content/uploads/2014/08/8-1024x538.jpg"
  alt="Применение" title="Применение">
  <span>Применение лечебных грязей</span>
</div>
';
?>


      </div>
  </div>
<aside>



<!-- курс -->
<div id="course">
<h2 class="heading">Описание процедуры</h2>
  <div style="clear: both"><br></div>
  <?php
  for ($i = 0; $i < 2; $i++)
    echo '
  <div class="article">
<img src="https://ptsmed.ru/wp-content/uploads/2014/08/ptsnew.jpg"
  alt="Методы" title="Методы">
  <span>Методы грязелечения</span>
  </div>
';
?>
<div style="clear: both"><br></div>



	</div>
 <div id="One_course">
 <h2 class="heading">Полезно будет знать</h2>
 <img src="http://static.orgpage.ru/companies/44/1865092.jpg"
  alt="Полезные знания" title="Полезные знания">
 <div style="clear: both"><dr></div>

 
	</div>
</aside>

<div style="clear: both"><br></div>

        <div id="subscribe">
        <span>Мы стараемся для вас</span>
        <div style="clear: both"><br></div>






</body>
</html>