<div class="ds-raboti">
<?
	$arGallery = array(
		array(
			"NAME" => "Стойка с телегой",
			"URL" => "/diz/stoyka/",
			"PICTURE" => "/img/stoyka/1.jpg",
		),
		array(
			"NAME" => "Офис",
			"URL" => "/diz/ofis/",
			"PICTURE" => "/img/ofis/1.jpg",
		),
		array(
			"NAME" => "Спортивный комплекс Мытищи",
			"URL" => "/diz/mytishi/",
			"PICTURE" => "/img/mytishi/1.jpg",
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