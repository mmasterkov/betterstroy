<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Дизайн-проект кухни");
$APPLICATION->SetPageProperty("title", "");
?>

<!--content-->
<div class="content"> 
<div class="thumb-box1">
<div class="container content-in-page">
<h1 class="wow fadeIn h1css">Дизайн-проект кухни</h1>



<?
$arGallery = array(
 
	"/img/kuchni/1.jpg",
	"/img/kuchni/2.JPG",
	"/img/kuchni/3.jpg",
	"/img/kuchni/4.jpg",
	"/img/kuchni/5.jpg",
	"/img/kuchni/6.jpg",
	"/img/kuchni/7.jpg",
	"/img/kuchni/8.jpg",
	"/img/kuchni/9.jpg",
	"/img/kuchni/10.jpg",
	"/img/kuchni/11.jpg",
	
	
	
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