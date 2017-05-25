<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Строительство монолитные работы Ямищево");
$APPLICATION->SetPageProperty("title", "Проекты в работе | Строительство монолитные работы Ямищево");
$APPLICATION->SetPageProperty("description", "Проекты в работе| Строительство монолитные работы Ямищево. Компания Better Stroy занимается ремонтно-отделочными и малоэтажными строительными работами. Наш телефон в Москве: +7 (499) 755-53-43");
?><!--content-->
<div class="content">
	<div class="thumb-box1">
		<div class="container content-in-page">
			<h1 class="wow fadeIn h1css">Строительство станции водоподготовки</h1>
			
					<?
			$arGallery = array(
				"/proekty-v-rabote/yamishchevo/img/img_1.jpg",
				"/proekty-v-rabote/yamishchevo/img/img_2.jpg",
				"/proekty-v-rabote/yamishchevo/img/img_3.jpg",
				"/proekty-v-rabote/yamishchevo/img/img_4.jpg",
				"/proekty-v-rabote/yamishchevo/img/img_5.jpg",
				"/proekty-v-rabote/yamishchevo/img/img_6.jpg",
				"/proekty-v-rabote/yamishchevo/img/img_7.jpg",
				"/proekty-v-rabote/yamishchevo/img/img_8.jpg",
				"/proekty-v-rabote/yamishchevo/img/20.JPG",
				"/proekty-v-rabote/yamishchevo/img/21.JPG",
				"/proekty-v-rabote/yamishchevo/img/22.JPG",
				"/proekty-v-rabote/yamishchevo/img/23.JPG",
				"/proekty-v-rabote/yamishchevo/img/24.JPG",
				"/proekty-v-rabote/yamishchevo/img/25.JPG",
				"/proekty-v-rabote/yamishchevo/img/26.JPG",
				"/proekty-v-rabote/yamishchevo/img/27.JPG",
				"/proekty-v-rabote/yamishchevo/img/28.JPG",
				"/proekty-v-rabote/yamishchevo/img/29.JPG",
				
			);

			showGallery($arGallery);
			?>
	
		</div>
	</div>
</div>
<br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>