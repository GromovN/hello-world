<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
	<title>Ошибка 404 - Заказ оборудывания и грязи</title>
	<link rel="stylesheet" type="text/css" href="css/main.css" charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/main_page.css" charset="utf-8">
  <link rel="stylesheet" type="text/css" href="css/aside.css" charset="utf-8">	
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
<h2 class="heading">Ошибка 404</h2>
<div style="clear: both"><br></div>

<div class="block">
  Упс.. Что-то пошло не так и вы попали на ошибку 404!! Возможно страница, на которой вы пытались перейти была удалена
  или же её никогда и не существовало! Вы можете воспользоватся поиском на сайте или перейти на главную страницу -<a href="http://bodydirt.com">BodyDirt</a>
</div>





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
  <span><em>2 способ</em></span>
</div>
';
?>
<div style="clear: both"><br></div>

<a href="" title="Узнать конкретнее о способах">
            <div id="btn">
                Все способы
            </div>
        </a>

	</div>
 <div id="One_course">
 <h2 class="heading">4 плюса выбрать нас</h2>
 <div style="clear: both"><dr></div>
 <img src="img/gryas.png" alt="Медецина" title="Новая технология"> 
	</div>
</aside>

<div style="clear: both"><br></div>

        
</div>
                      <?php
   require_once "blocks/footer.php"
   ?>
            </div> 
            <!-- jQuery -->
                               <?php
   require_once "blocks/jQuery.php"
   ?>
</body>
</html>