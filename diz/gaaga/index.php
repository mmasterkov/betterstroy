<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Дизайн-проект квартиры в Гааге");
$APPLICATION->SetPageProperty("title", "");
?>

<!--content-->
<div class="content"> 
<div class="thumb-box1">
<div class="container content-in-page">
<h1 class="wow fadeIn h1css">Дизайн-проект квартиры в Гааге</h1>



<?
$arGallery = array(
  "/img/gaaga/1.jpg",
  "/img/gaaga/2.jpg",
  "/img/gaaga/3.jpg",
  "/img/gaaga/4.jpg",
  "/img/gaaga/5.jpg",
  "/img/gaaga/6.jpg",
  "/img/gaaga/7.jpg",
  "/img/gaaga/8.jpg",
  "/img/gaaga/9.jpg",
  "/img/gaaga/10.jpg",

  
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