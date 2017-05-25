<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Школа-детский сад Знайка.");
$APPLICATION->SetPageProperty("title", "Косметический ремонт школы-детского сада «Знайка» | Компания BetterStroy");
?>

<!--content-->
<div class="content"> 
<div class="thumb-box1">
<div class="container content-in-page">
<h1 class="wow fadeIn h1css">Косметический ремонт школы-детского сада «Знайка»</h1>



<?
$arGallery = array(
  "/fasadnye-raboty/znaika/img/fancy1.jpg",
  "/fasadnye-raboty/znaika/img/fancy2.jpg",
  "/fasadnye-raboty/znaika/img/fancy3.jpg",
  "/fasadnye-raboty/znaika/img/fancy4.jpg",
  "/fasadnye-raboty/znaika/img/fancy5.jpg",
  "/fasadnye-raboty/znaika/img/fancy6.jpg",
  "/fasadnye-raboty/znaika/img/fancy7.jpg",
  "/fasadnye-raboty/znaika/img/fancy8.jpg",
  "/fasadnye-raboty/znaika/img/fancy9.jpg",
  "/fasadnye-raboty/znaika/img/fancy10.jpg",
  
);

showGallery($arGallery);
?>


<div style="clear:both;"></div> 

<br />

<p>Наша компания выполняла косметический ремонт школы-детского сада «Знайка» по адресу г. Москва, Б-Р. Матроса Железняка, д. 29 А. </p>
<p>Общая площадь объекта — 1160 кв. метров. Заказчик поставил задачу обновить облицовку панельного фасада здания в рамках косметического ремонта. В процессе оказания услуг нами были выполнены следующие работы:</p>
<ul>
<li>расшивка межпанельных швов с их последующей заделкой;</li>
<li>оштукатуривание стен;</li>
<li>шпаклевка и окраска фасада.</li>
</ul>
<p>Выполнение всех работ в рамках косметического ремонта заняло 2 месяца. Результат до и после представлен на фото.</p>

<br /><br />

<p class="wow fadeIn likeh4">Другие проекты</p>

<div class="razd">
       <?//Подключаем единое порфтолио фасадных работ.
		include("../fasadnye-raboty-primery.php");?>
    </div>

<div style="clear:both"></div>


<br /><br />

</div></div></div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>