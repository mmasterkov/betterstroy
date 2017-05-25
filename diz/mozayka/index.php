<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Мозайка");
$APPLICATION->SetPageProperty("title", "");
?>

<!--content-->
<div class="content"> 
<div class="thumb-box1">
<div class="container content-in-page">
<h1 class="wow fadeIn h1css">Мозайка</h1>



<?
$arGallery = array(
 
	"/img/mozayka/1.jpg",
	"/img/mozayka/2.jpg",
	"/img/mozayka/3.jpg",
	"/img/mozayka/4.jpg",
	"/img/mozayka/5.jpg",
	"/img/mozayka/6.jpg",
	"/img/mozayka/7.jpg",
	"/img/mozayka/8.jpg",
	"/img/mozayka/9.jpg",

	
);

showGallery($arGallery);
?>


<div style="clear:both;"></div> 

<br />



<br /><br />

<p class="wow fadeIn likeh4">Другие проекты</p>

<div class="razd">
       <?//Подключаем единое порфтолио фасадных работ.
		include("../dekorirovanie-interera/dekorirovanie-interera-primery.php");?>
    </div>

<div style="clear:both"></div>


<br /><br />

</div></div></div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>