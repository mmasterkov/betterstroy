<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Отделка ресторана Гранатовый Сад ул. Удальцова");
?>

<!--content-->
<div class="content"> 
<div class="thumb-box1">
<div class="container content-in-page">
<h1 class="wow fadeIn h1css">Отделка ресторана Гранатовый Сад ул. Удальцова</h1>

<?
$arGallery = array(
	"/img/gallery/granatovyj-sad/0EPOE0tar9U.jpg",
    "/img/gallery/granatovyj-sad/1yzPYdu18wg.jpg",
    "/img/gallery/granatovyj-sad/6DMZDLyFDyo.jpg",
    "/img/gallery/granatovyj-sad/a3CxSjfsuUY.jpg",
    "/img/gallery/granatovyj-sad/AjpTeG-7k_w.jpg",
    "/img/gallery/granatovyj-sad/_ASj9CDyzlo.jpg",
    "/img/gallery/granatovyj-sad/AuGmIeHL5O0.jpg",
    "/img/gallery/granatovyj-sad/Bn050l5650Y.jpg",
    "/img/gallery/granatovyj-sad/BTMDEs5PBLc.jpg",
    "/img/gallery/granatovyj-sad/EwFHFONc834.jpg",
    "/img/gallery/granatovyj-sad/fI0OzVYN8Ic.jpg",
    "/img/gallery/granatovyj-sad/gykEwWveNiU.jpg",
    "/img/gallery/granatovyj-sad/H8u6eNDAPgg.jpg",
    "/img/gallery/granatovyj-sad/IRLDEdsMbKM.jpg",
    "/img/gallery/granatovyj-sad/kgUwZK80mow.jpg",
    "/img/gallery/granatovyj-sad/n29vE2YMfYo.jpg",
    "/img/gallery/granatovyj-sad/nFTMYsrrkyg.jpg",
    "/img/gallery/granatovyj-sad/NsWbupHU5Qw.jpg",
    "/img/gallery/granatovyj-sad/QT1u6zkuY14.jpg",
    "/img/gallery/granatovyj-sad/rdWc8O6KCLI.jpg",
    "/img/gallery/granatovyj-sad/-T4EgHQnxhs.jpg",
    "/img/gallery/granatovyj-sad/tHzOQAP6yv8.jpg",
    "/img/gallery/granatovyj-sad/u4HRfvIZIxc.jpg",
    "/img/gallery/granatovyj-sad/uhMkn_Us5dU.jpg",
    "/img/gallery/granatovyj-sad/W_k81C_Y6ug.jpg",
    "/img/gallery/granatovyj-sad/ySwOwkwlaoI.jpg",
    "/img/gallery/granatovyj-sad/Yttd7jMQe5c.jpg",

  
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