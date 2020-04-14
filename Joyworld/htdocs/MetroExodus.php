<html>

<head>
    <meta charset="UTF-8">
    <title>Joy World</title>
    <link rel="shortcut icon" type="image/x-icon" href="Css/images/LogoG.png">
    <link rel="stylesheet" href="Css/StyleGame.css" type="text/css" />
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
        <div class="forms" style="margin-top:55px;"><div style="margin-right:20px;">Логин</div><input type="text"  class="text_forms" id="registr_username" name="r_username"  maxlength="40"></div>
        <div class="forms" style="margin-top:20px;"><div style="margin-right:20px;">Почта</div><input type="text"  class="text_forms" id="register_mail" name="r_email" maxlength="40"></div>
        <div class="forms" style="margin-top:20px;"><div style="margin-right:20px;">Пароль</div><input type="password"  class="text_forms" id="register_password" name="r_password" maxlength="40"></div>
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
      <div id = "Text">Metro Exodus</div>

      <div id = "Game1">

         <div id = "TextPopularGame">Metro Exodus</div>
         <div id = "TextAdditional" style="margin-left: -50px;margin-top: -40px; width: 600px; align:left">
            Дата выпуска: 15 февраля 2019<br>Жанр: Экшены<br>Разработчик: 4A Games<br>Издатель: Deep Silver<br>Платформа: PC<br>Язык интерфейса: <b>Русский, Английский</b><br>Язык озвучки:<b> Русский, Английский</b><br>Таблeтка: <b>Вшито (CPY)</b><br><br><b>Системные требования:</b><br>ОС: Windows, 7, 8, 10 (64-bit only)<br>Процессор: Intel Core i5-4440 or AMD FX-6300 @ 3.5 GHz<br>Оперативная память: 8 GB ОЗУ<br>Видеокарта: GeForce GTX 670 / GeForce GTX 1050 / AMD Radeon HD 7870<br>Место на диске: 59 GB</div>
      </div>

        <div id="download_button">
            <a href= "download_file.php?filename=Torrent/Metro.torrent">Скачать</a>
        </div>

        <div id = "TextAdditional" style="margin-left: -235px;margin-top: 20px; width:920px; align:left">В 2018 году прибудет третья компьютерная игра, разработанная на основе вселенной постапокалиптических романов Дмитрия Глуховского «Метро». Новинка, получившая название Metro Exodus, что значит «Метро Исход», была официально анонсирована в рамках прошедшей 11 июня пресс-конференции Microsoft, предшествовавшей выставке E3 2017. Metro Exodus продолжает события двух предыдущих игр, Metro 2033 и Metro Last Light, ее разработкой и издательством занимаются те же компании — 4A Games и Deep Silver.<br><br>

        Многие геймеры явно будут с нетерпением ожидать возможности скачать торрент Metro Exodus от хатаба или механиков, поскольку триквел позволит увидеть эту вселенную по-новому. Во-первых, мир теперь будет открытым, хотя сюжетные уровни и останутся линейными. Во-вторых, Артем и его приятели впервые отправятся за пределы Москвы — они будут исследовать разные земли разрушенной России в поисках нового места для жизни. В-третьих, за четверть века нескончаемой холодной зимы наконец наступит весна, а за ней лето, а за ним осень... И конечно, третья часть будет выполнена в лучших традициях серии, в том числе сохранит альтернативность концовки.<br><br>

        Итак, в Metro Exodus геймеру в роли Артема предстоит много путешествовать по поверхности. А поверхность — это величественные пейзажи, пусть и не такие невинные, какой была природа много тысячелетий назад, и не такие индустриальные, какой была Россия до ядерной войны, заставившей немногочисленные группы оставшихся в живых людей спуститься в метрополитен с целью выжить. Какими бы они ни были, эти бескрайние просторы не могут не впечатлять.<br><br> </div>

        <iframe width="900" height="500" src="https://www.youtube.com/embed/bxgAKQnH0eg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen style="margin-left: 50px;margin-top: 25px; padding-bottom: 50px;"></iframe>

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