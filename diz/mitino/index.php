<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Дизайн-проект Митино");
$APPLICATION->SetPageProperty("title", "");
?>

<!--content-->
<div class="content"> 
<div class="thumb-box1">
<div class="container content-in-page">
<h1 class="wow fadeIn h1css">Дизайн-проект Митино</h1>



<?
$arGallery = array(
 
	"/img/mitino/1.JPG",
	"/img/mitino/2.JPG",
	"/img/mitino/3.JPG",
	"/img/mitino/4.JPG",
	"/img/mitino/5.JPG",
	"/img/mitino/6.JPG",
	"/img/mitino/7.JPG",
	"/img/mitino/8.JPG",
	"/img/mitino/9.JPG",
	"/img/mitino/10.JPG",
	"/img/mitino/11.JPG",
	"/img/mitino/12.JPG",
	"/img/mitino/13.JPG",
	"/img/mitino/14.JPG",
	"/img/mitino/15.JPG",
	"/img/mitino/16.JPG",
	"/img/mitino/17.JPG",
	"/img/mitino/18.JPG",
	"/img/mitino/19.JPG",
	
	
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