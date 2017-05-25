<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Отделка школы танцев D-Fusion Коньково");
?>

<!--content-->
<div class="content"> 
<div class="thumb-box1">
<div class="container content-in-page">
<h1 class="wow fadeIn h1css">Отделка школы танцев D-Fusion Коньково</h1>


<?
$arGallery = array(
  "/img/gallery/d-fusion-konkovo/BfxoDftz0pk.jpg",
  "/img/gallery/d-fusion-konkovo/cUh_UZq5dGE.jpg",
  "/img/gallery/d-fusion-konkovo/F9nlDkcSx6U.jpg",
  "/img/gallery/d-fusion-konkovo/K0wZunpJYVY.jpg",
  "/img/gallery/d-fusion-konkovo/u-bDfEXheyo.jpg",

  
);

showGallery($arGallery);
?>

 <div style="clear:both;"></div>   

<br />

<p class="wow fadeIn likeh4">Другие проекты</p>

		<div class="razd">
			<?include("../otdelochnye-raboty-primery.php");?>
		</div> 

<div style="clear:both"></div>


<br /><br />

</div></div></div>


<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>