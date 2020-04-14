<html>

<head>
	<meta charset="UTF-8">
	<title>Joy World</title>
	<link rel="shortcut icon" type="image/x-icon" href="Css/images/LogoG.png">
	<link rel="stylesheet" href="Css/StyleAbout.css" type="text/css" />
	<link rel="stylesheet" href="Css/Master.css">
	<script type="text/javascript" src="Js/Login.js"></script>
  <script type="text/javascript" src="Js/Auth.js"></script>
  <script type="text/javascript" src="Js/DayNight.js"></script>
  <script type="text/javascript" src="Js/Aj_auth.js"></script>
  
</head>
<body>
	
	<div id="form_back" style="height:156%;">
    <div id='registr_form'>
      <div id="form_close" onclick="background_off();">
        <div class="cross" style="float:left;transform:rotate(45deg);"></div>
        <div class="cross" style="transform:rotate(135deg);"></div>
      </div>
       <form id="form1" method="post" name="registr">
        <div class ="form_cont">
        <div class="forms" style="margin-top:55px;"><div style="margin-right:20px;">Логин</div><input type="text"  class="text_forms" id="registr_username" name="r_username"  maxlength="40" required="required"></div>
        <div class="forms" style="margin-top:20px;"><div style="margin-right:20px;">Почта</div><input type="text"  class="text_forms" id="register_mail" name="r_email" maxlength="40"required="required"></div>
        <div class="forms" style="margin-top:20px;"><div style="margin-right:20px;">Пароль</div><input type="password"  class="text_forms" id="register_password" name="r_password" maxlength="40"required="required"></div>
        <div id="r_error_text" style="font-size:13px;color:crimson;margin-top:5px;height: 15.2px;"></div>
        <input type="submit" id="registr_button" value="Зарегистрироваться">
        </div>
      </form>
    </div>
    </div>

<div id="back"></div>
	<div class = "header">
			<header>
        <div class = "Button" id="Mode" onclick = "Night()" style="margin-left:-185px; Button:hover:text-decoration: none;">Темный режим</div>
				<a href="Index.php">
		    	<div id="Img" ></div>
		    	</a>

		    	<div id="Menu">
				
		    	<div class="Button">
                <a href="/">Главная</a>
                </div>

                <div class="Button">
                <a href="/news">Новости</a>
                </div>

                <div class="Button">
                <a href="/games">Игры</a>
                </div>

                <div class="Button">
                <a href="/about">О нас</a>
                </div>

                <div style="display:none;" id="user_block">
                  <div id="nickname">nickname</div>
                 <div style="border-radius:50%;background:black;height:50px;width:50px;margin-left:20px;"></div>
                </div>

                <div class = "Exit_Button" style="display:none" id="Exit" onclick = "Exit()">Выход</div>


          <div class="Button" id = 'reg' style=" display:none" onclick = "background()">Регистрация</div>

               
          <div class="Reg_Button" id='log' style="display:none" onclick = "open_registr()">Войти</div>
          
          <div id = "regist" class="registr">
                    <form id="form" name="auth" method="post">
            <div class ="form_cont_log" style="margin-right:60px;">
                <div class="forms_log"><input type="text" class="text_forms" name="username" id = "username" placeholder="Логин" maxlength="40"></div>
                <div class="forms_log" style="margin-top:40px;"><input type="password" class="text_forms"name="password" id = "password" placeholder="Пароль" maxlength="40"></div>
                <input type="submit" id="login_button" value="Войти"></div>
                </form>
          </div>

		    </header>

	</div>

    <div id = "main_cont">
      <div id = "TextAbout">Контактная информация</div>
      <table  cellspacing="0">
   <tr>
    <th>E-mail</th>
    <th colspan="3">JoyWorld@hotmail.com</th>
   </tr>
   <tr>
     <th>Телефон</th>
     <td>+380980541285</td>
   </tr>
    <tr>
      <th>Viber</th>
      <td>Поддерживается</td>
    </tr>
   <tr>
    <th>WhatsApp</th>
    <td>Поддерживается</td>
   </tr>
   <tr>
    <th>Telegram</th>
    <td>Поддерживается</td>
   </tr>
  </table>

  <div id = "TextAbout">Наши преимущества</div>
  <div id = "block"></div>


 <ul class="border">
  <li>Актуальные новости</li>
  <li>Большой список игр</li>
  <li>Комфортный интерфейс</li>
  <li>Авторитетное мнение</li>
  <li>Объективная критика</li>
</ul>

       <div id="comments">
       <div class="title">Отзывы</div>
       <div id="post_comment_cont"><form name='form_comment'><input type='text' value='-1' style="display:none;" name="comment_number" id="comment_number" required="required"><textarea maxlength="50" id="post_comment_textarea" name='comment_write' minlength="1"required="required"></textarea></form><div id="post_comment_button">Отправить</div></div>
       </div>
       <div id="load_comment">Еще</div>
    </div>



    </div>
  <a href="#" title="Вернуться к началу" class="topbutton">^</a>
	<div id = "Footer">
		<div id="social_medias">
        <a href="https://www.facebook.com/" style="margin-left:15px"><div class="social_media"></div></a>
        <a href="https://twitter.com"><div class="social_media"></div></a>
        <a href="https://www.instagram.com/"><div class="social_media"></div></a>
        <a href="https://www.youtube.com/"><div class="social_media"></div></a>
      </div>

	</div>
              


</body>
	
</html>