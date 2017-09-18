<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
	<title>Bodydirt - Заказ оборудывания и грязи</title>
	<link rel="stylesheet" type="text/css" href="css/main.css" charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/main_page.css" charset="utf-8">
  <link rel="stylesheet" type="text/css" href="css/aside.css" charset="utf-8">
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
  <p><span>Нагреватель термокомпрессов НТВ-50С</span><p>
    <span>Рабочий объем бака 50 л на 14 термокомпрессов. Вариант исполнения — напольный со столом. Снабжен колесами, два из которых оснащены тормозом. Изготовлен из нержавеющей стали. Двойные стенки, крышка с газовым фиксатором, загрузочная корзина, полная термоизоляция, автоматический терморегулятор с термостатом 30-80°С, встроенная защита от перегрева.

Регистрационное Удостоверение № ФСР 2010/07999 от 15 июня 2010 года.

Применяется в сочетании с грязевыми аппликаторами, грязевыми термокомпрессами и лечебными грязями.
<ul>
<li>Напряжение – 220В</li>
<li>Частота тока — 50Гц</li>
<li>Потребляемая мощность-1,3 кВт.</li>
<li>Габариты (ДxШxB) мм: 1100х500х920.</li>
</ul>
Артикул: FFF-001
<p>Цена: договорная<p></span>
 
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