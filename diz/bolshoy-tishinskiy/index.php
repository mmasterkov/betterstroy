<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Дизайн-проект Большой Тишинский переулок");
$APPLICATION->SetPageProperty("title", "");
?>

<!--content-->
<div class="content"> 
<div class="thumb-box1">
<div class="container content-in-page">
<h1 class="wow fadeIn h1css">Дизайн-проект Большой Тишинский переулок</h1>



<?
$arGallery = array(
 
	"/img/bolshoy-tishinskiy/1.JPG",
	"/img/bolshoy-tishinskiy/2.JPG",
	"/img/bolshoy-tishinskiy/3.JPG",
	"/img/bolshoy-tishinskiy/4.jpg",
	"/img/bolshoy-tishinskiy/5.jpg",
	"/img/bolshoy-tishinskiy/7.jpg",
	"/img/bolshoy-tishinskiy/8.jpg",
	"/img/bolshoy-tishinskiy/9.jpg",
	"/img/bolshoy-tishinskiy/10.jpg",
	"/img/bolshoy-tishinskiy/11.jpg",
	"/img/bolshoy-tishinskiy/12.JPG",
	"/img/bolshoy-tishinskiy/13.jpg",
	"/img/bolshoy-tishinskiy/14.JPG",
	"/img/bolshoy-tishinskiy/16.JPG",
	"/img/bolshoy-tishinskiy/17.JPG",
	"/img/bolshoy-tishinskiy/18.JPG",
	"/img/bolshoy-tishinskiy/19.JPG",
	"/img/bolshoy-tishinskiy/20.jpg",
	"/img/bolshoy-tishinskiy/21.JPG",
	"/img/bolshoy-tishinskiy/22.jpg",
	"/img/bolshoy-tishinskiy/23.jpg",
	"/img/bolshoy-tishinskiy/25.JPG",
	"/img/bolshoy-tishinskiy/27.JPG",
	"/img/bolshoy-tishinskiy/28.JPG",
	"/img/bolshoy-tishinskiy/30.JPG",
	"/img/bolshoy-tishinskiy/33.JPG",
	"/img/bolshoy-tishinskiy/34.JPG",
	"/img/bolshoy-tishinskiy/36.JPG",
	"/img/bolshoy-tishinskiy/37.JPG",
	"/img/bolshoy-tishinskiy/38.JPG",
	"/img/bolshoy-tishinskiy/40.JPG",
	"/img/bolshoy-tishinskiy/42.JPG",
	"/img/bolshoy-tishinskiy/43.JPG",
	"/img/bolshoy-tishinskiy/46.JPG",
	"/img/bolshoy-tishinskiy/47.JPG",
	"/img/bolshoy-tishinskiy/49.JPG",
	"/img/bolshoy-tishinskiy/51.JPG",
	"/img/bolshoy-tishinskiy/53.JPG",
	"/img/bolshoy-tishinskiy/55.JPG",
	"/img/bolshoy-tishinskiy/56.JPG",
	
  
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