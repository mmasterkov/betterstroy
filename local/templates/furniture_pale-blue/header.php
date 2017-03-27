<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
IncludeTemplateLangFile(__FILE__);
?> 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="google-site-verification" content="2kDFiGvyjrlVbD6CaBmiXsC-wpl1VX59cLD9cqMxuwI" />
<meta name='yandex-verification' content='60415e88528147b8' />
<meta name="viewport" content="width=device-width, initial-scale=1">
<?$APPLICATION->ShowHead();?>
<!-- CSS -->
<? $googlnoindex = array ('/news/?PAGEN_1=1',
'/?back_url_admin=%2Fbitrix%2Fadmin%2F',
'/index2.php',
'/?%CC%EE%ED%EE%EB%E8%F2%ED%EE%E5_%F1%F2%F0%EE%E8%F2%E5%EB%FC%F1%F2%E2%EE#contact',
'/?&mailform',
'/raschet-stoimosti-stroitelstva/',);

if (in_array($_SERVER['REQUEST_URI'], $googlnoindex)) {
echo '<meta name="googlebot" content="noindex">';}
?>
<?IncludeTemplateLangFile(__FILE__);
?> 
<link href="<?=SITE_TEMPLATE_PATH?>/bootstrap.css" type="text/css" rel="stylesheet" />
<link href="<?=SITE_TEMPLATE_PATH?>/style.css" type="text/css" rel="stylesheet" />
<link href="<?=SITE_TEMPLATE_PATH?>/animate.css" type="text/css" rel="stylesheet" />
<link href="<?=SITE_TEMPLATE_PATH?>/camera.css" type="text/css" rel="stylesheet" />
<link href="<?=SITE_TEMPLATE_PATH?>/bootstrap-image-gallery.css" type="text/css" rel="stylesheet" />
<link href="<?=SITE_TEMPLATE_PATH?>/jquery.bxslider.css" type="text/css" rel="stylesheet" />



<!-- JS -->

<script src="<?=SITE_TEMPLATE_PATH?>/js/demo.js"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/js/bootstrap-image-gallery.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.2/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/ds-comf/ds-form/js/dsforms.js"></script>
<script type="text/javascript" src="/bitrix/templates/furniture_pale-blue/js/jquery.maskedinput.js"></script>

<script src="<?=SITE_TEMPLATE_PATH?>/js/jquery.bxSlider.min.js"></script>
<? if ($_SERVER['REQUEST_URI']=='/news/?PAGEN_1=2') {
$seotitle= 'Новости - 2 страница | Компания BetterStroy | Строительство под ключ в Москве';
echo '<title>'.$seotitle.'</title>';}
else {?><title><?$APPLICATION->ShowTitle()?></title><?}
?>
<!-- <title><?$APPLICATION->ShowTitle()?></title> -->

<script>
jQuery(document).ready(function ($) {
$('div.order-bt').click(function(){
  yaCounter29696835.reachGoal('klik-po-knopke');
  ga('send', 'pageview', '/virtual/klik-po-knopke/');
  });

$('#my-slider > div > div > a.fancyimage').click(function(){
  $(this).attr('href', $(this).children().attr('src'))
    });
});
$(function(){
  $("input[name='first']").mask('+7 (999) 999-99-99');

  $('.bxslider').bxSlider({
    pager: false,
    auto: true,
    speed: 1100,
    pause: 10000,
  });
});
</script>


<script>
$(function () {                                      
    $('ul.nav.sf-menu li a').each(function () {             
        var location = window.location.href; 
        var link = this.href;                
        if(location == link) {               
            $(this).parent().addClass('active');  
        }
    });
}); 
</script>

<script>
   $(document).ready(function() { 
    $('.thumb-pad1 figure a img').hover(function () {
    $(this).stop(true).animate({
      opacity : 0.5
    }, 300)
  }, function () {
    $(this).animate({
      opacity : 1
    }, 300)
  });
  });
</script>

<script>
  $(document).ready(function() {
    $("div.callme-bt").click(function(){
          $("#youtelefon").mask("+7(999) 999-99-99");
    }); 
  });
</script>

 <link rel="stylesheet" href="/fancybox/jquery.fancybox.css" type="text/css" media="screen" /> 
 <script type="text/javascript" src="/fancybox/jquery.fancybox.pack.js"></script> 
  <script type="text/javascript"> 
    $(document).ready(function() { 
      $("a.fancyimage").fancybox(); 
    }); 
  </script> 
  <link rel="stylesheet" type="text/css" href="/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="/slick/slick-theme.css"/>
</head>

<body itemscope itemtype="http://schema.org/WebPage">

  <div id="panel"><?$APPLICATION->ShowPanel();?></div>

  <header class="indent clearfix">
    <nav id="stuck_container" class="navbar navbar-default navbar-static-top tm_navbar clearfix" role="navigation">
      <div class="navbar-brand navbar-brand_">
        <a href="/"><img src="/img/logo-bet.png" alt="logo" width="240"></a>
      </div>
      <div class="sf-contact">
        <div class="sf-contact-item"><span class="fone-tel"><a href="tel:+7(925)435-24-45">+7(925) 435-24-45</a><br /><a href="tel:+7(499) 755-53-43">+7(499) 755-53-43</a></span>
        </div>  
        <div class="sf-contact-item">
             <div  onclick="void(yaCounter29696835.reachGoal('zakaz-zv')); void(ga('send', 'pageview', '/virtual/zakaz-zv/'));"  data-dspopup-id="callme" class="callme-bt"></div>
             <div  onclick=""  data-dspopup-id="vopros" class="vopros-bt"></div>
        </div>
        <div class="sf-contact-item header-time"><span class="h_mail">info@betterstroy.ru</span><br />
          <span class="h_time">Часы работы: с 9 до 21</span>
        </div>

        <div class="sf-contact-item search-header">
          <div class="search-block">
            <?$APPLICATION->IncludeComponent("bitrix:search.form","header",Array(
                    "USE_SUGGEST" => "N",
                    "PAGE" => "#SITE_DIR#search/index.php"
                )
            );?> 
        </div>
        </div>  
      </div>`
      <ul class="nav sf-menu clearfix">
          <li><a href="/">Главная</a></li>
          <li><a href="/o-kompanii/">О компании</a></li>
          <li><a href="#services">Услуги</a>
             <ul class="dropdown">
               <li><a href="/monolitnye-raboty/">Монолитные работы</a></li>
               <li><a href="/remont-kvartir/">Ремонт квартир </a></li>
               <li><a href="/otdelochnye-raboty/">Отделочные работы</a></li>
               <li><a href="/fasadnye-raboty/">Фасадные работы</a>
                   <ul class="dropdown">
                     <li><a href="/fasadnye-raboty/ventfasad/">Монтаж вентилируемых фасадов</a></li>
                     <li><a href="/fasadnye-raboty/rekonstrukciya/">Реконструкция фасадов</a></li>
                     <li><a href="/fasadnye-raboty/pokraska/">Покраска фасадов</a></li>
                     <li><a href="/fasadnye-raboty/remont/">Капитальный ремонт фасадов</a></li>
                     <li><a href="/fasadnye-raboty/uteplenie/">Утепление фасадов</a></li>
                     <li><a href="/fasadnye-raboty/mokryj-fasad/">Мокрый фасад</a></li>
                   </ul> 
               </li>
               <li><a href="/diz/">Дизайн и проектирование</a></li>
               <li><a href="/maloetazhnoe-stroitelstvo/">Малоэтажное строительство</a></li>
             </ul> 
          </li>
	        <li><a href="/prices/">Цены</a></li>
          <li><a href="/sposoby_oplaty/">СПОСОБЫ ОПЛАТЫ</a></li>
          <li><a href="/stati/">Статьи</a></li>
          <li><a href="/otzyvy/">Отзывы</a></li>
          <li><a href="/news/">Новости</a></li>
          <li><a href="/contact/">Контакты</a></li>
      </ul>
    </nav>
  </header>

  <?if ($_SERVER['REQUEST_URI'] != '/') {?>
  <div class="content">
    <div class="container mybreadcrumb">
      <?$APPLICATION->IncludeComponent("bitrix:breadcrumb","",Array(
              "START_FROM" => "0", 
              "PATH" => "", 
          )
      );?>
    </div>
  </div>
  <?}?>
