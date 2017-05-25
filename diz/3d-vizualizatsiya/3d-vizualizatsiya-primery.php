<div class="ds-raboti">
<?
	$arGallery = array(
		array(
			"NAME" => "3D-визуализация",
			"URL" => "/diz/3d-vizualizatsiya-primer/",
			"PICTURE" => "/img/3d-vizualizacia/1.png",
		),
		array(
			"NAME" => "3D деревянный дом",
			"URL" => "/diz/3d-derevyanyi-dom/",
			"PICTURE" => "/img/3d-derevyanyi-dom/1.jpg",
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