<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Дизайн-проект Мосфильмовская");
$APPLICATION->SetPageProperty("title", "");
?>

<!--content-->
<div class="content"> 
<div class="thumb-box1">
<div class="container content-in-page">
<h1 class="wow fadeIn h1css">Дизайн-проект Мосфильмовская</h1>



<?
$arGallery = array(
 
	"/img/mosfilmovskaya/1.jpg",
	"/img/mosfilmovskaya/2.jpg",
	/*"/img/mosfilmovskaya/3.jpg",
	"/img/mosfilmovskaya/4.jpg",
	"/img/mosfilmovskaya/5.jpg",
	"/img/mosfilmovskaya/6.jpg",
	"/img/mosfilmovskaya/7.jpg",
	"/img/mosfilmovskaya/8.jpg",
	"/img/mosfilmovskaya/9.jpg",
	"/img/mosfilmovskaya/10.jpg",
	"/img/mosfilmovskaya/11.jpg",
	"/img/mosfilmovskaya/12.jpg", */
	
	
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