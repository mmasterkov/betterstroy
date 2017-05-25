<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Отделка школы танцев D-Fusion Новослободская");
?>

<!--content-->
<div class="content"> 
<div class="thumb-box1">
<div class="container content-in-page">
<h1 class="wow fadeIn h1css">Отделка школы танцев D-Fusion Новослободская</h1>

<?
$arGallery = array(
	"/img/gallery/d-fusion-novoslobodskaya/9Q5VFpAOKPw.jpg",
    "/img/gallery/d-fusion-novoslobodskaya/bWs6RIMjsxk.jpg",
    "/img/gallery/d-fusion-novoslobodskaya/cBaHU9prb0w.jpg",
    "/img/gallery/d-fusion-novoslobodskaya/_CrIsrh8YIQ.jpg",
    "/img/gallery/d-fusion-novoslobodskaya/gRF6j9gbUy0.jpg",
    "/img/gallery/d-fusion-novoslobodskaya/jySO0VbPq2M.jpg",
    "/img/gallery/d-fusion-novoslobodskaya/KCOl4qTXmmc.jpg",
    "/img/gallery/d-fusion-novoslobodskaya/KTLDOzekcGw.jpg",
    "/img/gallery/d-fusion-novoslobodskaya/Q9cg-egn48M.jpg",
    "/img/gallery/d-fusion-novoslobodskaya/S0E-E_bByH8.jpg",
    "/img/gallery/d-fusion-novoslobodskaya/TNgCorm5Zrg.jpg",
    "/img/gallery/d-fusion-novoslobodskaya/yBAbnVc3eEc.jpg",

  
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