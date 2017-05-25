<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("3D-визуализация примеры");
$APPLICATION->SetPageProperty("title", "");
?>

<!--content-->
<div class="content"> 
<div class="thumb-box1">
<div class="container content-in-page">
<h1 class="wow fadeIn h1css">3D-визуализация примеры</h1>



<?
$arGallery = array(
 
	"/img/3d-vizualizacia/1.png",
	"/img/3d-vizualizacia/2.png",
	"/img/3d-vizualizacia/3.png",
	"/img/3d-vizualizacia/3.jpg",
	"/img/3d-vizualizacia/4.jpg",
	"/img/3d-vizualizacia/5.jpg",
	"/img/3d-vizualizacia/6.jpg",
	"/img/3d-vizualizacia/7.jpg",
	"/img/3d-vizualizacia/8.jpg",
	"/img/3d-vizualizacia/9.jpg",
	"/img/3d-vizualizacia/10.jpg",
	"/img/3d-vizualizacia/11.jpg",
	"/img/3d-vizualizacia/12.jpg",
	"/img/3d-vizualizacia/13.jpg",
	"/img/3d-vizualizacia/14.jpg",
	"/img/3d-vizualizacia/15.jpg",
	"/img/3d-vizualizacia/16.jpg",
	"/img/3d-vizualizacia/17.jpg",
	"/img/3d-vizualizacia/18.jpg",
	"/img/3d-vizualizacia/19.jpg",
	"/img/3d-vizualizacia/20.jpg",
	"/img/3d-vizualizacia/21.jpg",
	
  
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