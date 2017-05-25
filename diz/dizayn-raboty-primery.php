<div class="ds-raboti">
<?
	$arGallery = array(
		array(
			"NAME" => "Дизайн интерьеров",
			"URL" => "/diz/dizayn-intererov/",
			"PICTURE" => "/img/zagorodniy-dom/1.jpg",
		),
		array(
			"NAME" => "Дизайн общественных интерьеров",
			"URL" => "/diz/dizayn-obshchestvennykh-intererov/",
			"PICTURE" => "/img/ofis/1.jpg",
		),
		array(
			"NAME" => "Декорирование интерьера",
			"URL" => "/diz/dekorirovanie-interera/",
			"PICTURE" => "/img/fazenda/1.jpg",
		),
			array(
			"NAME" => "3D-визуализация",
			"URL" => "/diz/3d-vizualizatsiya/",
			"PICTURE" => "/img/3d-vizualizacia/10.jpg",
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