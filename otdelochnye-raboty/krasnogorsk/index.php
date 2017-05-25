<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Ремонт офиса Красногорск");
?>

<!--content-->
<div class="content"> 
<div class="thumb-box1">
<div class="container content-in-page">
<h1 class="wow fadeIn h1css">Ремонт офиса Красногорск</h1>

<?
$arGallery = array(
  "/img/gallery/krasnogorsk/1P85-655v-E.jpg",
   "/img/gallery/krasnogorsk/7qS4_nVpY40.jpg",
   "/img/gallery/krasnogorsk/8PVYslBhbAU.jpg",
   "/img/gallery/krasnogorsk/AlvLpM3iz_w.jpg",
   "/img/gallery/krasnogorsk/cjq8arhPpms.jpg",
   "/img/gallery/krasnogorsk/Ds0I-Glf6gM.jpg",
   "/img/gallery/krasnogorsk/Gl4MHxfkWX0.jpg",
   "/img/gallery/krasnogorsk/jjiyk6_oOrM.jpg",
   "/img/gallery/krasnogorsk/PZlI7h-cLC4.jpg",
   "/img/gallery/krasnogorsk/qh5O0aQpeOM.jpg",
   "/img/gallery/krasnogorsk/slGDlsd5dpI.jpg",
   "/img/gallery/krasnogorsk/Wv0HtxUB-CI.jpg",
   "/img/gallery/krasnogorsk/wyUrnYZDKtU.jpg",
   "/img/gallery/krasnogorsk/YI81pCV2qAg.jpg",
   "/img/gallery/krasnogorsk/yJO8gEc79v4.jpg",

  
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