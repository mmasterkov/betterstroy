<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Устройство вентфасада в д. Ямищево");
?><!--content-->
<div class="content">
	<div class="thumb-box1">
		<h1 class="wow fadeIn h1css">Деревня Ямищево</h1>
        <div class="container content-in-page">
		<div class="number_cat">
			Обустройство утепленного мокрого фасада с использованием, эластичной штукатурки el-manto в коттедже; Московская область, Одинцовский район, д Ямищево
	</div>

<?
$arGallery = array(
  "/img/otd/fancy1.jpg",
  "/img/otd/fancy2.jpg",
  "/img/otd/fancy4.jpg",
  "/img/otd/fancy5.jpg",
  "/img/otd/fancy6.jpg",
  "/img/otd/fancy8.jpg",
  "/img/otd/fancy9.jpg",
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
    </div>
</div></div></div></div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>