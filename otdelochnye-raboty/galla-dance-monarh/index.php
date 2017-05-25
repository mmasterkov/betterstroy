<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Отделка школы танцев GallaDance-Монарх");
?>
<div class="content"> 
<div class="thumb-box1">
<div class="container content-in-page">
<h1 class="wow fadeIn h1css">Отделка школы танцев GallaDance-Монарх</h1>
<?
$arGallery = array(
	"/img/gallery/galla-dance-monarh/0AUDKvc70ZU.jpg",
    "/img/gallery/galla-dance-monarh/0oj3u200shc.jpg",
    "/img/gallery/galla-dance-monarh/3m6n_vbL5VM.jpg",
    "/img/gallery/galla-dance-monarh/5ocL4F5_N0s.jpg",
    "/img/gallery/galla-dance-monarh/6EnUpM3SaLg.jpg",
    "/img/gallery/galla-dance-monarh/7_aFvHfDPg4.jpg",
    "/img/gallery/galla-dance-monarh/AsyPleh61MU.jpg",
    "/img/gallery/galla-dance-monarh/HUAAduYHoyY.jpg",
    "/img/gallery/galla-dance-monarh/j0JsjJI7d58.jpg",
    "/img/gallery/galla-dance-monarh/KN4XDeiiw3w.jpg",
    "/img/gallery/galla-dance-monarh/mLx0YfwUSCs.jpg",
    "/img/gallery/galla-dance-monarh/TO645jXAL0A.jpg",
    "/img/gallery/galla-dance-monarh/U9H0-SxIty0.jpg",
    "/img/gallery/galla-dance-monarh/ycLMo3hwJD4.jpg",
    "/img/gallery/galla-dance-monarh/zaWYVRPFs9U.jpg",

  
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