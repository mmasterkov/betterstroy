<div class="ds-raboti">
<?
	$arGallery = array(
		array(
			"NAME" => "Загородный дом",
			"URL" => "/diz/zagorodniy-dom/",
			"PICTURE" => "/img/zagorodniy-dom/1.jpg",
		),
		array(
			"NAME" => "Офис",
			"URL" => "/diz/ofis/",
			"PICTURE" => "/img/ofis/1.jpg",
		),
		array(
			"NAME" => "Дом Мартемьяново",
			"URL" => "/diz/dom-martemyanovo/",
			"PICTURE" => "/img/dom-martemyanovo/1.jpg",
		),
		array(
			"NAME" => "Детская",
			"URL" => "/diz/detskaya/",
			"PICTURE" => "/img/detskaya/1.jpg",
		),
		array(
			"NAME" => "Квартира в Гааге",
			"URL" => "/diz/gaaga/",
			"PICTURE" => "/img/gaaga/1.jpg",
		),
		array(
			"NAME" => "Комната отдыха",
			"URL" => "/diz/komnata-otdyha/",
			"PICTURE" => "/img/komnata_otdyha/1.jpg",
		),
		array(
			"NAME" => "Дом",
			"URL" => "/diz/dom/",
			"PICTURE" => "/img/dom/1.jpg",
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