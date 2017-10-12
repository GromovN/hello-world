<header>

 

   	<div id="logo">
   	    <a href="http://bodydirt.com/" title="На главную">
   	        <img src="img/logotipo.png" title="bodydirt.com" alt="bodydirt.com">
   	        <span>BodyDirt</span>
   	    </a>
    </div>
    <div id="about">
    <a href="/ad" title="Узнать детальнее">Оборудывание</a>
    <a href="/kontakti" title="Написать нам письмо">Заказать</a>
    </div>



  <?php if( isset($_SESSION['logged_user'])) : ?>
    Авторизован!<br>
    Добро пожаловать, <?php echo $_SESSION['logged_user']->login; ?>
    <hr>
    <a href="/logout.php">Выйти</a>
<?php else : ?>


   
                <?php endif; ?> 
            </header>           
            <nav>
            <div id="menuShow"><i class="fa fa-bars" aria-hidden="true"></i></div>
            <div id="hideMenu">
            <a href="/texno" title="Узнать о всех новых технологиях">Технология</a>
            <a href="/Opisanie">Описание процедуры</a>
            <a href="/gry">Грязи</a>
            <a href="/kont">Контакты</a>
            <a href="/nas">О нас</a>
            </div>
            <div id="search">  
            <span>Заказать звонок</span>
            <i class="fa fa-phone" aria-hidden="true"></i>
            </div>

            <div id="mobileMenu">
            <a href="/texno">Технология</a><br>
            <a href="/Opisanie">Описание процедуры</a><br>
            <a href="/gry">Грязи</a><br>
            <a href="/kont">Контакты</a> 
            <a href="/nas">O нас</a><br>
            <hr>
            <a href="/reg">Регистрация</a>
            <a href="/voit">Войти</a>
            </div>
            </nav>