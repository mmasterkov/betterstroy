<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Спортивный комплекс Мытищи");
$APPLICATION->SetPageProperty("title", "");
?>

<!--content-->
<div class="content"> 
<div class="thumb-box1">
<div class="container content-in-page">
<h1 class="wow fadeIn h1css">Спортивный комплекс Мытищи</h1>



<?
$arGallery = array(
  "/img/mytishi/1.jpg",
  "/img/mytishi/2.jpg",
  "/img/mytishi/3.jpg",
  "/img/mytishi/4.jpg",
  "/img/mytishi/5.jpg",
  "/img/mytishi/6.jpg",
  "/img/mytishi/7.jpg",
  "/img/mytishi/8.jpg",
  "/img/mytishi/9.jpg",
  "/img/mytishi/10.jpg",
  "/img/mytishi/11.jpg",
  "/img/mytishi/12.jpg",
  "/img/mytishi/13.jpg",

  
);

showGallery($arGallery);
?>


<div style="clear:both;"></div> 

<br />



<br /><br />

<p class="wow fadeIn likeh4">Другие проекты</p>

<div class="razd">
       <?//Подключаем единое порфтолио фасадных работ.
		include("../dizayn-obshchestvennykh-intererov/dizayn-obshchestvennykh-intererov-primery.php");?>
    </div>

<div style="clear:both"></div>


<br /><br />

</div></div></div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>