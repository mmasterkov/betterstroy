<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Строительство частного дома, д. Ямищево");
$APPLICATION->SetPageProperty("title", "Строительство частного дома в д. Ямищево | Компания BetterStroy");
$APPLICATION->SetPageProperty("description", "Компания BetterStroy предлагает услуги по малоэтажному строительству. Строительство частного дома в д. Ямищево. Гарантируем отличное качество выполнения работ и оптимальные цены. Звоните по телефонам: +7 (499) 755-53-43, +7 (925) 435-24-45.");
?>

<!--content-->
<div class="content"> 
<div class="thumb-box1">
<div class="container content-in-page">
<h1 class="wow fadeIn h1css">Строительство частного дома, д. Ямищево</h1>

<?
$arGallery = array(
  "/img/yamishevo/1.jpg",
  "/img/yamishevo/2.jpg",
  "/img/yamishevo/3.jpg",
  "/img/yamishevo/4.jpg",
  "/img/yamishevo/5.jpg",
  "/img/yamishevo/6.jpg",
  "/img/yamishevo/7.jpg",
  "/img/yamishevo/8.jpg",
  "/img/yamishevo/9.jpg",
  "/img/yamishevo/10.jpg",
  "/img/yamishevo/11.jpg",
  "/img/yamishevo/12.jpg",
  "/img/yamishevo/13.jpg",
  "/img/yamishevo/14.jpg",
  
);

showGallery($arGallery);
?>


<br />

<p>Общая площадь частного дома в деревне Ямищево составила 131,1 м2. Кроме жилых и хозяйственных помещений был предусмотрен гараж для въезда двух автомобилей со стороны улицы. В строительстве использовались разные материалы — газобетон, кирпич, дерево. Внешние стены утеплялись, производилось оштукатуривание. Кирпичная кладка стала частью украшения фасада. Перед входом в дом предусмотрена открытая площадка, декорированная деревянным навесом.</p>
<p>При возведении объекта использовались качественные материалы и применялись современные технологии. Весь комплекс работ под ключ обошелся заказчику в 9 000 000 рублей.</p>

<br /><br />

<p class="wow fadeIn likeh4">Другие проекты</p>

<div class="razd">
			<?include("../maloetaznoe-stroitelstvo-primeri.php");?>
		</div>

<div style="clear:both"></div>

<br /><br />
</div></div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>