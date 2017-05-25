<div class="ds-raboti">
<?
	$arGallery = array(
		array(
			"NAME" => "Адм. здание <br>Сходненской РЭС",
			"URL" => "/fasadnye-raboty/adm_res/",
			"PICTURE" => "/img/adm_res/1.JPG",
		),
		array(
			"NAME" => "Складской комплекс<br>Перепечино",
			"URL" => "/fasadnye-raboty/perepechino/",
			"PICTURE" => "/img/perepechino/1.JPG",
		),
		array(
			"NAME" => "Вент. фасад<br>ТЦ г. Зеленоград",
			"URL" => "/fasadnye-raboty/zelenograd-tc/",
			"PICTURE" => "/img/zelenograd-tc/1.JPG",
		),
		array(
			"NAME" => "Школа-детский сад знайка",
			"URL" => "/fasadnye-raboty/znaika/",
			"PICTURE" => "/fasadnye-raboty/znaika/img/fancy3.jpg",
		),
		array(
			"NAME" => "Аксиньино",
			"URL" => "/fasadnye-raboty/aksinyino/",
			"PICTURE" => "/img/gallery/aksinyino/2015-07-03-820.jpg",
		),
		array(
			"NAME" => "Вельяминово",
			"URL" => "/fasadnye-raboty/veljyaminovo/",
			"PICTURE" => "/img/gallery/veljyaminovo/IMG-20150618-WA0012.jpg",
		),
		array(
			"NAME" => "Дедёшено",
			"URL" => "/fasadnye-raboty/dedyosheno/",
			"PICTURE" => "/img/gallery/dedyosheno/RcvSpy-jsUo.jpg",
		),
		array(
			"NAME" => "Криворожская 17а",
			"URL" => "/fasadnye-raboty/krivorozhskaya/",
			"PICTURE" => "/img/gallery/krivorozhskaya/IMG-20160217-WA0000.jpg",
		),
		array(
			"NAME" => "Ямищево",
			"URL" => "/fasadnye-raboty/yamischevo/",
			"PICTURE" => "/img/otd/fancy8.jpg",
		),
			array(
			"NAME" => "г. Москва, ул, Плющиха, д. 44/2",
			"URL" => "/fasadnye-raboty/plyushchikha-44-2-kapitalnyy-remont-fasada/",
			"PICTURE" => "/img/gallery/plyushchikha/2.JPG",
		),  
	);
?>

<?foreach($arGallery as $arItem):?>
	<a href="<?=$arItem['URL']?>" class="dsrb-item">
		<div class="dsrb-img"><img src="<?=MakeImage($arItem['PICTURE'], array('w' => 210, 'h' => 150, 'zc' => 1))?>"></div>
		<div class="dsrb-info"><?=$arItem['NAME']?></div>
	</a>
<?endforeach;?>
</div>