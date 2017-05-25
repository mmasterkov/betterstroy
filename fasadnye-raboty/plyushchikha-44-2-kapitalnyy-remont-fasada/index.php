<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Плющиха 44/2 - капитальный ремонт фасада");
?>
<div class="content"> 
<div class="thumb-box1">
<div class="container content-in-page">
<h1 class="wow fadeIn h1css">Москва, улица Плющиха, д.44/2 - капитальный ремонт фасада</h1>

<?
$arGallery = array(
  "/img/gallery/plyushchikha/1.JPG",
  "/img/gallery/plyushchikha/2.JPG",
  "/img/gallery/plyushchikha/3.JPG",
  "/img/gallery/plyushchikha/4.JPG",
  "/img/gallery/plyushchikha/5.JPG",
  "/img/gallery/plyushchikha/9.JPG",
  "/img/gallery/plyushchikha/10.JPG",
  "/img/gallery/plyushchikha/11.JPG",
  "/img/gallery/plyushchikha/12.JPG",
  "/img/gallery/plyushchikha/14.JPG",
  "/img/gallery/plyushchikha/16.JPG",
  "/img/gallery/plyushchikha/6.JPG",
  "/img/gallery/plyushchikha/7.JPG",
  "/img/gallery/plyushchikha/8.JPG",
  "/img/gallery/plyushchikha/13.JPG",
  "/img/gallery/plyushchikha/15.JPG",
  "/img/gallery/plyushchikha/17.JPG",
  "/img/gallery/plyushchikha/18.JPG",

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


<br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>