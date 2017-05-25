<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Устройство забора и отмостки");
$APPLICATION->SetPageProperty("description","Компания Better Stroy занимается ремонтно-отделочными и малоэтажными строительными работами: фасадные работы, отделка и ремонт квартир. Устройство забора и отмостки. Наш телефон в Москве: +7 (499) 755-53-43");
?>

<!--content-->
<div class="content"> 
<div class="thumb-box1">
<div class="container content-in-page">
<h1 class="wow fadeIn h1css">Устройство забора и отмостки</h1>

<?
$arGallery = array(
	"/img/monolitnye-raboty/ustrojstvo-zabora-i-otmostki/IMG-20160219-WA0001.jpg",
  "/img/monolitnye-raboty/ustrojstvo-zabora-i-otmostki/IMG-20160219-WA0002.jpg",
  "/img/monolitnye-raboty/ustrojstvo-zabora-i-otmostki/IMG-20160219-WA0009.jpg",
  "/img/monolitnye-raboty/ustrojstvo-zabora-i-otmostki/IMG-20160219-WA0074.jpg",
  "/img/monolitnye-raboty/ustrojstvo-zabora-i-otmostki/IMG-20160219-WA0075.jpg",
  "/img/monolitnye-raboty/ustrojstvo-zabora-i-otmostki/IMG-20160219-WA0077.jpg",
  "/img/monolitnye-raboty/ustrojstvo-zabora-i-otmostki/IMG-20160219-WA0078.jpg",
  "/img/monolitnye-raboty/ustrojstvo-zabora-i-otmostki/IMG-20160219-WA0079.jpg",
  "/img/monolitnye-raboty/ustrojstvo-zabora-i-otmostki/IMG-20160219-WA0080.jpg",
  "/img/monolitnye-raboty/ustrojstvo-zabora-i-otmostki/IMG-20160219-WA0081.jpg",
  "/img/monolitnye-raboty/ustrojstvo-zabora-i-otmostki/IMG-20160219-WA0090.jpg",
  "/img/monolitnye-raboty/ustrojstvo-zabora-i-otmostki/IMG-20160219-WA0096.jpg",
);

showGallery($arGallery);
?>

  
 
     <div style="clear:both"></div>


<br />

<p class="wow fadeIn likeh4">Другие проекты</p>
		<div class="razd">
			<?include("../monolitnye-raboty-primery.php");?>
		</div>

<div style="clear:both"></div>


<br /><br />
</div></div></div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>