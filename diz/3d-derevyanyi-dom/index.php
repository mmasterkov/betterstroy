<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("3D-визуализация деревянный дом");
$APPLICATION->SetPageProperty("title", "");
?>

<!--content-->
<div class="content"> 
<div class="thumb-box1">
<div class="container content-in-page">
<h1 class="wow fadeIn h1css">3D-визуализация деревянный дом</h1>



<?
$arGallery = array(
 
	"/img/3d-derevyanyi-dom/1.jpg",
	"/img/3d-derevyanyi-dom/2.jpg",
	"/img/3d-derevyanyi-dom/3.jpg",
	"/img/3d-derevyanyi-dom/4.jpg",
	"/img/3d-derevyanyi-dom/5.jpg",
	"/img/3d-derevyanyi-dom/6.jpg",
	"/img/3d-derevyanyi-dom/7.jpg",
	"/img/3d-derevyanyi-dom/8.jpg",
	"/img/3d-derevyanyi-dom/9.jpg",
	"/img/3d-derevyanyi-dom/10.jpg",
  
);

showGallery($arGallery);
?>


<div style="clear:both;"></div> 

<br />



<br /><br />

<p class="wow fadeIn likeh4">Другие проекты</p>

<div class="razd">
       <?//Подключаем единое порфтолио фасадных работ.
		include("../3d-vizualizatsiya/3d-vizualizatsiya-primery.php");?>
    </div>

<div style="clear:both"></div>


<br /><br />

</div></div></div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>