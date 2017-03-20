<?php
require('./form.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>BetterStroy.ru - Строительная компания. Все виды работ.</title>
<meta charset="utf-8">    
<meta name="description" content="">
<meta name="keywords" content="">

<!--CSS-->
<link rel="stylesheet" href="../css/bootstrap.css" >
<link rel="stylesheet" href="../css/style.css">

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<!-- Bootstrap JS is not required, but included for the responsive demo navigation and button states -->
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.2/js/bootstrap.min.js"></script>
<script src="http://blueimp.github.io/Gallery/js/jquery.blueimp-gallery.min.js"></script>
<script src="../js/bootstrap-image-gallery.js"></script>

<link rel="stylesheet" href="http://blueimp.github.io/Gallery/css/blueimp-gallery.min.css">
<link rel="stylesheet" href="../css/bootstrap-image-gallery.css">
<link rel="icon" href="http://betterstroy.ru/img/icon.ico" type="image/x-icon">
<link rel="shortcut icon" href="http://betterstroy.ru/img/icon.ico" type="image/x-icon">
<!--JS-->
</head>
<body>

<!--header-->
<header class="indent clearfix">

    <nav id="stuck_container" class="navbar navbar-default navbar-static-top tm_navbar clearfix" role="navigation">
        <div class="container">
            <h1 class="navbar-brand navbar-brand_"><a href="http://betterstroy.ru"><img src="../img/logo.png" alt="logo"></a></h1>
            <ul class="nav sf-menu clearfix">
                <li><a href="http://betterstroy.ru">Главная</a></li>
                
                <li class="active"><a href="http://betterstroy.ru#services">Услуги</a></li>
                <li><a href="#contact">Оставить заявку</a></li>
                <li><a href="#contact">Контакты</a></li>
            </ul>
        </div>
    </nav>
</header>

<!--content-->
<div class="content"> 
   

    <div class="thumb-box1">
        <a  name="services"><div class="container"></a>
           
            <div class="container">
<div ><p style="color:black;"> <h3>К сожалению, страница не найдена. Вернуться на <a href="/">главную.</a></h3>
</p></div>

</div>
        </div>
    </div>

    

</div>
<!--footer-->
<footer>
<a name="contact"><section class="content_map" style="padding-top: 50px""></a>
     <h3><font color="white"> Оставить заявку </font></h3>
    <form class="form-horizontal"  name="testForm" method="post" action="<?php echo($_SERVER['PHP_SELF']); ?>" style="width: 500px; margin-left: 30%;">
  <fieldset>
    
    <div class="form-group">
      <label for="inputPassword"  class="control-label col-xs-4">Телефон</label>
      <div class="col-xs-8">
        <input  class="form-control" name="first" placeholder="Телефон">
      </div>
    </div>
	<div class="form-group">
      <label for="inputText" class="control-label col-xs-4">Комментарий</label>
      <div class="col-xs-8">
        <textarea class="form-control" rows="5" name="seventh"  placeholder="Текст комментария"></textarea>
      </div>
    </div>


    <div class="form-group">
      <div class="col-xs-offset-4 col-xs-8">
        <button type="submit" name="sended" class="btn btn-primary">Отправить</button>
      </div>
    </div>
	 <input type="hidden" name="eighth" value="Какое-нибудь значение скрытого поля" />
  </fieldset>
  
  
</form>
<?
// Проверяем была ли отправлена форма
if(isset($_POST['sended'])) {
        // Переменная, в которую будем собирать текст нашего сообщения
        $message = 'Создана новая заявка<br />';
        // Текстовый инпут теперь ы переменной $first
        $first = isset($_POST['first']) ? $_POST['first'] : '';
        $message .= 'В поле телефон ввели: ' . htmlspecialchars($first) . '<br />';
        
        // Поле для текста
        $seventh = isset($_POST['seventh']) ? $_POST['seventh'] : '';
        $message .= 'В поле комментарий было введено: ' . nl2br(htmlspecialchars($seventh)) . '<br />';
        // Значение скрытого поля
        //$eighth = isset($_POST['eighth']) ? $_POST['eighth'] : '';
        //$message .= 'В скрытом поле было: ' . htmlspecialchars($eighth);
        // Отправляем письмо
        $headers = array(
                'MIME-Version: 1.0',
                'From: ' . $siteEmail,
                'Reply-To: ' . $siteEmail,
                'Content-Type: text/html; charset=utf-8'
        );
        if(mail($emailAddress, $emailTheme, $message, implode("\r\n", $headers)))
                $message .= "'<br />Ваша заявка была успешно отправленна! Ваш контактный телефон:' .$eighth." ;
        else
                $message .= '<br />PHP считает, что письмо отправить не удалось...';
        // А также покажем на странице введённые данные и результат отправки письма
        //echo($message);
}
?>
</section>

    <div class="tools-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 wow fadeInUp">
                    <div class="maxheight">
                        <p class="title">Телефон</p>
                        <p>+7 499 755 5343</p>
						<p>+7 925 435 2445</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="maxheight">
                        <p class="title">E-Mail</p>
                        <p><a href="mailto:info@betterstroy.ru">info@betterstroy.ru</a></p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="maxheight">
                        <p class="title">Соц. сети</p>
                        <ul class="follow_icon">
                            <li><a href="https://vk.com/club71069464"><img src="../img/vk.png"  width="64px"  height="64px" ></img></a></li>
                            <li><a href="#"><img src="../img/insta.png"  width="54px"  height="54px" style="margin-top:5px;" ></img></a></a></li>
                            <li><a href="#" class="fa fa-rss"></a></li>
                            <li><a href="#" class="fa fa-pinterest"></a></li>
                            <li><a href="#" class="fa fa-linkedin"></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="indent maxheight">
                        <p class="title">Адрес</p>
                        <p> М.О. г.Одинцово <br>Садовая ул., дом 3</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- Yandex.Metrika counter --><script type="text/javascript">(function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter29696835 = new Ya.Metrika({id:29696835, webvisor:true, clickmap:true, trackLinks:true, accurateTrackBounce:true}); } catch(e) { } }); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks");</script><noscript><div><img src="//mc.yandex.ru/watch/29696835" style="position:absolute; left:-9999px;" alt="" /></div></noscript><!-- /Yandex.Metrika counter -->
</footer>


</body>
</html>