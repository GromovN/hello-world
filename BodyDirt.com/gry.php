<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
	<title>Bodydirt - Заказ оборудывания и грязи</title>
	<link rel="stylesheet" type="text/css" href="css/main.css" charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/main_page.css" charset="utf-8">
  <link rel="stylesheet" type="text/css" href="css/gryy.css" charset="utf-8">
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
<h2 class="heading">Продажа лечной грязи</h2>
<div style="clear: both"><br></div>

<div class="block">
<h1><span>Продажа лечебной грязи.</span></h1>
<p>
<br>Ниже представлен полный каталог имеющихся в наличии лечебных грязей. Чтобы купить лечебные грязи, позвоните по телефону <strong>8 (843) 296-26-92</strong> или напишите на <strong>BodyDirt@mail.ru</strong>, и наши менеджеры проконсультируют Вас по всем вопросам.<br>

<br><i>Лечебные грязи могут применяться в сочетании с грязевыми аппликаторами и грязевыми термокомпрессами.</i><br>
</p>
</div>
<?php
for ($i = 0; $i < 5; $i++)
  echo '
<div class="section">
<img src="https://ptsmed.ru/wp-content/uploads/2014/08/pts4.jpg"
  alt="Применение" title="Применение">
  <p><span>Лечебная грязь в пакете с дозатором</span><p>
    <span>Лечебная анапская грязь может применяться в сочетании с грязевыми аппликаторами и грязевыми термокомпрессами. Пакетированная грязь легко дозируется и  экономно расходуется благодаря упаковке Дойпак — самой прогрессивной форме упаковки, обеспечивающей удобство транспортировки, хранения и использования грязи.



 
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