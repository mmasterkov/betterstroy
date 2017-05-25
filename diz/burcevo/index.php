<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Дизайн-проект Бурцево");
$APPLICATION->SetPageProperty("title", "");
?>

<!--content-->
<div class="content"> 
<div class="thumb-box1">
<div class="container content-in-page">
<h1 class="wow fadeIn h1css">Дизайн-проект Бурцево</h1>



<?
$arGallery = array(
 
	"/img/burcevo/1.jpg",
	"/img/burcevo/2.jpg",
	"/img/burcevo/3.jpg",
	"/img/burcevo/4.jpg",
	"/img/burcevo/5.jpg",
	"/img/burcevo/6.jpg",
	"/img/burcevo/7.jpg",
	"/img/burcevo/8.jpg",
	"/img/burcevo/9.jpg",
	"/img/burcevo/10.jpg",

	
	
	
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