<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Калькулятор расчета работ | Компания BetterStroy");
$APPLICATION->SetTitle("Калькулятор");
?>
<style>
    
.f-primary-title {
  font-size: 2.30769em;
  line-height: 1.2;
  color: #e26228; }
.f-primary-title  td {
    text-align: center;
}
[class*='b-table-']:not(.b-table-reset) {
  border-collapse: collapse;
  width: 100%; }
  [class*='b-table-']:not(.b-table-reset) th {
    padding: 18px 3px; }
    @media screen and (max-width: 767px) {
      [class*='b-table-']:not(.b-table-reset) th {
        padding-top: 10px;
        padding-bottom: 10px; } }
  [class*='b-table-']:not(.b-table-reset) tr:nth-child(even) td {
    background: #f2f2f2; }
  [class*='b-table-']:not(.b-table-reset) tr:last-child td {
    border-bottom: 1px solid #dfdfdf; }
  [class*='b-table-']:not(.b-table-reset) td {
    padding: 14px 3px;
    border-left: 1px solid #dfdfdf; text-align: center; }
    @media screen and (max-width: 767px) {
      [class*='b-table-']:not(.b-table-reset) td {
        padding-top: 8px;
        padding-bottom: 8px; } }
    [class*='b-table-']:not(.b-table-reset) td:last-child {
      border-right: 1px solid #dfdfdf; }

[class*='f-table-'] th {
  font-size: 1.23077em;
  line-height: 1.2;
  text-align: center; }
  @media screen and (max-width: 767px) {
    [class*='f-table-'] th {
      font-size: 1em;
      line-height: 1.2; } }

.b-table-primary th {
  background: #e26228;
  border: 1px solid #AD491B; }

.f-table-primary th {
  color: white; }

@media (max-width: 830px){
    .b-table-primary{
        font-size: 10px;
    }
}
@media (max-width: 560px){
    .b-table-primary{
        font-size: 8px;
    }
}
</style>

<div class="container">
<div class="content"> 
 <div class="title" style="width: 100%; margin: 0px auto; padding: 10px;">
            <h1>ФАСАДНЫЙ КАЛЬКУЛЯТОР</h1>
        </div>

        <div class="calculate-holder" style="width: 100%; margin: 0px auto;">

            <div class="col-md-6 col-sm-6">
                <form action="#" class="calculate form-horizontal" onsubmit="return false;">
                    <div class="form-group">
                        <label class="col-sm-4 control-label" for="square">ПЛОЩАДЬ ФАСАДА М<sup>2</sup></label>

                        <div class="col-sm-8">
                            <input value="100" type="text" id="square" class="form-control">
                        </div>
                    </div>
                    <div class="form-group b-form-select c-arrow-secondary">
                        <label class="col-sm-4 control-label" for="product">МАТЕРИАЛ УТЕПЛИТЕЛЯ</label>

                        <div class="col-sm-8">
                            <select class="form-control j-select" id="product">
                                <option value="0">пенополистирол</option>
                                <option value="1">мин. вата</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group b-form-select c-arrow-secondary">
                        <label class="col-sm-4 control-label" for="weight">ТОЛЩИНА УТЕПЛИТЕЛЯ, ММ</label>

                        <div class="col-sm-8">
                            <select class="form-control j-select" id="weight">
                                <option value="0">50</option>
                                <option value="1">100</option>
                                <option value="2">150</option>
                                <option value="3">200</option>
                            </select>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-6 col-sm-6">
                <h4>ЗАПОЛНИТЕ ИЛИ ВЫБЕРИТЕ ИСХОДНЫЕ ДАННЫЕ</h4>

                <div class="system-holder">
                    <p>
                        <span class="system">Система утепления мокрый фасад</span>
                    </p>

                    <p>
                <span>Срок производства работ от: <span id="s_days"
                        style="font-weight:bold;">18<span>рабочих дней</span></span> рабочих дней</span>
                    </p>

                </div>
            </div>


        </div>

        <table class="price b-table-primary f-table-primary f-center" style="width: 100%; margin: 0px auto;">
            <tbody>
            <tr>
                <th class="name" rowspan="2">Наименование работ и затрат</th>
                <th class="mark_mat" rowspan="2">Марка материала</th>
                <th class="units" rowspan="2">Ед. изм</th>
                <th class="col-units" rowspan="2">Кол-во единиц</th>
                <th class="material" colspan="2">Материал</th>
                <th class="job" colspan="2">Работа</th>
                <th class="total" rowspan="2">Общая стоимость</th>
            </tr>
            <tr>
                <th class="price-units">Цена на ед. изм.</th>
                <th class="price-total">Стоимость всего</th>
                <th class="price-units">Цена на ед. изм.</th>
                <th class="price-total">Стоимость всего</th>
            </tr>
            <tr class="marked">
                <td class="name"><span style="font-weight:bold;">Монтаж, демонтаж лесов</span></td>
                <td class="mark_mat"></td>
                <td class="units">м<sup>2</sup></td>
                <td class="col-units">300</td>
                <td class="price-units"></td>
                <td class="price-total"></td>
                <td class="price-units">120.00</td>
                <td class="price-total">36000</td>
                <td class="total">36000</td>
            </tr>
            <tr>
                <td class="name">аренда комплекта лесов фасадных</td>
                <td class="mark_mat">ЛРСП-200</td>
                <td class="units">м<sup>2</sup></td>
                <td class="col-units">300</td>
                <td class="price-units">60.00</td>
                <td class="price-total">18000</td>
                <td class="price-units"></td>
                <td class="price-total"></td>
                <td class="total">18000</td>
            </tr>
            <tr class="marked">
                <td class="name"><span style="font-weight:bold;">Монтаж плит утеплителя</span></td>
                <td class="mark_mat"></td>
                <td class="units">м<sup>2</sup></td>
                <td class="col-units">250</td>
                <td class="price-units"></td>
                <td class="price-total"></td>
                <td class="price-units">310.00</td>
                <td class="price-total">77500</td>
                <td class="total">77500</td>
            </tr>
            <tr>
                <td class="name">плиты утеплителя</td>
                <td class="mark_mat">ПСБС-25ф толщ. 100мм</td>
                <td class="units">м<sup>2</sup></td>
                <td class="col-units">275</td>
                <td class="price-units">250.00</td>
                <td class="price-total">68750</td>
                <td class="price-units"></td>
                <td class="price-total"></td>
                <td class="total">68750</td>
            </tr>
            <tr class="marked">
                <td class="name">плиты утеплителя (дополнительно)</td>
                <td class="mark_mat">Paroc FAS 4 толщ. 100мм</td>
                <td class="units">м<sup>2</sup></td>
                <td class="col-units">38</td>
                <td class="price-units">610.00</td>
                <td class="price-total">23180</td>
                <td class="price-units"></td>
                <td class="price-total"></td>
                <td class="total">23180</td>
            </tr>
            <tr>
                <td class="name">клей для монтажа утеплителя</td>
                <td class="mark_mat">210 STYROPOR</td>
                <td class="units">кг</td>
                <td class="col-units">1500</td>
                <td class="price-units">14.11</td>
                <td class="price-total">21165</td>
                <td class="price-units"></td>
                <td class="price-total"></td>
                <td class="total">21165</td>
            </tr>
            <tr class="marked">
                <td class="name">дюбель фасадный</td>
                <td class="mark_mat">"БИЙСК" ДС-2</td>
                <td class="units">шт</td>
                <td class="col-units">1500</td>
                <td class="price-units">8.00</td>
                <td class="price-total">12000</td>
                <td class="price-units"></td>
                <td class="price-total"></td>
                <td class="total">12000</td>
            </tr>
            <tr>
                <td class="name">грунтующее средство</td>
                <td class="mark_mat">301 TIEFGRUND LMF</td>
                <td class="units">л</td>
                <td class="col-units">80</td>
                <td class="price-units">52.10</td>
                <td class="price-total">4168</td>
                <td class="price-units"></td>
                <td class="price-total"></td>
                <td class="total">4168</td>
            </tr>
            <tr class="marked">
                <td class="name"><span style="font-weight:bold;">Устройство армирующего слоя</span></td>
                <td class="mark_mat"></td>
                <td class="units">м<sup>2</sup></td>
                <td class="col-units">1250</td>
                <td class="price-units"></td>
                <td class="price-total"></td>
                <td class="price-units">250.00</td>
                <td class="price-total">62500</td>
                <td class="total">62500</td>
            </tr>
            <tr>
                <td class="name">клей для армирующего слоя</td>
                <td class="mark_mat">220 ARMIERUNGS</td>
                <td class="units">кг</td>
                <td class="col-units">1250</td>
                <td class="price-units">17.49</td>
                <td class="price-total">21863</td>
                <td class="price-units"></td>
                <td class="price-total"></td>
                <td class="total">21863</td>
            </tr>
            <tr class="marked">
                <td class="name">стеклосетка шелочестойкая</td>
                <td class="mark_mat">GW 545 4*4-160-100-050</td>
                <td class="units">м<sup>2</sup></td>
                <td class="col-units">300</td>
                <td class="price-units">32.50</td>
                <td class="price-total">9750</td>
                <td class="price-units"></td>
                <td class="price-total"></td>
                <td class="total">9750</td>
            </tr>
            <tr>
                <td class="name"><span style="font-weight:bold;">Устройство фактурного слоя</span></td>
                <td class="mark_mat"></td>
                <td class="units">м<sup>2</sup></td>
                <td class="col-units">250</td>
                <td class="price-units"></td>
                <td class="price-total"></td>
                <td class="price-units">210.00</td>
                <td class="price-total">52500</td>
                <td class="total">52500</td>
            </tr>
            <tr class="marked">
                <td class="name">декоративная штукатурка</td>
                <td class="mark_mat">082 EDELPUTZ BR 2mm</td>
                <td class="units">кг</td>
                <td class="col-units">875</td>
                <td class="price-units">21.72</td>
                <td class="price-total">19005</td>
                <td class="price-units"></td>
                <td class="price-total"></td>
                <td class="total">19005</td>
            </tr>
            <tr>
                <td class="name">грунтующее средство</td>
                <td class="mark_mat">330 PUTZGRUND</td>
                <td class="units">кг</td>
                <td class="col-units">90</td>
                <td class="price-units">57.70</td>
                <td class="price-total">5193</td>
                <td class="price-units"></td>
                <td class="price-total"></td>
                <td class="total">5193</td>
            </tr>
            <tr class="marked">
                <td class="name"><span style="font-weight:bold;">Окраска фасада</span></td>
                <td class="mark_mat">082 EDELPUTZ BR 2mm</td>
                <td class="units">м<sup>2</sup></td>
                <td class="col-units">250</td>
                <td class="price-units"></td>
                <td class="price-total"></td>
                <td class="price-units">60.00</td>
                <td class="price-total">15000</td>
                <td class="total">15000</td>
            </tr>
            <tr>
                <td class="name">краска фасадная</td>
                <td class="mark_mat">005 EGALISIERUNGSFARBE</td>
                <td class="units">л</td>
                <td class="col-units">75</td>
                <td class="price-units">206.80</td>
                <td class="price-total">15510</td>
                <td class="price-units"></td>
                <td class="price-total"></td>
                <td class="total">15510</td>
            </tr>
            <tr class="marked">
                <td class="name"><span style="font-weight:bold;">Отделка оконных откосов    </span></td>
                <td class="mark_mat"></td>
                <td class="units">м<sup>2</sup></td>
                <td class="col-units">125</td>
                <td class="price-units"></td>
                <td class="price-total"></td>
                <td class="price-units">150.00</td>
                <td class="price-total">18750</td>
                <td class="total">18750</td>
            </tr>
            <tr>
                <td class="name">клей для армирующего слоя</td>
                <td class="mark_mat">220 ARMIERUNGS</td>
                <td class="units">кг</td>
                <td class="col-units">100</td>
                <td class="price-units">17.49</td>
                <td class="price-total">1749</td>
                <td class="price-units"></td>
                <td class="price-total"></td>
                <td class="total">1749</td>
            </tr>
            <tr class="marked">
                <td class="name">декоративная штукатурка</td>
                <td class="mark_mat">082 EDELPUTZ BR 2mm</td>
                <td class="units">кг</td>
                <td class="col-units">50</td>
                <td class="price-units">21.72</td>
                <td class="price-total">1086</td>
                <td class="price-units"></td>
                <td class="price-total"></td>
                <td class="total">1086</td>
            </tr>
            <tr>
                <td class="name">краска фасадная</td>
                <td class="mark_mat">005 EGALISIERUNGSFARBE</td>
                <td class="units">л</td>
                <td class="col-units">15</td>
                <td class="price-units">206.80</td>
                <td class="price-total">3102</td>
                <td class="price-units"></td>
                <td class="price-total"></td>
                <td class="total">3102</td>
            </tr>
            <tr class="marked">
                <td class="name">профиль угловой</td>
                <td class="mark_mat">BauKom ПВХ 10 x 15</td>
                <td class="units">м</td>
                <td class="col-units">170</td>
                <td class="price-units">32.00</td>
                <td class="price-total">5440</td>
                <td class="price-units"></td>
                <td class="price-total"></td>
                <td class="total">5440</td>
            </tr>
            <tr>
                <td class="name">профиль примыкания</td>
                <td class="mark_mat">BauKom с сеткой 6мм</td>
                <td class="units">м</td>
                <td class="col-units">112.8</td>
                <td class="price-units">61.50</td>
                <td class="price-total">6937</td>
                <td class="price-units"></td>
                <td class="price-total"></td>
                <td class="total">6937</td>
            </tr>
            <tr class="totally marked">
                <td colspan="2" class="name"><span style="font-weight:bold;">ИТОГО прямые затраты</span>
                </td>
                <td class="units"><span style="font-weight:bold;">руб.</span></td>
                <td class="col-units"></td>
                <td class="price-units"></td>
                <td class="price-total"><span style="font-weight:bold;">236898</span></td>
                <td class="price-units"></td>
                <td class="price-total"><span style="font-weight:bold;">262250</span></td>
                <td class="total"><span style="font-weight:bold;">499148</span></td>
            </tr>
            <tr class="totally">
                <td colspan="2" class="name"><span style="font-weight:bold;">Транспортные расходы </span>
                </td>
                <td class="units"><span style="font-weight:bold;">руб.</span></td>
                <td class="col-units"></td>
                <td class="price-units"></td>
                <td class="price-total"><span style="font-weight:bold;">16583</span></td>
                <td class="price-units"></td>
                <td class="price-total"></td>
                <td class="total"><span style="font-weight:bold;">16583</span></td>
            </tr>
            <tr class="totally marked">
                <td colspan="2" class="name"><span style="font-weight:bold;">Плановая прибыль</span></td>
                <td class="units"><span style="font-weight:bold;">руб.</span></td>
                <td class="col-units"></td>
                <td class="price-units"></td>
                <td class="price-total"></td>
                <td class="price-units"></td>
                <td class="price-total"><span style="font-weight:bold;">52450</span></td>
                <td class="total"><span style="font-weight:bold;">52450</span></td>
            </tr>
            <tr class="totally">
                <td colspan="2" class="name"><span style="font-weight:bold;"
                                                   class="total-price">ИТОГО</span></td>
                <td class="units"><span style="font-weight:bold;">руб.</span></td>
                <td class="col-units"></td>
                <td class="price-units"></td>
                <td class="price-total"></td>
                <td class="price-units"></td>
                <td class="price-total"></td>
                <td class="total"><span style="font-weight:bold;">10000000</span></td>
            </tr>
            <tr class="totally marked">
                <td colspan="2" class="name"><span style="font-weight:bold;" class="meter">Итого стоимость условного метра<sup>2</sup></span>
                </td>
                <td class="units"><span style="font-weight:bold;">руб.</span></td>
                <td class="col-units"></td>
                <td class="price-units"></td>
                <td class="price-total"></td>
                <td class="price-units"></td>
                <td class="price-total"></td>
                <td class="total"><span style="font-weight:bold;">2164</span></td>
            </tr>
            </tbody>
        </table>
        <br />

</div>

<script src="/calc.js"></script>

<script type="text/javascript">
$(document).ready(function () {

    // Ввод площади в input
    $('input#square, select#product, select#weight').bind('change', function() {
        setTableData();
        changeTableData();
       
        void(yaCounter29696835.reachGoal('kalkulyator')); void(ga('send', 'pageview', '/virtual/kalkulyator/')); 

    });

    setTableData();
    changeTableData();
 
    
});
</script>
    </div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>