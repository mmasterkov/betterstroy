<div class="ds-raboti">
<?
	$arGallery = array(
		array(
			"NAME" => "Фазенда",
			"URL" => "/diz/fazenda/",
			"PICTURE" => "/img/fazenda/1.jpg",
		),
			array(
			"NAME" => "Мозайка",
			"URL" => "/diz/mozayka/",
			"PICTURE" => "/img/mozayka/1.jpg",
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