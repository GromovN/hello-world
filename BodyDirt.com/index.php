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
<a href="" title="Узнать подробнее">
            <div id="btn">
                Подробнее
            </div>
        </a>

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
 <h2 class="heading">Коротко о нас</h2>
 <div style="clear: both"><dr></div>
 <video controls autoplay loop>
 <source src="https://youtu.be/uploads/video.mp4" type="video/mp4">
 <source src="https://youtu.be/uploads/video.ogg" type="video/ogg">
</video>
	</div>
</aside>

<div style="clear: both"><br></div>

        <div id="subscribe">
        <span>Подпишитесь чтобы быть в курсе всех новостей</span>
        <div style="clear: both"><br></div>





<!-- Twitter -->

<a class="twitter-timeline" data-width="350" data-height="400" href="https://twitter.com/dirt_body">Tweets by dirt_body</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
</div>

    <div id="sub_to_project">
    <span class="heading">Оформить заказ</span>
    <div style="clear: both"><br></div> 
    <p>Узнать детальнее как вы можеть оформить заказ, можно просто нажав на кнопку Оформить заказ</p>
    <a href="" title="Оформить заказ просто">
            <div id="btn">
                Оформить заказ
            </div>
        </a>
       <div style="clear: both"><br></div> 
       <h2 class="heading">Лечебная грязь</h2>
       <div style="clear: both"><dr></div> 
       <img src="img/tom.png" alt="Медецина" title="Грязь"> 
  </div>

<div style="clear: both"><br></div> 
<div id="web_sites">
<span>Хотите узнать более подробную информацию? свяжитесь с менеджерами.</span>
             <a href="" title="Звязаться с офисом прадаж">
            <div id="btn">
                Связь
            </div>
        </a>
        </div>
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