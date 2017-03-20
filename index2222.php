<?
if ($_SERVER['REQUEST_URI']=="/index.php") {
  header('Location: http://'.$_SERVER['HTTP_HOST'], true, 301);
  exit;
}
?>

<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("keywords", "строительство под ключ москва");
$APPLICATION->SetPageProperty("description", "Компания BetterStroy предлагает услуги проектирования и строительства под ключ в Москве. Большой опыт работы в данной сфере позволяет гарантировать отличный результат. Звоните: +7 (499) 755-53-43, +7 (925) 435-24-45.");
$APPLICATION->SetTitle("Строительство под ключ в Москве");
?>

<!--content-->
<div class="content"> 

            <ul class="bxslider">
                              <? /* <li>
                                <div style="width:100%;overflow:hidden;">
                                    <img src="/img/banner-new-year.png" width="1903" height="333" style="height:333px;width:1903px;max-width:1903px;margin-left:-952px;padding-left:50%;"/> 
                                </div>
                              </li> */ ?>
                              <li>
                                <div style="width:100%;overflow:hidden;">
                                    <img src="/img/banner1.jpg" width="1903" height="333"/> 
                                </div>
                              </li>
                              <li>
                                <div style="width:100%;overflow:hidden;">
                                   <img src="/img/banner_food.jpg"/>
                                </div>
                              </li>
                              <li>
                                <div style="width:100%;overflow:hidden;">
                                    <img src="/img/banner_flowers.jpg"/>
                                </div>
                              </li>
            </ul>
    <div class="thumb-box2">
        <div class="container">
            <h1><p class="title wow fadeInUp"><span>Строительство под ключ</span></p></h1>
          
            <div class="row">
                <div class="col-lg-8 col-md-10 col-lg-offset-2 col-md-offset-1 wow fadeInUp">
                    <div class="list_carousel1 responsive clearfix ">
                        <ul id="foo1">
                            <li>
                               
                                <p>Компания BetterStroy оказывает услуги: строительство зданий, ремонт, обустройство и утепление фасадов, монолитные работы, ремонтно-отделочные работы квартир, офисных помещений, магазинов любой сложности, инженерное и дизайн проектирование.</p>	  <div style="position:relative; padding-top:20px; text-align:center;">
                 <a href="/kalkulyator/" class="order-bt">Калькулятор</a>
            </div>
								<!-- div class="number_main">		
								Тел. +7(925) 435-24-45	<br><br>
								Тел. +7(499) 755-53-43<br><br>
								E-Mail: <a href="mailto:info@betterstroy.ru">info@betterstroy.ru</a></div --> 
                                <br><div class="extra">
 <? /* При заказе от 50 кв. м. и более, скидка 10% на ремонтно-отделочные работы. </div> */ ?>
                            </li>
                            
                            
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    <div class="thumb-box4">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6 wow fadeInUp">
                    <figure><img src="img/icon4.png" alt=""></figure>
                    <div class="extra-wrap">
                        <p class="title">Гибкие цены</p>
                        <p></p>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6 wow fadeInUp" data-wow-delay="0.1s">
                    <figure><img src="img/icon4.png" alt=""></figure>
                    <div class="extra-wrap">
                         <p class="title">Заключение договора</p>
                        <p></p>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6 wow fadeInUp" data-wow-delay="0.15s">
                    <figure><img src="img/icon4.png" alt=""></figure>
                    <div class="extra-wrap">
                         <p class="title">Своевременное исполнение сроков</p>
                        <p></p>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6 wow fadeInUp" data-wow-delay="0.2s">
                    <figure><img src="img/icon4.png" alt=""></figure>
                    <div class="extra-wrap">
                         <p class="title">Выезд на объект, осмотр и оценка - бесплатно</p>
                        <p></p>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6 wow fadeInUp" data-wow-delay="0.25s">
                   <figure><img src="img/icon4.png" alt=""></figure>
                    <div class="extra-wrap">
                         <p class="title">Составление сметы-бесплатно</p>
                        <p></p>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6 wow fadeInUp" data-wow-delay="0.3s">
                   <figure><img src="img/icon4.png" alt=""></figure>
                    <div class="extra-wrap">
                         <p class="title">Гарантийные обязательства</p>
                        <p></p>
                    </div>
                
                </div>
            </div>
        </div>
    </div>
   

    <div class="thumb-box1">
        <a  name="services"><div class="container"></a>
            <h3 class="wow fadeIn">Наши услуги</h3>
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 wow fadeInUp">
                    <div class="thumb-pad1">
                        <div class="thumbnail">
                            <figure><a href="/maloetazhnoe-stroitelstvo/"><img src="img/img_mal_main.jpg" alt=""></a></figure>
                            <div class="caption">
                                <p class="title"><a href="/maloetazhnoe-stroitelstvo/">Малоэтажное строительство</a></p>
                               <p>Строительство жилых зданий: домов, дач, коттеджей  по самым современным технологиям, в кротчайшие сроки.<br> <b>Цена договорная.</b></p>
                                <a href="/maloetazhnoe-stroitelstvo/" class="btn-default btn2">Подробнее</a>
                            </div>  
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="thumb-pad1">
                        <div class="thumbnail">
                            <figure><a href="/otdelochnye-raboty/"><img src="img/img_otd_main.jpg" alt=""></a></figure>
                            <div class="caption">
                                <p class="title"><a href="/otdelochnye-raboty/">Отделочные работы</a></p>
                                <p>Капитальный, косметический, евроремонт. Ремонт квартир вторичного фонда и новостроек, перепланировки и реконструкции. <br><b>Цена: От 5500 руб кв.м.</b></p>
                               <a href="/otdelochnye-raboty/" class="btn-default btn2">Подробнее</a>
                            </div>  
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="thumb-pad1">
                        <div class="thumbnail">
                            <figure><a href="/fasadnye-raboty/"><img src="img/page1_pic3_new.jpg" alt=""></a></figure>
                            <div class="caption">
                                <p class="title"><a href="/fasadnye-raboty/">Фасадные работы</a></p>
                                <p>Работы по утеплению, обустройству и ремонту всех видов фасадов зданий с применением  современных и традиционных технологий.<br><b>Цена: От 500 руб кв.м.</b></p>
                                <a href="/fasadnye-raboty/" class="btn-default btn2">Подробнее</a>
                            </div>  
                        </div>
                    </div>
                </div>
               <? /* <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="thumb-pad1">
                        <div class="thumbnail">
                            <figure><a href="/diz/"><img src="img/page1_pic4.jpg" alt=""></a></figure>
                            <div class="caption">
                                <p class="title"><a href="/diz/">Дизайн и проектирование</a></p>
                                <p>Проектирование и монтаж инженерных систем. Дизайн-проект и архитектурные планировки домов, квартир и прочих сооружений.<br><b>Цена договорная.</b></p>
                               <a href="/diz/" class="btn-default btn2">Подробнее</a>
                            </div>  
                        </div>
                    </div>
                </div> */ ?>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="thumb-pad1">
                        <div class="thumbnail">
                            <figure><a href="/monolitnye-raboty/"><img src="img/page1_pic5.png" alt=""></a></figure>
                            <div class="caption">
                                <p class="title"><a href="/diz/">Монолитные работы</a></p>
                                <p>Строительство монолитных объектов, устройство стен и перекрытий из бетона, заливка бетонных полов на объектах.<br><b>Цена от 2000 руб м³.</b></p>
                               <a href="/monolitnye-raboty/" class="btn-default btn2">Подробнее</a>
                            </div>  
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
 <div class="thumb-box3">
        <div class="container">
            <!--<p class="title wow fadeIn"><span>Наши преимушества</span></p>-->
            <div class="row">
                <div class="col-lg-10 col-md-10 col-lg-offset-1 col-md-offset-1">
                    
                    <p class="wow fadeInUp" data-wow-delay="0.1s">
<div class="content-in-page">
                    <p>Компания BetterStroy более 7 лет занимается проектированием и возведением домов, коттеджей в Москве. Мы строим клиентам комфортабельное и недорогое жилье по современным технологиям. </p>
<p>Строительство под ключ — это оптимальное решение для владельцев загородных участков. Оно позволяет реализовать индивидуальные дизайнерские задумки и получить следующие выгоды:</p>
<ul>
<li>Экономию бюджета строительства. Создание проекта, возведение деревянного или каркасного дома, внешнюю и внутреннюю отделку стен и другие мероприятия лучше доверить одному исполнителю. Если подрядчик ответственно выполняет обязательства, то заказчик экономит на дополнительных расходах.</li>
<li>Контролирование процесса строительства. Заказчику проще контролировать этапы и качество работ, когда исполнитель — одна организация. </li>
</ul>
<p>Дома под ключ возводят, как правило, по уже существующим решениям. Клиент подбирает в каталоге проект, который соответствует его пожеланиям и требованиям. То есть заказчик с самого начала видит будущий дом, оценивает его планировку, удобства, подбирает отделочные и кровельные материалы и т. д. Готовые решения экономят деньги и время на разработку нового проекта, решение технологических вопросов. </p>
<h2 style="font-size:16px;margin-bottom:0px">Строительство домов от компании BetterStroy</h2>
<p>Наша компания оказывает следующие виды проектных и строительных услуг:</p>
<ul>
<li>Возведение жилых зданий. Мы строим деревянные и каркасные коттеджи, дачи, частные дома с применением передовых технологий и современных материалов.</li>
<li>Отделочные и фасадные работы любой сложности. Утепление и облицовка наружных стен, внутренняя отделка, капитальный и косметический ремонт. </li>
<li>Проектирование и дизайн. Мы работаем над проектами инженерных систем, архитектурной планировки домов, квартир. </li>
</ul>
<p>Обращайтесь в нашу компанию, если вам нужен уютный и недорогой дом под ключ!</p>
</div>
                    </p>
                    <div class="row">
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>