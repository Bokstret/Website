<html>

<head>
	<meta charset="UTF-8">
	<title>Joy World</title>
	<link rel="shortcut icon" type="image/x-icon" href="Css/images/LogoG.png">
	<link rel="stylesheet" href="Css/StyleNews.css" type="text/css" />
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

        <div id = "Textnews">Новости</div>

        <a href="News1.html" style="float:top;">
            <div id = "News1">
                <div id = "TextMain">Новинки от Apple</div>
                <div id = "TextAdditional">Компания Apple анонсировала Macbook. Спешите узнать его характеристики, что бы решить, стоит ли обращать внимание на эту новинку! Также вы можете увидеть новую модель телефонов iPhone. </div>
            </div>
        </a>

        <a href="News2.html" style="float:top;">
            <div id = "News2">
                <div id = "TextMain">Интервью с разработчиками The Witcher 3 Wild Hunt</div>
                <div id = "TextAdditional">Фанаты вселенной Ведьмака могут начинать радоваться - разработчики поделились новой информацией касательно Геральта и его приключений. Возможно, нас ожидает новая игра по вселенной, но нет гарантий, что главным героем будет ведьмак из школы Волка. </div>            
            </div>
        </a>

        <a href="News3.html" style="float:top;">
            <div id = "News3">
                <div id = "TextMain">Assasins Creed: Vikings</div>
                <div id = "TextAdditional">Древний Египет, Греция, революционная Франция, Италия эпохи Возрождения. Что же ждет нас дальше? Разработчики компании Ubisoft поделились с нами новыми подробностями. </div>
            </div>
        </a>

        <a href="News4.html" style="float:top;">
            <div id = "News4">
                <div id = "TextMain">Новый геймплейный трейлер Death Stranding</div>
                <div id = "TextAdditional">Гений всея игровой индустрии посетит Игромир, на котором продемонстрирует новые геймплейные особенности своей предстоящей игры и ответит на вопросы зрителей.</div>
            </div>
        </a>

        <a href="News5.html" style="float:to;">
            <div id = "News5">
                <div id = "TextMain">Самая ожидаемая RPG 2019 </div>
                <div id = "TextAdditional">Совсем недавно разработчики провели прямую трансляцию, на которой рассказали, когда игроки, купившие доступ к ЗБТ, смогут наконец поиграть. Датой запуска серверов было назначено 25 сентября.  </div>
            </div>
        </a>

    

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