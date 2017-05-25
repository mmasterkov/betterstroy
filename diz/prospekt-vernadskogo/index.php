<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Дизайн-проект Проспект Вернадского");
$APPLICATION->SetPageProperty("title", "");
?>

<!--content-->
<div class="content"> 
<div class="thumb-box1">
<div class="container content-in-page">
<h1 class="wow fadeIn h1css">Дизайн-проект Проспект Вернадского</h1>



<?
$arGallery = array(
 
	"/img/prospekt-vernadskogo/1.jpg",
	"/img/prospekt-vernadskogo/2.jpg",
	"/img/prospekt-vernadskogo/3.jpg",
	"/img/prospekt-vernadskogo/4.jpg",
	"/img/prospekt-vernadskogo/5.jpg",
	"/img/prospekt-vernadskogo/6.jpg",
	"/img/prospekt-vernadskogo/7.jpg",
	"/img/prospekt-vernadskogo/8.jpg",
	"/img/prospekt-vernadskogo/9.jpg",
	"/img/prospekt-vernadskogo/10.jpg",
	"/img/prospekt-vernadskogo/11.jpg",
	"/img/prospekt-vernadskogo/12.jpg",
	"/img/prospekt-vernadskogo/13.jpg",
	"/img/prospekt-vernadskogo/14.jpg",
	"/img/prospekt-vernadskogo/15.jpg",
	
	
);

showGallery($arGallery);
?>


<div style="clear:both;"></div> 

<br />



<br /><br />

<p class="wow fadeIn likeh4">Другие проекты</p>

<div class="razd">
       <?//Подключаем единое порфтолио фасадных работ.
		include("../dizayn-intererov/dizayn-intererov-primery.php");?>
    </div>

<div style="clear:both"></div>


<br /><br />

</div></div></div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>