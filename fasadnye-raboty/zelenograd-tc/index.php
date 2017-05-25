<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Устройство вентфасада в торговом центре г. Зеленоград");
$APPLICATION->SetTitle("Устройство вентфасада в торговом центре г. Зеленоград");
$APPLICATION->SetPageProperty("description", "Компания BetterStroy занимается монтажом металлоконструкций по оптимальной стоимости. Устройство вентфасада в торговом центре г. Зеленоград. Наши телефоны в Москве: +7 (499) 755-53-43, +7 (925) 435-24-45.");
?>
<!--content-->
<div class="content"> 
<div class="thumb-box1">
<div class="container content-in-page">
<h1 class="wow fadeIn h1css">Устройство вентфасада в торговом центре г. Зеленоград</h1>

<?
$arGallery = array(
  "/img/zelenograd-tc/1.JPG",
  "/img/zelenograd-tc/2.JPG",
  "/img/zelenograd-tc/3.JPG",
  "/img/zelenograd-tc/4.JPG",
  "/img/zelenograd-tc/5.JPG",
);

showGallery($arGallery);
?>



<div style="clear:both;"></div> 

<br />

<p class="wow fadeIn likeh4">Другие проекты</p>

<div class="razd">
      <?//Подключаем единое порфтолио фасадных работ.
		include("../fasadnye-raboty-primery.php");?>
    </div>

<div style="clear:both"></div>


<br /><br />


</div></div></div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>