<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("keywords", "");
$APPLICATION->SetPageProperty("title", "Расчет стоимости строительства");
$APPLICATION->SetPageProperty("description", "Компания Better Story занимается ремонтно-отделочными и малоэтажными строительными работами: фасадные работы, отделка и ремонт квартир. Расчет стоимости строительства. Наш телефон в Москве: +7 (499) 755-53-43");
$APPLICATION->SetTitle("Расчет стоимости строительства ");
?>

<!--content-->
<div class="content"> 
   

    <div class="thumb-box1">
        <a  name="services"><div class="container"></a>
            <h1 class="wow fadeIn h1css">Расчет стоимости строительства</h1>
            <div class="container">

<div class="content-in-page">


<div>
    <table class="calcForm">
    <tbody>
    <tr>
    <td>Ширина, м:<!-- (Привязаны к проектам) --></td>
    <td><input type="text" class="fCalc" name="c_height" value="5"></td>
    <td>Длинна, м:<!-- (Привязаны к проектам) --></td>
    <td><input type="text" class="fCalc" name="c_width" value="10"></td>
    </tr>
    
    <tr>
    <td colspan="2">Количество этажей:<!-- (Привязаны к проектам) --></td>
    <td colspan="2"><select class="fCalc" name="n_floors">
        <option data-p_floors="1" data-n_floors="1" value="16500">Один этаж</option>
        <option data-p_floors="1.7" data-n_floors="2" value="15300">Два этажа (с мансардным)</option>
        <option data-p_floors="2" data-n_floors="2" value="14100">Два этажа (полных)</option>
    </select></td>
    </tr>
    <tr>
    <td colspan="2">Материал стен:</td>
    <td colspan="2"><select class="fCalc" name="m_wall">
        <option value="0">Блоки</option>
        <option value="2600">Декоративная Штукатурка</option>
        <option value="4500">Блок + кирпич</option>
        <option value="9500">Кирпич</option>
    </select></td>
    </tr>
    <tr class="in_floor" style="display: none;">
    <td colspan="2">Междуэтажное перекрытие:</td>
    <td colspan="2"><select class="fCalc" name="in_floor">
        <option value="0">Деревянные балки</option>
        <option value="1800">Монолитные</option>
    </select></td>
    </tr>
    <tr>
    <td colspan="2">Тип кровли:<!-- (Привязаны к проектам) --></td>
    <td colspan="2"><select class="fCalc" name="t_roofing">
        <option value="0">Простая двухскатная</option>
        <option value="1400">Сложная более 4х скатов</option>
    </select></td>
    </tr>
    <tr>
    <td colspan="2">Материал кровли:</td>
    <td colspan="2"><select class="fCalc" name="m_roofing">
        <option value="0">Металлочерепица</option>
        <option value="1500">Мягкая кровля</option>
    </select></td>
    </tr>
    <tr>
    <td colspan="2">Окна пластиковые:</td>
    <td colspan="2"><select class="fCalc" name="p_window">
        <option value="0">Без окон</option>
        <option value="900">Пластиковые окна</option>
    </select><br><br></td>
    </tr>
    
    <!--tr>
    <td colspan="4"><input id="doCalc" type="button" value="Расчитать" /><br /><br /></td>
    </tr-->
    </tbody>
    </table>
    
    <div class="calcSumLine"></div>
    
<div class="calcSumWrp">
    <div class="calcHr">Приблизительная стоимость комплектации:&nbsp;</div>
    <div class="calcSum">825 000 р.</div>
</div>

<div class="clr"></div>
</div>
</div></div></div></div></div>  
<script type="text/javascript" src="/bitrix/templates/furniture_pale-blue/js/calcstoim.js"></script>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>