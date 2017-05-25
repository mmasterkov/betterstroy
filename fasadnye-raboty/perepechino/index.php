<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Устройство вентфасада в складском комплексе Перепечино");
$APPLICATION->SetTitle("Аксиньино - устройство утеплённого мокрого фасада");
?>
<!--content-->
<div class="content"> 
<div class="thumb-box1">
<div class="container content-in-page">
<h1 class="wow fadeIn h1css">Устройство вентфасада в складском комплексе Перепечино</h1>

<?
$arGallery = array(
  "/img/perepechino/1.JPG",
  "/img/perepechino/2.JPG",
  "/img/perepechino/3.JPG",
  "/img/perepechino/4.JPG",
);

showGallery($arGallery);
?>

<div style="clear:both;"></div> 
<br />

<p class="wow fadeIn likeh4">Другие проекты</p>

<div class="razd">
      <?//Подключаем единое порфтолио фасадных работ.
		include("../fasadnye-raboty-primery.php");?>
    </div>

<div style="clear:both"></div>


<br /><br />
  </div>
</div></div></div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>