<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Строительство асфальтобетонного завода г. Москва, ул. Рябиновая, 34");
$APPLICATION->SetPageProperty("description","Компания Better Stroy занимается ремонтно-отделочными и малоэтажными строительными работами: фасадные работы, отделка и ремонт квартир. Строительство асфальтобетонного завода г. Москва, ул. Рябиновая, 34. Наш телефон в Москве: +7 (499) 755-53-43");
?>

<!--content-->
<div class="content"> 
<div class="thumb-box1">
<div class="container content-in-page">
<h1 class="wow fadeIn h1css">Строительство асфальтобетонного завода г. Москва, ул. Рябиновая, 34</h1>


<?
$arGallery = array(
	"/img/monolitnye-raboty/fancy/fancy1.jpg",
	"/img/monolitnye-raboty/fancy/fancy2.jpg",
	"/img/monolitnye-raboty/fancy/fancy3.jpg",
	"/img/monolitnye-raboty/fancy/fancy4.jpg",
	"/img/monolitnye-raboty/fancy/fancy5.jpg",
	"/img/monolitnye-raboty/fancy/fancy6.jpg",
	"/img/monolitnye-raboty/fancy/fancy8.jpg",
	"/img/monolitnye-raboty/fancy/fancy9.jpg",
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