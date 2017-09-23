<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
	<title>Bodydirt - Контактная информация</title>
	<link rel="stylesheet" type="text/css" href="css/main.css" charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/main_page.css" charset="utf-8">
  <link rel="stylesheet" type="text/css" href="css/aside.css" charset="utf-8">
  <link rel="stylesheet" type="text/css" href="css/kont.css" charset="utf-8">
	<meta name="decription" content="Оздоровительные процедуры, грязелечение, косметалогия, омоложение">
	<meta name="keywords" content="грязевые аппликации, термокомпрессор, санаторий, косметалогия, лечебная грязь">
	<meta name="viewport" content="width=device-width, initial-scale=1">
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
<h2 class="heading">Свяжитесь с нами</h2>
<div style="clear: both"><br></div>

<div class="block">

  Контактная информация<br>

Адрес:<br>
420029, Россия, Республика Татарстан, г.Казань, ул.Подлужная, д.52<br>

Email:<br> 
ptsmed@mail.ru<br>

Телефон:<br> 
+7 (987) 296-26-92<br>
+7 (843) 296-26-92<br>



  <form>
    <div>
      <input type="email" id="email" placeholder="Email..." onclick="$(this).css ('border-color', '#ccc')">
      <textarea id="message" placeholder="Введите ваше сообщение"></textarea>
    <input type="button" id="send" class="btn" value="Отправить" onclick="$(this).css ('border-color', '#ccc')">
  </div>
  </form>
</div>



     </div>
  </div>
<aside>




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
           
                               <?php
   require_once "blocks/jQuery.php"
   ?>

<script>
$('#send').click (function () {
  var email = $('#email').val ();
  var name = $('#name').val ();
  var message = $('#message').val ();
  $.ajax({
    url:      'ajax/kontakti.php',
    type:   'POST',
    cache:    false,
    data:     {'name':name, 'email':email, 'message':message},
    dataType: 'html',
    beforeSend: function () {
      $('#send').attr ("disabled", "disabled");
    },
    success: function(data) {
      if (data == true) {
        $('#name').val ("");
        $('#email').val ("");
        $('#message').val ("");
        $('#send').text ("Сообщение отправлено");
        $('#email').css ("border-color", "#60fc8c");
        $('#name').css ("border-color", "#60fc8c");
        $('#message').css ("border-color", "#60fc8c");
      } else {
        if (data == false)        
          alert ("Что-то пошло не так! Сообщение не отправлено");
        else {          
          switch (data) {
          case "Имя не указано":
          $('#name').css ("border-color", "#f7b4b4");
          break;
          case "Сообщение не указано":
          $('#message').css ("border-color", "#f7b4b4");
          break;
          case "Неправильный e-mail":
          $('#email').css ("border-color", "#f7b4b4");
          break;
          default:
          $('#email').css ("border-color", "#f7b4b4");
          $('#message').css ("border-color", "#f7b4b4");
          $('#name').css ("border-color", "#f7b4b4");
          }
        }
      }
      $('#send').removeAttr ("disabled");       
    }
  });
});
</script>

</body>
</html>