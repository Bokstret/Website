<html>

<head>
	<meta charset="UTF-8">
	<title>Joy World</title>
	<link rel="shortcut icon" type="image/x-icon" href="Css/images/LogoG.png">
    <link rel="stylesheet" href="Css/StyleGames.css" type="text/css" />
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


    <div id="main_cont">

    	<a href="/MetroExodus">
    	<div id = "Game1" style="margin-left: 115px; margin-top: 50px;"><div id = "TextPopularGame">Metro Exodus</div>
    	</div>
    	</a>
    	<a href="Game2.html">
    	<div id = "Game2"><div id = "TextPopularGame">Control</div>
    	</div>
    	</a>
    	<a href="Game3.html">
    	<div id = "Game3"><div id = "TextPopularGame">Greedfall</div>
    	</div>
    	</a>
    	<a href="Game4.html">
    	<div id = "Game4">
    	<div id = "TextPopularGame">Subnautica</div>		
    	</div>
    	</a>
    	<a href="Game5.html">
    	<div id = "Game5">
    	<div id = "TextPopularGame">The Witcher 3 Wild Hunt</div>	
    	</div>
    	</a>
    	<a href="Game6.html">
    	<div id = "Game6">
    	<div id = "TextPopularGame">Detroit: Become Human</div>	
    	</div>
    	</a>
    	<a href="Game7.html">
    	<div id = "Game7">
    	<div id = "TextPopularGame">Grand Theft Auto V</div>	
    	</div>
    	</a>
    	<a href="Game8.html">
    	<div id = "Game8">
    	<div id = "TextPopularGame">Fallout 4</div>	
    	</div>
    	</a>
    	<a href="Game9.html">
    	<div id = "Game9">
    	<div id = "TextPopularGame">Biomutant</div>	
    	</div>
    	</a>
    	<a href="Game10.html">
    	<div id = "Game10">
    	<div id = "TextPopularGame">Mortal Kombat XI</div>	
    	</div>
    	</a>
    	<a href="Game11.html">
    	<div id = "Game11">
    	<div id = "TextPopularGame">Divinity Original Sin II</div>	
    	</div>
    	</a>
    	<a href="Game12.html">
    	<div id = "Game12">
    	<div id = "TextPopularGame">Gears 5</div>	
    	</div>
    	</a>
    	<a href="Game13.html">
    	<div id = "Game13">
    	<div id = "TextPopularGame">Heavy Rain</div>	
    	</div>
    	</a>
    	<a href="Game14.html">
    	<div id = "Game14">
    	<div id = "TextPopularGame">Magic The Gathering Arena</div>	
    	</div>
    	</a>
    	<a href="Game15.html">
    	<div id = "Game15">
    	<div id = "TextPopularGame">Rage 2</div>	
    	</div>
    	</a>

		<a href="#" title="Вернуться к началу" class="topbutton">^</a>


    </div>

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
