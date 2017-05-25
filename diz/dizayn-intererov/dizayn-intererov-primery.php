<div class="ds-raboti">
<?
	$arGallery = array(
		array(
			"NAME" => "Загородный дом",
			"URL" => "/diz/zagorodniy-dom/",
			"PICTURE" => "/img/zagorodniy-dom/1.jpg",
		),
		array(
			"NAME" => "Большой тишинский переулок",
			"URL" => "/diz/bolshoy-tishinskiy/",
			"PICTURE" => "/img/bolshoy-tishinskiy/1.JPG",
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
			"PICTURE" => "/img/komnata_otdyha/2.jpg",
		),
		array(
			"NAME" => "Дом",
			"URL" => "/diz/dom/",
			"PICTURE" => "/img/dom/1.jpg",
		),
		array(
			"NAME" => "Черный интерьер",
			"URL" => "/diz/chernyi-interier/",
			"PICTURE" => "/img/chernyi-interier/1.jpg",
		),
		
		array(
			"NAME" => "Митино",
			"URL" => "/diz/mitino/",
			"PICTURE" => "/img/mitino/1.JPG",
		),
		array(
			"NAME" => "Кухни",
			"URL" => "/diz/kuchni/",
			"PICTURE" => "/img/kuchni/1.jpg",
		),
		array(
			"NAME" => "Бурцево",
			"URL" => "/diz/burcevo/",
			"PICTURE" => "/img/burcevo/1.jpg",
		),
		array(
			"NAME" => "Комната в восточном стиле",
			"URL" => "/diz/komnata-vostochnyi/",
			"PICTURE" => "/img/komnata-vostochnyi/1.jpg",
		),
		array(
			"NAME" => "Комната спальня",
			"URL" => "/diz/komnata-spalnya/",
			"PICTURE" => "/img/komnata-spalnya/1.jpg",
		),
		array(
			"NAME" => "Спальни",
			"URL" => "/diz/spalni/",
			"PICTURE" => "/img/spalni/1.jpg",
		),
		array(
			"NAME" => "Мосфильмовская",
			"URL" => "/diz/mosfilmovskaya/",
			"PICTURE" => "/img/mosfilmovskaya/1.jpg",
		),
		array(
			"NAME" => "Проспект Вернадского",
			"URL" => "/diz/prospekt-vernadskogo/",
			"PICTURE" => "/img/prospekt-vernadskogo/1.jpg",
		),
			array(
			"NAME" => "Гостиная в 3х цветах",
			"URL" => "/diz/gostinnaya-3cveta/",
			"PICTURE" => "/img/gostinnaya-3cveta/1.jpg",
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