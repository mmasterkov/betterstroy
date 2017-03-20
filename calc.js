var product = 0;
var weight = 0;
var s_manufacturer = 0;
var s_days = 0;
var s_plate = 0;
var s_addplate = 0;
var s_plate_glue = 0;
var s_glue = 0;
var s_priming_tool = 0;
var s_priming_tool2 = 0;
var s_decor = 0;
var s_paints = 0;

var tableParam = function(name, price) {
	this.name = name;
	this.price = price;
}

var manufacturer = new Array('KREISEL TURBO-S <span>(производство Польша, Германия)</span>', 'KREISEL TURBO-W <span>(производство Польша, Германия)</span>');
var no = new tableParam('нет', '0');

var plate = new Array();
plate[1] = new tableParam('ПСБС-25ф толщ. 50мм', '125');
plate[2] = new tableParam('ПСБС-25ф толщ. 100мм', '250');
plate[3] = new tableParam('ПСБС-25ф толщ. 150мм', '375');
plate[4] = new tableParam('ПСБС-25ф т. 100мм х 2 сл.', '500');

var addplate = new Array();
addplate[1] = new tableParam('Paroc FAS 4 толщ. 50мм', '305');
addplate[2] = new tableParam('Paroc FAS 4 толщ. 100мм', '610');
addplate[3] = new tableParam('Paroc FAS 4 толщ. 150мм', '915');
addplate[4] = new tableParam('Paroc FAS 4 т. 100мм х 2 сл.', '1220');

var glue = new Array();
glue[1] = new tableParam('301 TIEFGRUND LMF', '52.1');
glue[2] = new tableParam('330 PUTZGRUND', '57.7');
glue[3] = new tableParam('210 STYROPOR', '14.11');
glue[4] = new tableParam('230 MINERALWOLLE', '15.65');
glue[5] = new tableParam('220 ARMIERUNGS', '17.49');
glue[6] = new tableParam('240 MINERAL-ARMIERUNGS', '19.03');
glue[7] = new tableParam('082 EDELPUTZ BR 2mm', '21.72');
glue[8] = new tableParam('005 EGALISIERUNGSFARBE', '206.8');

function addCommas(nStr) {
	nStr += '';
	x = nStr.split('.');
	x1 = x[0];
	x2 = x.length > 1 ? '.' + x[1] : '';
	var rgx = /(\d+)(\d{3})/;
	while (rgx.test(x1)) {
		x1 = x1.replace(rgx, '$1' + ' ' + '$2');
	}
	return x1 + x2;
}

function setTableData() {
	// Материал утеплителя
	product = parseInt($('#product').val());
	// Площадь фасада, кв. м.
	weight = parseInt($('#weight').val());
	
	s_decor = glue[7];
	s_priming_tool = glue[1];
	s_priming_tool2 = glue[2];
	s_paints = glue[8];
	
	// материал
	switch(product) {
		// пенополистирол
		case 0: {
			// Система утепления фасада
			s_manufacturer = manufacturer[0];
			// толщина
			switch(weight) {
				case 0: {
					s_plate = plate[1];
					s_addplate = addplate[1];
					s_plate_glue = glue[3];
					s_glue = glue[5];
					break;
				}
				case 1: {
					s_plate = plate[2];
					s_addplate = addplate[2];
					s_plate_glue = glue[3];
					s_glue = glue[5];
					break;
				}
				case 2: {
					s_plate = plate[3];
					s_addplate = addplate[3];
					s_plate_glue = glue[3];
					s_glue = glue[5];
					break;
				}
				case 3: {
					s_plate = plate[4];
					s_addplate = addplate[4];
					s_plate_glue = glue[3];
					s_glue = glue[5];
					break;
				}
			}
			break;
		}
		// минвата
		case 1: {
			// Система утепления фасада
			s_manufacturer = manufacturer[1];
			// толщина
			switch(weight) {
				case 0: {
					s_plate = addplate[1];
					s_addplate = no;
					s_plate_glue = glue[4];
					s_glue = glue[6];
					break;
				}
				case 1: {
					s_plate = addplate[2];
					s_addplate = no;
					s_plate_glue = glue[4];
					s_glue = glue[6];
					break;
				}
				case 2: {
					s_plate = addplate[3];
					s_addplate = no;
					s_plate_glue = glue[4];
					s_glue = glue[6];
					break;
				}
				case 3: {
					s_plate = addplate[4];
					s_addplate = no;
					s_plate_glue = glue[4];
					s_glue = glue[6];
					break;
				}
			}
		}
	}	
}

function changeTableData() {
	// Площадь
	var square = parseInt($('input#square').val().trim());
	
	// Система утепления фасада
	$('#s_manufacturer').html(s_manufacturer);
	
	// Срок производства работ, раб. дн.
	s_days = square > 450 ? Math.floor(square / 16) : Math.floor(square / 14);
	$('#s_days').html(s_days);
	
	// Вспомогательные переменные
	var counter = new Array();
	var price = new Array();
	var coeff = new Array();
	var total_direct_costs = new Array();
	var transport_costs, planned_profit, total, total_price_meter;
	
	// Монтаж, демонтаж лесов
	counter[2] = Math.floor(square * 1.2);
	price[2] = Math.floor(counter[2] * 120);
	$('table.price tr').eq(2).find('td').eq(3).html(addCommas(counter[2]));
	$('table.price tr').eq(2).find('td').eq(7).html(addCommas(price[2]));
	$('table.price tr').eq(2).find('td').eq(8).html(addCommas(price[2]));
	// аренда комплекта лесов фасадных
	price[3] = Math.floor(counter[2] * 60);
	$('table.price tr').eq(3).find('td').eq(3).html(addCommas(counter[2]));
	$('table.price tr').eq(3).find('td').eq(5).html(addCommas(price[3]));
	$('table.price tr').eq(3).find('td').eq(8).html(addCommas(price[3]));
	
	// Монтаж плит утеплителя
	counter[4] = square;
	price[4] = Math.floor(counter[4] * 310);
	$('table.price tr').eq(4).find('td').eq(3).html(addCommas(counter[4]));
	$('table.price tr').eq(4).find('td').eq(7).html(addCommas(price[4]));
	$('table.price tr').eq(4).find('td').eq(8).html(addCommas(price[4]));
	// плиты утеплителя 
	counter[5] = Math.floor(counter[4] * 1.1);
	price[5] = Math.floor(counter[5] * s_plate.price);
	$('table.price tr').eq(5).find('td').eq(1).html(s_plate.name);
	$('table.price tr').eq(5).find('td').eq(3).html(addCommas(counter[5]));
	$('table.price tr').eq(5).find('td').eq(4).html(addCommas(s_plate.price));
	$('table.price tr').eq(5).find('td').eq(5).html(addCommas(price[5]));
	$('table.price tr').eq(5).find('td').eq(8).html(addCommas(price[5]));
	// плиты утеплителя (дополнительно)
	coeff[6] = s_addplate.price > 0 ? 1 : 0;
	counter[6] = Math.floor(0.15 * counter[4] * coeff[6]);
	price[6] = Math.floor(counter[6] * s_addplate.price);
	$('table.price tr').eq(6).find('td').eq(1).html(s_addplate.name);
	$('table.price tr').eq(6).find('td').eq(3).html(addCommas(counter[6]));
	$('table.price tr').eq(6).find('td').eq(4).html(addCommas(s_addplate.price));
	$('table.price tr').eq(6).find('td').eq(5).html(addCommas(price[6]));
	$('table.price tr').eq(6).find('td').eq(8).html(addCommas(price[6]));
	// клей для монтажа утеплителя
	counter[7] = Math.floor(counter[4] * 6);
	price[7] = Math.floor(counter[7] * s_plate_glue.price);
	$('table.price tr').eq(7).find('td').eq(1).html(s_plate_glue.name);
	$('table.price tr').eq(7).find('td').eq(3).html(addCommas(counter[7]));
	$('table.price tr').eq(7).find('td').eq(4).html(addCommas(s_plate_glue.price));
	$('table.price tr').eq(7).find('td').eq(5).html(addCommas(price[7]));
	$('table.price tr').eq(7).find('td').eq(8).html(addCommas(price[7]));
	// дюбель фасадный
	counter[8] = Math.floor(counter[4] * 5.5);
	price[8] = Math.floor(counter[8] * 8);
	$('table.price tr').eq(8).find('td').eq(3).html(addCommas(counter[8]));
	$('table.price tr').eq(8).find('td').eq(5).html(addCommas(price[8]));
	$('table.price tr').eq(8).find('td').eq(8).html(addCommas(price[8]));
	// грунтующее средство
	counter[9] = Math.floor(counter[4] * 0.3);
	price[9] = Math.floor(counter[9] * s_priming_tool.price);
	$('table.price tr').eq(9).find('td').eq(1).html(s_priming_tool.name);
	$('table.price tr').eq(9).find('td').eq(3).html(addCommas(counter[9]));
	$('table.price tr').eq(9).find('td').eq(4).html(addCommas(s_priming_tool.price));
	$('table.price tr').eq(9).find('td').eq(5).html(addCommas(price[9]));
	$('table.price tr').eq(9).find('td').eq(8).html(addCommas(price[9]));
	
	// Устройство армирующего слоя
	counter[10] = square;
	price[10] = Math.floor(counter[10] * 250);
	$('table.price tr').eq(10).find('td').eq(3).html(addCommas(counter[10]));
	$('table.price tr').eq(10).find('td').eq(7).html(addCommas(price[10]));
	$('table.price tr').eq(10).find('td').eq(8).html(addCommas(price[10]));
	// клей для армирующего слоя
	counter[11] = Math.floor(5 * counter[10]);
	price[11] = Math.floor(counter[11] * s_glue.price);
	$('table.price tr').eq(11).find('td').eq(1).html(s_glue.name);
	$('table.price tr').eq(11).find('td').eq(3).html(addCommas(counter[11]));
	$('table.price tr').eq(11).find('td').eq(4).html(addCommas(s_glue.price));
	$('table.price tr').eq(11).find('td').eq(5).html(addCommas(price[11]));
	$('table.price tr').eq(11).find('td').eq(8).html(addCommas(price[11]));
	// стеклосетка щелочестойкая
	counter[12] = Math.floor(1.2 * counter[10]);
	price[12] = Math.floor(counter[12] * 32.5);
	$('table.price tr').eq(12).find('td').eq(3).html(addCommas(counter[12]));
	$('table.price tr').eq(12).find('td').eq(5).html(addCommas(price[12]));
	$('table.price tr').eq(12).find('td').eq(8).html(addCommas(price[12]));
	
	// Устройство фактурного слоя
	counter[13] = square;
	price[13] = Math.floor(counter[13] * 210);
	$('table.price tr').eq(13).find('td').eq(3).html(addCommas(counter[13]));
	$('table.price tr').eq(13).find('td').eq(7).html(addCommas(price[13]));
	$('table.price tr').eq(13).find('td').eq(8).html(addCommas(price[13]));
	// декоративная штукатурка 
	counter[14] = Math.floor(3.5 * counter[13]);
	price[14] = Math.floor(counter[14] * s_decor.price);
	$('table.price tr').eq(14).find('td').eq(1).html(s_decor.name);
	$('table.price tr').eq(14).find('td').eq(3).html(addCommas(counter[14]));
	$('table.price tr').eq(14).find('td').eq(4).html(addCommas(s_decor.price));
	$('table.price tr').eq(14).find('td').eq(5).html(addCommas(price[14]));
	$('table.price tr').eq(14).find('td').eq(8).html(addCommas(price[14]));
	// грунтующее средство
	counter[15] = Math.floor(0.35 * counter[13]);
	price[15] = Math.floor(counter[15] * s_priming_tool2.price);
	$('table.price tr').eq(14).find('td').eq(1).html(s_priming_tool2.name);
	$('table.price tr').eq(15).find('td').eq(3).html(addCommas(counter[15]));
	$('table.price tr').eq(15).find('td').eq(5).html(addCommas(price[15]));
	$('table.price tr').eq(14).find('td').eq(5).html(addCommas(price[15]));
	$('table.price tr').eq(15).find('td').eq(8).html(addCommas(price[15]));
	
	// Окраска фасада 
	counter[16] = square;
	price[16] = Math.floor(counter[16] * 60);
	$('table.price tr').eq(16).find('td').eq(3).html(addCommas(counter[16]));
	$('table.price tr').eq(16).find('td').eq(7).html(addCommas(price[16]));
	$('table.price tr').eq(16).find('td').eq(8).html(addCommas(price[16]));
	// краска фасадная
	counter[17] = Math.floor(0.25 * counter[16]);
	price[17] = Math.floor(counter[17] * s_paints.price);
	$('table.price tr').eq(17).find('td').eq(1).html(s_paints.name);
	$('table.price tr').eq(17).find('td').eq(3).html(addCommas(counter[17]));
	$('table.price tr').eq(17).find('td').eq(4).html(addCommas(s_paints.price));
	$('table.price tr').eq(17).find('td').eq(5).html(addCommas(price[17]));
	$('table.price tr').eq(17).find('td').eq(8).html(addCommas(price[17]));
	
	// Отделка оконных откосов 
	counter[18] = Math.floor(0.5 * square);
	price[18] = Math.floor(counter[18] * 150);
	$('table.price tr').eq(18).find('td').eq(3).html(addCommas(counter[18]));
	$('table.price tr').eq(18).find('td').eq(7).html(addCommas(price[18]));
	$('table.price tr').eq(18).find('td').eq(8).html(addCommas(price[18]));
	// клей для армирующего слоя
	counter[19] = Math.floor(0.8 * counter[18]);
	price[19] = Math.floor(counter[19] * s_glue.price);
	$('table.price tr').eq(19).find('td').eq(1).html(s_glue.name);
	$('table.price tr').eq(19).find('td').eq(3).html(addCommas(counter[19]));
	$('table.price tr').eq(19).find('td').eq(4).html(addCommas(s_glue.price));
	$('table.price tr').eq(19).find('td').eq(5).html(addCommas(price[19]));
	$('table.price tr').eq(19).find('td').eq(8).html(addCommas(price[19]));
	// декоративная штукатурка 
	counter[20] = Math.floor(0.35 * counter[18]);
	price[20] = Math.floor(counter[20] * s_decor.price);
	$('table.price tr').eq(20).find('td').eq(1).html(s_decor.name);
	$('table.price tr').eq(20).find('td').eq(3).html(addCommas(counter[20]));
	$('table.price tr').eq(20).find('td').eq(4).html(addCommas(s_decor.price));
	$('table.price tr').eq(20).find('td').eq(5).html(addCommas(price[20]));
	$('table.price tr').eq(20).find('td').eq(8).html(addCommas(price[20]));
	// краска фасадная 
	counter[21] = Math.floor(0.025 * counter[18]);
	price[21] = Math.floor(counter[21] * s_paints.price);
	$('table.price tr').eq(21).find('td').eq(1).html(s_paints.name);
	$('table.price tr').eq(21).find('td').eq(3).html(addCommas(counter[21]));
	$('table.price tr').eq(21).find('td').eq(4).html(addCommas(s_paints.price));
	$('table.price tr').eq(21).find('td').eq(5).html(addCommas(price[21]));
	$('table.price tr').eq(21).find('td').eq(8).html(addCommas(price[21]));
	// профиль угловой
	counter[22] = Math.floor(1.35 * counter[18]);
	price[22] = Math.floor(counter[22] * 32);
	$('table.price tr').eq(22).find('td').eq(3).html(addCommas(counter[22]));
	$('table.price tr').eq(22).find('td').eq(5).html(addCommas(price[22]));
	$('table.price tr').eq(22).find('td').eq(8).html(addCommas(price[22]));
	// профиль примыкания
	counter[23] = Math.floor(0.9 * counter[18]);
	price[23] = Math.floor(counter[23] * 61.5);
	$('table.price tr').eq(23).find('td').eq(3).html(addCommas(counter[23]));
	$('table.price tr').eq(23).find('td').eq(5).html(addCommas(price[23]));
	$('table.price tr').eq(23).find('td').eq(8).html(addCommas(price[23]));
	
	// ИТОГО прямые затраты
	total_direct_costs[1] = price[3] + price[5] + price[6] + price[7] + price[8] + price[9] + price[11] + price[12] + price[14] + price[15] + price[17] + price[19] + price[20] + price[21] + price[22] + price[23];
	total_direct_costs[2] = price[2] + price[4] + price[10] + price[13] + price[16] + price[18];
	total_direct_costs[3] = total_direct_costs[1] + total_direct_costs[2];
	$('table.price tr').eq(24).find('td').eq(4).html(addCommas(total_direct_costs[1]));
	$('table.price tr').eq(24).find('td').eq(6).html(addCommas(total_direct_costs[2]));
	$('table.price tr').eq(24).find('td').eq(7).html(addCommas(total_direct_costs[3]));
	// Транспортные расходы 
	transport_costs = Math.floor(total_direct_costs[1] * 0.07);
	$('table.price tr').eq(25).find('td').eq(4).html(addCommas(transport_costs));
	$('table.price tr').eq(25).find('td').eq(7).html(addCommas(transport_costs));
	// Плановая прибыль 
	planned_profit = Math.floor(total_direct_costs[2] * 0.2);
	$('table.price tr').eq(26).find('td').eq(6).html(addCommas(planned_profit));
	$('table.price tr').eq(26).find('td').eq(7).html(addCommas(planned_profit));
	// ИТОГО 	
	total = total_direct_costs[3] + transport_costs + planned_profit;
	$('table.price tr').eq(27).find('td').eq(7).html(addCommas(total));
	// Итого стоимость условного метра квадратного
	total_price_meter = Math.floor(total/(square * 1.05));
	$('table.price tr').eq(28).find('td').eq(7).html(addCommas(total_price_meter));
}