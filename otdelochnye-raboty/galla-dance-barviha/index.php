<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Отделка школы танцев galla Dance-Барвиха в Д.Ц. Дрим Хаус");
?>

<!--content-->
<div class="content"> 
<div class="thumb-box1">
<div class="container content-in-page">
<h1 class="wow fadeIn h1css">Отделка школы танцев galla Dance-Барвиха в Д.Ц. Дрим Хаус</h1>


<?
$arGallery = array(
	"/img/gallery/galla-dance-barviha/G0h3DWVlkUk.jpg",
    "/img/gallery/galla-dance-barviha/gu8TZZC7z7k.jpg",
    "/img/gallery/galla-dance-barviha/l7jpWzUpJow.jpg",
    "/img/gallery/galla-dance-barviha/MBSM9qPT6oY.jpg",
    "/img/gallery/galla-dance-barviha/sMFe3xa-vF0.jpg",
    "/img/gallery/galla-dance-barviha/wE_NGTfkRRU.jpg",
	"/img/gallery/galla-dance-barviha/xoaJ9Ry5xlc.jpg",

  
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