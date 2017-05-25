<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("keywords", "расценки на отделочные работы в москве прайс лист цены");
$APPLICATION->SetPageProperty("description", "Компания BetterStroy выполняет отделочные работы любой сложности. Работаем в жилых и коммерческих зданиях. В прайс-листе указаны расценки на строительные услуги в Москве. Подробности по телефонам: +7 (499) 755-53-43, +7 (925) 435-24-45.");
$APPLICATION->SetTitle("Отделочные работы по оптимальным ценам в Москве в прайс-листе компании BetterStroy");

?>

<script>

$(document).ready(function(){


 // $('span.Readmore[name=readmore-1]').click(function(){
 //   $('tr.tabread1').fadeIn();
 //   $(this).fadeOut();
 // });

 function clickhide(obact) {
  if (obact.text()=='Подробнее >>'){
        obact.text('Скрыть >>');
      } else obact.text('Подробнее >>');
 }

 $('span.Readmore[name=readmore-1]').click(function(){
    $('tr.tabread1').toggle();
    clickhide($(this));
  });

  $('span.Readmore[name=readmore-2]').click(function(){
    $('tr.tabread2').toggle();
    clickhide($(this));
  });

  $('span.Readmore[name=readmore-3]').click(function(){
    $('tr.tabread3').toggle();
    clickhide($(this));
  });

  $('span.Readmore[name=readmore-4]').click(function(){
    $('tr.tabread4').toggle();
    clickhide($(this));
  });

  $('span.Readmore[name=readmore-5]').click(function(){
    $('tr.tabread5').toggle();
    clickhide($(this));
  });

  $('span.Readmore[name=readmore-6]').click(function(){
    $('tr.tabread6').toggle();
    clickhide($(this));
  });

  $('span.Readmore[name=readmore-7]').click(function(){
    $('tr.tabread7').toggle();
    clickhide($(this));
  });


  $('tr.tabread1').toggle();
      $('span.Readmore[name=readmore-1]').html('Скрыть >>');

});

</script>

<!--content-->
<div class="content"> 
   

    <div class="thumb-box1">
        <a  name="services"><div class="container"></a>
            <h1 class="wow fadeIn h1css">Отделочные работы от компании BetterStroy в Москве</h1>
            <div class="container">
			<div class="number_cat">		
								Тел. <a href="tel:+79254352445">+7(925) 435-24-45</a>
								Тел. <a href="tel:+74997555343">+7(499) 755-53-43</a></div>
<div > <div class="content-in-page">
<p>Компания BetterStroy предлагает выполнение отделочных работ «с нуля». Мы работаем в жилых домах, коттеджах, офисах. Услуги, которые мы предоставляем, направлены на улучшение вида помещения, создание стильного интерьера. Чистовые и черновые отделочные работы, проведенный нашими специалистами, повышают эксплуатационные характеристики здания, делая его более удобным для проживания. Мы предлагаем отделочные работы высокого класса по доступным расценкам.</p>
            <center><div data-dspopup-id="order" class="btn-orange" onclick="void(yaCounter29696835.reachGoal('klikzacaz'));">Сделать заказ</div><span>&nbsp;</span>
            <div id="order" class="ds-form dspopup-modal"></div></center>


   <br>  <p class="wow fadeIn likeh4">Примеры наших работ:</p>
   

		<div class="razd">
			<?include("otdelochnye-raboty-primery.php");?>
		</div> 


<h2>Виды и цены отделочных работ</h2>
<p>Специалисты нашей компании осуществляют выполнение работ «под ключ», а также предоставляют отдельные услуги. Узнать стоимость каждого вида отделочных работ вы можете в прайс-листе. Комплексные работы по отделке включают:</p>
<ul>
<li>нанесение штукатурки. Это этап черновой отделки, который подразумевает покрытие поверхностей составом для их выравнивания, повышения их стойкости к влаге, возгоранию, увеличению их прочности. Он также необходим как подготовка к чистовой отделке; </li>

<li>малярные работы. Окрашивание стен, потолков и других поверхностей – наиболее эффективный и доступный способ придания им привлекательного вида. Современные краски применяются как для внутреннего, так и для наружного окрашивания: это водоэмульсионные, масляные, клеевые, эмалевые составы; </li>
<li>чистовая отделка поверхностей. Данный этап отделочных работ подразумевает оклеивание стен обоями, покрытие керамической плиткой, декоративными панелями. Также на этапе чистовой отделки проводится остекление окон и оформление откосов; </li>
<li>отделка пола и потолка. Мы производим как чистовой, так и черновой этапы работы. Предлагаются услуги по выравниванию поверхностей, их окраске. Для потолка возможен монтаж натяжных покрытий, плиточная отделка. Чистовые отделочные работы для полов подразумевают укладку ламината, линолеума, наливного покрытия, ковролина и других востребованных материалов; </li>
<li>фасадные работы. Это важный этап для придания внешней части здания привлекательного вида. Мы предлагаем утепление стен, их окраску, укладку облицовки из сайдинга, натурального и искусственного камня, декоративного кирпича и т. д. </li>
</ul>

</div>

<!-- Таблица цен -->


<div>
	<div class="price_title">Цены на отделочные работы</div>
	<table class="table table-bordered table-condensed table-hover" style="color:black; text-align:center;width:100%;margin:0 auto">
	<thead>
	<tr>
	<th>№ п/п 
</th>
<th style="width: 500px;">Наименование работ</th>
<th>Единица измерения</th>
<th style="width: 319px;">Цена, руб. с НДС, без стоимости материалов</th></tr></thead>

<tbody>

<tr>
	<td>
		
	</td>
	<td width="270px;">
		<span style="font-weight: bold;">Демонтаж</span> <span class="Readmore" name="readmore-1">Подробнее >></span>
	</td>
	<td>
		
	</td>
	<td>
		
	</td>
</tr>


<tr class="tabread1">
<td>
1
	</td>
	<td>
		Демонтаж плинтуса напольного
	</td>
	<td>
		Пог.м
	</td>
	<td>
		20
	</td>
</tr>
<tr class="tabread1">
	<td>
		2
	</td>
	<td>
		Демонтаж линолеума (один слой, без сохранения )
	</td>
	<td>
		М2
	</td>
	<td>
		40
	</td>
</tr>
<tr class="tabread1">
	<td>
		3
	</td>
	<td>
		Демонтаж фанеры,оргалита (без сохранения)
	</td>
	<td>
		М2
	</td>
	<td>
		60
	</td>
</tr>
<tr class="tabread1">
	<td>
		4
	</td>
	<td>
		Демонтаж паркетной доски ( без сохранения )
	</td>
	<td>
		М2
	</td>
	<td>
		70
	</td>
</tr>
<tr class="tabread1">
	<td>
		5
	</td>
	<td>
		Демонтаж старой стяжки (цементно – песчаная)
	</td>
	<td>
		М2
	</td>
	<td>
		от 250,00
	</td>
</tr>
<tr class="tabread1">
	<td>
		6
	</td>
	<td>
		Демонтаж плитки со стен
	</td>
	<td>
		М2
	</td>
	<td>
		150
	</td>
</tr>
<tr class="tabread1">
	<td>
		7
	</td>
	<td>
		Демонтаж плитки с пола
	</td>
	<td>
		М2
	</td>
	<td>
		200
	</td>
</tr>
<tr class="tabread1">
	<td>
		8
	</td>
	<td>
		Демонтаж перегородок из ДСП
	</td>
	<td>
		М2
	</td>
	<td>
		200.00
	</td>
</tr>
<tr class="tabread1">
	<td>
		9
	</td>
	<td>
		Демонтаж стен (перегородок) из ацеида,гипсолита,ГКЛ
	</td>
	<td>
		М2
	</td>
	<td>
		350
	</td>
</tr>
<tr class="tabread1">
	<td>
		10
	</td>
	<td>
		Демонтаж дверных блоков (без сохранения)
	</td>
	<td>
		шт
	</td>
	<td>
		300
	</td>
</tr>
<tr class="tabread1">
	<td>
		11
	</td>
	<td>
		Демонтаж электрощита
	</td>
	<td>
		шт
	</td>
	<td>
		400
	</td>
</tr>
<tr class="tabread1">
	<td>
		12
	</td>
	<td>
		Демонтаж розеток, выключателей
	</td>
	<td>
		шт
	</td>
	<td>
		60
	</td>
</tr>
<tr class="tabread1">
	<td>
		13
	</td>
	<td>
		Демонтаж люстр, потолочных светильников
	</td>
	<td>
		шт
	</td>
	<td>
		150
	</td>
</tr>
<tr class="tabread1">
	<td>
		14
	</td>
	<td>
		Зачистка от старой краски, шпаклевки поверхности стен/потолка
	</td>
	<td>
		М2
	</td>
	<td>
		от100,00
	</td>
</tr>
<tr class="tabread1">
	<td>
		15
	</td>
	<td>
		Демонтаж обоев со стен (один слой)
	</td>
	<td>
		М2
	</td>
	<td>
		50
	</td>
</tr>
<tr class="tabread1">
	<td>
		16
	</td>
	<td>
		Демонтаж ванны (чугун)
	</td>
	<td>
		шт
	</td>
	<td>
		600
	</td>
</tr>
<tr class="tabread1">
	<td>
		17
	</td>
	<td>
		Демонтаж раковины (без сохранения)
	</td>
	<td>
		шт
	</td>
	<td>
		300
	</td>
</tr>
<tr class="tabread1">
	<td>
		18
	</td>
	<td>
		Демонтаж унитаза (без сохранения)
	</td>
	<td>
		шт
	</td>
	<td>
		300
	</td>
</tr>
<tr class="tabread1">
	<td>
		19
	</td>
	<td>
		Демонтаж мойки (без сохранения)
	</td>
	<td>
		шт
	</td>
	<td>
		350
	</td>
</tr>
<tr class="tabread1">
	<td>
		20
	</td>
	<td>
		Демонтаж полотенцесушителя (без сохранения)
	</td>
	<td>
		шт.
	</td>
	<td>
		300
	</td>
</tr>


<tr>
	<td>
		
	</td>
	<td>
		<span style="font-weight: bold;">Стены, перегородки</span> <span class="Readmore" name="readmore-2">Подробнее >></span>
	</td>
	<td>
		
	</td>
	<td>
		
	</td>
</tr>
<tr class="tabread2">
	<td>
		1
	</td>
	<td>
		Монтаж перегородок из ПГБ
	</td>
	<td>
		М2
	</td>
	<td>
		от 450,00
	</td>
</tr>
<tr class="tabread2">
	<td>
		2
	</td>
	<td>
		Монтаж перегородок из пеноблоков
	</td>
	<td>
		М2
	</td>
	<td>
		от 450,00
	</td>
</tr>
<tr class="tabread2">
	<td>
		3
	</td>
	<td>
		Устройство стен из ГКЛ на металлический каркас в два слоя
	</td>
	<td>
		М2
	</td>
	<td>
		от 600
	</td>
</tr>
<tr class="tabread2">
	<td>
		4
	</td>
	<td>
		Монтаж короба из ГКЛ с устр-вом каркаса
	</td>
	<td>
		мп
	</td>
	<td>
		800
	</td>
</tr>
<tr class="tabread2">
	<td>
		5
	</td>
	<td>
		Грунтовка стен
	</td>
	<td>
		М2
	</td>
	<td>
		20
	</td>
</tr>
<tr class="tabread2">
	<td>
		6
	</td>
	<td>
		Штукатурка стен
	</td>
	<td>
		М2
	</td>
	<td>
		от 300,00
	</td>
</tr>
<tr class="tabread2">
	<td>
		7
	</td>
	<td>
		Наклейка стеклохолста
	</td>
	<td>
		М2
	</td>
	<td>
		120
	</td>
</tr>
<tr class="tabread2">
	<td>
		8
	</td>
	<td>
		Укладка керамической плитки
	</td>
	<td>
		М2
	</td>
	<td>
		850
	</td>
</tr>
<tr class="tabread2">
	<td>
		9
	</td>
	<td>
		Затирка швов
	</td>
	<td>
		М2
	</td>
	<td>
		150
	</td>
</tr>
<tr class="tabread2">
	<td>
		10
	</td>
	<td>
		Шпаклевка стен ( под обои )
	</td>
	<td>
		М2
	</td>
	<td>
		230
	</td>
</tr>
<tr class="tabread2">
	<td>
		11
	</td>
	<td>
		Шлифовка стен
	</td>
	<td>
		М2
	</td>
	<td>
		50
	</td>
</tr>
<tr class="tabread2">
	<td>
		12
	</td>
	<td>
		Наклейка стеклохолста
	</td>
	<td>
		М 2
	</td>
	<td>
		120
	</td>
</tr>
<tr class="tabread2">
	<td>
		13
	</td>
	<td>
		Наклейка обоев
	</td>
	<td>
		М2
	</td>
	<td>
		от160,00
	</td>
</tr>
<tr class="tabread2">
	<td>
		14
	</td>
	<td>
		Покраска стен
	</td>
	<td>
		М2
	</td>
	<td>
		от150,00
	</td>
</tr>
<tr class="tabread2">
	<td>
		15
	</td>
	<td>
		Штукатурка откосов
	</td>
	<td>
		пм
	</td>
	<td>
		300
	</td>
</tr>
<tr class="tabread2">
	<td>
		16
	</td>
	<td>
		Шпаклевка, шлифовка откосов
	</td>
	<td>
		пм
	</td>
	<td>
		150
	</td>
</tr>
<tr class="tabread2">
	<td>
		17
	</td>
	<td>
		Покраска откосов
	</td>
	<td>
		мп
	</td>
	<td>
		90
	</td>
</tr>
<tr>
	<td>
		
	</td>
	<td>
		<span style="font-weight: bold;">Полы</span> <span class="Readmore" name="readmore-3">Подробнее >></span>
	</td>
	<td>
		
	</td>
	<td>
		
	</td>
</tr>
<tr class="tabread3">
	<td>
		1
	</td>
	<td>
		Грунтовка пола бетоконтактом
	</td>
	<td>
		М2
	</td>
	<td>
		30
	</td>
</tr>
<tr class="tabread3"> 
	<td>
		2
	</td>
	<td>
		Устройство гидроизоляции пола (обмазочная)
	</td>
	<td>
		М2
	</td>
	<td>
		240
	</td>
</tr>
<tr class="tabread3">
	<td>
		3
	</td>
	<td>
		Устройство стяжки самовырав.смесью ( наливной пол )
	</td>
	<td>
		М2
	</td>
	<td>
		от 250,00
	</td>
</tr>
<tr class="tabread3">
	<td>
		4
	</td>
	<td>
		Монтаж фанеры
	</td>
	<td>
		М2
	</td>
	<td>
		250
	</td>
</tr>
<tr class="tabread3">
	<td>
		5
	</td>
	<td>
		Укладка линолеума
	</td>
	<td>
		М2
	</td>
	<td>
		150
	</td>
</tr>
<tr class="tabread3">
	<td>
		6
	</td>
	<td>
		Укладка линолеума на клей
	</td>
	<td>
		М2
	</td>
	<td>
		230
	</td>
</tr>
<tr class="tabread3">
	<td>
		7
	</td>
	<td>
		Укладка ламината на подложку
	</td>
	<td>
		М2
	</td>
	<td>
		от 250,00
	</td>
</tr>
<tr class="tabread3">
	<td>
		8
	</td>
	<td>
		Укладка паркетной доски на подложку
	</td>
	<td>
		М2
	</td>
	<td>
		от 550,00
	</td>
</tr>
<tr class="tabread3">
	<td>
		9
	</td>
	<td>
		Укладка керамической плитки на пол
	</td>
	<td>
		М2
	</td>
	<td>
		от 750,00
	</td>
</tr>
<tr class="tabread3">
	<td>
		10
	</td>
	<td>
		Монтаж плиточного порожка
	</td>
	<td>
		пм
	</td>
	<td>
		400
	</td>
</tr>
<tr class="tabread3">
	<td>
		11
	</td>
	<td>
		Монтаж металлического порожка
	</td>
	<td>
		пм
	</td>
	<td>
		180
	</td>
</tr>
<tr class="tabread3">
	<td>
		12
	</td>
	<td>
		Монтаж плинтуса ( пластик )
	</td>
	<td>
		пм
	</td>
	<td>
		120
	</td>
</tr>
<tr>
	<td>
		
	</td>
	<td>
		<span style="font-weight: bold;">Потолки</span> <span class="Readmore" name="readmore-4">Подробнее >></span>
	</td>
	<td>
		
	</td>
	<td>
		
	</td>
</tr>
<tr class="tabread4">
	<td>
		1
	</td>
	<td>
		Устройство потолка из ГКЛ на металлический каркас в один слой
	</td>
	<td>
		М2
	</td>
	<td>
		850
	</td>
</tr>
<tr class="tabread4">
	<td>
		2
	</td>
	<td>
		Устройство потолка из ГКЛ на металлический каркас ( сложный )
	</td>
	<td>
		м2
	</td>
	<td>
		от 1000,00
	</td>
</tr>
<tr class="tabread4">
	<td>
		3
	</td>
	<td>
		Устройство ниши скрытого освещения из ГКЛ
	</td>
	<td>
		м.п
	</td>
	<td>
		900.00
	</td>
</tr>
<tr class="tabread4">
	<td>
		4
	</td>
	<td>
		Устройство коробов из ГКЛ
	</td>
	<td>
		М2
	</td>
	<td>
		800
	</td>
</tr>
<tr class="tabread4">
	<td>
		5
	</td>
	<td>
		Заделка трещин , рустов
	</td>
	<td>
		м.п
	</td>
	<td>
		30.00
	</td>
</tr>
<tr class="tabread4">
	<td>
		6
	</td>
	<td>
		Грунтовка потолка
	</td>
	<td>
		М2
	</td>
	<td>
		25.00
	</td>
</tr>
<tr class="tabread4">
	<td>
		7
	</td>
	<td>
		Штукатурка потолка
	</td>
	<td>
		М2
	</td>
	<td>
		от 300.00
	</td>
</tr>
<tr class="tabread4">
	<td>
		8
	</td>
	<td>
		Наклейка сетки штукатурной «Строби» 5х5
	</td>
	<td>
		М2
	</td>
	<td>
		120
	</td>
</tr>
<tr class="tabread4">
	<td>
		9
	</td>
	<td>
		Шпаклевка потолка включая финишную
	</td>
	<td>
		М2
	</td>
	<td>
		350
	</td>
</tr>
<tr class="tabread4">
	<td>
		10
	</td>
	<td>
		Шлифовка потолка
	</td>
	<td>
		М2
	</td>
	<td>
		60.00
	</td>
</tr>
<tr class="tabread4">
	<td>
		11
	</td>
	<td>
		Наклейка стеклохолста
	</td>
	<td>
		М2
	</td>
	<td>
		140
	</td>
</tr>
<tr class="tabread4">
	<td>
		13
	</td>
	<td>
		Покраска потолка за 2 раза
	</td>
	<td>
		М2
	</td>
	<td>
		от 150,00
	</td>
</tr>
<tr class="tabread4">
	<td>
		14
	</td>
	<td>
		Установка потолочного плинтуса (пенопласт)
	</td>
	<td>
		мп
	</td>
	<td>
		120.00
	</td>
</tr>
<tr class="tabread4">
	<td>
		15
	</td>
	<td>
		Установка потолочного плинтуса (полиуретанового), жесткое крепление
	</td>
	<td>
		мп
	</td>
	<td>
		250.00
	</td>
</tr>
<tr class="tabread4">
	<td>
		16
	</td>
	<td>
		Устройство реечных подвесных потолков
	</td>
	<td>
		М2
	</td>
	<td>
		500
	</td>
</tr>
<tr class="tabread4">
	<td>
		17
	</td>
	<td>
		Монтаж потолков « Армстронг»
	</td>
	<td>
		М2
	</td>
	<td>
		500
	</td>
</tr>
<tr>
	<td>
		
	</td>
	<td>
	<span style="font-weight: bold;">Электрика</span> <span class="Readmore" name="readmore-5">Подробнее >></span>
		
	</td>
	<td>
		
	</td>
	<td>
		
	</td>
</tr>
<tr class="tabread5">
	<td>
		1
	</td>
	<td>
		Установка розеток 16 А
	</td>
	<td>
		шт
	</td>
	<td>
		200
	</td>
</tr>
<tr class="tabread5">
	<td>
		2
	</td>
	<td>
		Установка выключателей
	</td>
	<td>
		шт
	</td>
	<td>
		200
	</td>
</tr>
<tr class="tabread5">
	<td>
		3
	</td>
	<td>
		Установка телефон.розетки
	</td>
	<td>
		шт
	</td>
	<td>
		250
	</td>
</tr>
<tr class="tabread5">
	<td>
		4
	</td>
	<td>
		Установка TV
	</td>
	<td>
		шт
	</td>
	<td>
		250
	</td>
</tr>
<tr class="tabread5">
	<td>
		5
	</td>
	<td>
		Монтаж люстры.
	</td>
	<td>
		шт
	</td>
	<td>
		750
	</td>
</tr>
<tr class="tabread5">
	<td>
		6
	</td>
	<td>
		Монтаж светильников точечных
	</td>
	<td>
		шт
	</td>
	<td>
		350
	</td>
</tr>
<tr class="tabread5">
	<td>
		7
	</td>
	<td>
		Монтаж бра, светильников подвесных
	</td>
	<td>
		шт
	</td>
	<td>
		500.00
	</td>
</tr>
<tr class="tabread5">
	<td>
		8
	</td>
	<td>
		Устройство эл.точки (штроба , прокладка электросилового и слаботочного провода, установка подрозетника, распредел.коробки, Эл.выводов )
	</td>
	<td>
		Ед.
	</td>
	<td>
		900
	</td>
</tr>
<tr class="tabread5">
	<td>
		9
	</td>
	<td>
		Монтаж ,коммутация автоматов защиты в эл. щите
	</td>
	<td>
		ед
	</td>
	<td>
		360
	</td>
</tr>
<tr class="tabread5">
	<td>
		10
	</td>
	<td>
		Установка накладного эл.шита
	</td>
	<td>
		ед
	</td>
	<td>
		600
	</td>
</tr>
<tr class="tabread5">
	<td>
		11
	</td>
	<td>
		Установка внутреннего эл.щита
	</td>
	<td>
		ед
	</td>
	<td>
		1200
	</td>
</tr>
<tr class="tabread5">
	<td>
		12
	</td>
	<td>
		Укладка теплого пола до 3м2
	</td>
	<td>
		ед
	</td>
	<td>
		1800
	</td>
</tr>
<tr class="tabread5">
	<td>
		13
	</td>
	<td>
		Укладка теплого пола свыше 3м2
	</td>
	<td>
		М2
	</td>
	<td>
		550
	</td>
</tr>
<tr class="tabread5">
	<td>
		14
	</td>
	<td>
		Установка регулятора т.пола
	</td>
	<td>
		ед
	</td>
	<td>
		400
	</td>
</tr>
<tr>
	<td>
		
	</td>
	<td>
		 <span style="font-weight: bold;">Сантехника</span> <span class="Readmore" name="readmore-6">Подробнее >></span>
	</td>
	<td>
		
	</td>
	<td>
		
	</td>
</tr>
<tr class="tabread6">
	<td>
		1
	</td>
	<td>
		Установка смесителя
	</td>
	<td>
		шт
	</td>
	<td>
		от 500,00
	</td>
</tr>
<tr class="tabread6">
	<td>
		2
	</td>
	<td>
		Монтаж сифона на раковине
	</td>
	<td>
		ед
	</td>
	<td>
		500
	</td>
</tr>
<tr class="tabread6">
	<td>
		3
	</td>
	<td>
		Установка ванны (чугун)
	</td>
	<td>
		шт
	</td>
	<td>
		3000
	</td>
</tr>
<tr class="tabread6">
	<td>
		4
	</td>
	<td>
		Установка ванны (металлич.)
	</td>
	<td>
		шт
	</td>
	<td>
		2000
	</td>
</tr>
<tr class="tabread6">
	<td>
		5
	</td>
	<td>
		Установка шарового крана
	</td>
	<td>
		шт
	</td>
	<td>
		200
	</td>
</tr>
<tr class="tabread6">
	<td>
		6
	</td>
	<td>
		Установка штанги для душа
	</td>
	<td>
		шт
	</td>
	<td>
		250
	</td>
</tr>
<tr class="tabread6">
	<td>
		7
	</td>
	<td>
		Установка и подключение стиральной машины
	</td>
	<td>
		шт
	</td>
	<td>
		от 900
	</td>
</tr>
<tr class="tabread6">
	<td>
		8
	</td>
	<td>
		Установка и подключение посудомоечной машины
	</td>
	<td>
		шт
	</td>
	<td>
		1700
	</td>
</tr>
<tr class="tabread6">
	<td>
		9
	</td>
	<td>
		Установка душевой кабины
	</td>
	<td>
		шт
	</td>
	<td>
		от 4500,00
	</td>
</tr>
<tr class="tabread6">
	<td>
		10
	</td>
	<td>
		Установка и подключение унитаза(компакт)
	</td>
	<td>
		шт
	</td>
	<td>
		2000,00
	</td>
</tr>
<tr class="tabread6">
	<td>
		11
	</td>
	<td>
		Установка и подключение умывальника «Тюльпан»
	</td>
	<td>
		шт
	</td>
	<td>
		2200,00
	</td>
</tr>
<tr class="tabread6">
	<td>
		12
	</td>
	<td>
		Устройство водоразборной точки г/х водоснабжения (металлопласт, полипропилен) скрытой проводки
	</td>
	<td>
		точка
	</td>
	<td>
		800
	</td>
</tr>
<tr class="tabread6">
	<td>
		13
	</td>
	<td>
		Прокладка ПВХ канализации
	</td>
	<td>
		точка
	</td>
	<td>
		800
	</td>
</tr>
<tr class="tabread6">
	<td>
		14
	</td>
	<td>
		Сборка водоразборного коллекторного узла
	</td>
	<td>
		точка
	</td>
	<td>
		2400
	</td>
</tr>
</tbody>
</table>

</div>

</div>

 
<div class="content-in-page">
<p><span style='font-weight:bold'>Преимущества сотрудничества с фирмой BetterStroy:</span></p>
<ul>
<li>применение современных материалов и оборудования для отделочных работ; </li>
<li>низкие расценки на отделочные работы в Москве; </li>
<li>прозрачность ценообразования, соблюдение сроков; </li>
<li>высокое качество. </li>
</ul>
<div class="row exmp_work">
						<div class="col-sm-6 col-md-4 col-xs-12">
 <a href="/img/otdelochnye-raboty1.jpg" class="fancyimage"><img src="/img/otdelochnye-raboty1.jpg" alt="Отделочные работы"></a>
						</div>
						<div class="col-sm-6 col-md-4 col-xs-12">
 <a href="/img/otdelochnye-raboty2.jpg" class="fancyimage"><img src="/img/otdelochnye-raboty2.jpg" alt="Отделочные работы в Москве"></a>
						</div>
						<div class="col-sm-6 col-md-4 col-xs-12">
 <a href="/img/otdelochnye-raboty3.jpg" class="fancyimage"><img src="/img/otdelochnye-raboty3.jpg" alt="Расценки на отделочные работы"></a>
						</div>
					</div>
<p>Ознакомиться с расценками на каждый вид отделочных работ вы можете в прайс-листе. </p>
<p>Чтобы проконсультироваться по интересующим вас вопросам или оформить заказ, обращайтесь по телефону к менеджерам компании.</p>
</div>
        </div>
    </div>

    

</div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>