<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
	<title>Bodydirt - Заказ оборудывания и грязи</title>
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
   <header>
   	<div id="logo">
   	    <a href="https://bodydirt.com/" title="На главную">
   	        <img src="img/logotipo.png" title="bodydirt.com" alt="bodydirt.com">
   	        <span>BodyDirt</span>
   	    </a>
    </div>
    <div id="about">
    <a href="/ad" title="Узнать детальнее об рекламе">Реклама</a>
    <a href="" title="Написать нам письмо">Обратная связь</a>
    </div>
    <div id="reg_auth">
        <a href="" title="Войти в кабинет пользователя">
            <div id="btn">
                Войти
            </div>
        </a>
        <a href="" title="Зарегистрироватья на сайте">
            <div id="btn">
                Регистрация
                </div>
                </a>
                </div> 
            </header>           
            <nav>
            <div id="menuShow"><i class="fa fa-bars" aria-hidden="true"></i></div>
            <div id="hideMenu">
            <a href="">Технология</a>
            <a href="">Описание процедуры</a>
            <a href="">Оборудывание</a>
            <a href="">Грязи</a>
            <a href="">Контакты</a>
            </div>
            <div id="search">
            <span>Заказать звонок</span>
            <i class="fa fa-phone" aria-hidden="true"></i>
            </div>

            <div id="mobileMenu">
            <a href="">Технология</a><br>
            <a href="">Описание процедуры</a><br>
            <a href="">Оборудывание</a><br>
            <a href="">Грязи</a><br>
            <a href="">Контакты</a> 
            <hr>
            <a href="">Регистрация</a>
            <a href="">Войти</a>
            </div>
            </nav>

<div id="main">
<div id="news">
<h2 class="heading">Оборудывание для грезелечение</h2>
<div style="clear: both"><br></div>

<div class="block">
<h1><span>Каталог оборудования для грязелечения.</span></h1>
<p>
<br>На нашем сайте Вы можете купить оборудование и материалы для грязелечения. Чтобы купить нагреватель термокомпрессов, грязевые аппликаторы и грязевые термокомпрессы, позвоните по телефону <strong>8 (843) 296-26-92</strong> или напишите на <strong>Bodydirt@mail.ru</strong>, и наши менеджеры проконсультируют Вас по всем вопросам.<br>

<br><i>Оборудование для грязелечения применяется в сочетании с лечебными грязями.</i><br>
</p>
</div>
<?php
for ($i = 0; $i < 5; $i++)
  echo '
<div class="section">
<img src="https://ptsmed.ru/wp-content/uploads/2017/04/pts123.jpg"
  alt="Применение" title="Применение">
  <span>Нагреватель термокомпрессов НТВ-50С</span>
  <br><i>Объем 50 л на 14 компрессов.</i><br>
  <a href="" title="Узнать подробнее">
            <div id="btn">
                Подробнее
            </div>
        </a>
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
               <footer>
               <div id="site_name">
               <span>BodyDirt</span> - Грязелечение
               </div>
               <div id="clear"></div>
               <div id="footer_menu">
               <a href="" title="Узнать детальнее про рекламу">Реклама</a>
               <a href="" title="О нас">О нас</a>
               <a href="" title="Написать письмо">Обратная связь</a>
               </div>
               <div id="rights">
               <a href="">Все права защищены  &copy; <?=date ('Y')?></a>
               </div>
               <div id="social">
                   <a href="" title="Группа Вк"><i class="fa fa-vk" aria-hidden="true"></i></a>
                                      <a href="" title="Мы в Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                   <a href="" title="Мы в Instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                   </div> 
            </footer>
            </div> 
            <!-- jQuery -->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
            <script>
            	$('#menuShow').click (function () {
		if ($('#mobileMenu').is(':visible'))
			$('#mobileMenu').hide ();
		else
			$('#mobileMenu').show ();
	});﻿

            $(document).scroll (function () {
            	if ($(document).width () > 785) {
            	if ($(document).scrollTop () > $('header').height () + 10)
            		$('nav').addClass ('fixed');
            	else
            		$('nav').removeClass ('fixed');
            }
            });

            	window.onresize = function (event) {
            	$('#mobileMenu').hide ();	
            	};
            </script>
</body>
</html>