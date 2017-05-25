<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Дизайн-проект гостиной в 3х цветах");
$APPLICATION->SetPageProperty("title", "");
?>

<!--content-->
<div class="content"> 
<div class="thumb-box1">
<div class="container content-in-page">
<h1 class="wow fadeIn h1css">Дизайн-проект гостиной в 3х цветах</h1>



<?
$arGallery = array(
 
	"/img/gostinnaya-3cveta/1.jpg",
	"/img/gostinnaya-3cveta/2.jpg",
	"/img/gostinnaya-3cveta/3.jpg",
	
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