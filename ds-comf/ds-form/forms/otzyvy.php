<?php

/*--Кодировка--*/
define('CHARSET', 'utf-8');

/*--Валидация полей--*/
define('VALIDATE_HTML5', 0);													//Включить валидацию для html5
define('KOLSIM', 3);															//Минимальное кол-во вводимых символов
define('ERROR_EMPTY', 'Поля не заполнены или слишком короткие!');				//Текст ошибок

/*--Настройка письма--*/
$to_email = array('Better-stroy@yandex.ru');				                       	            //Адрес Email кому доставлять письма								
$cc_email = array('info@betterstroy.ru');					                       	            //Адрес Email кому доставлять письма								
$cc_email = array();															//Адрес Email кому доставлять копияю письма
define('FROM_EMAIL', 'info@'.str_replace('www.', '', $_SERVER['HTTP_HOST']));	//Адрес Email от кого письма(Email сайта)
define('FROM_NAME', 'Info');													//Имя отправителя
define('SUBJECT', 'Новый отзыв о сайте '.str_replace('www.', '', $_SERVER['HTTP_HOST']));										//Тема письма
define('HEADTABLE', 'Сообщение отправлено с сайта '.str_replace('www.', '', $_SERVER['HTTP_HOST']));		//Текст заголовка таблицы в письме
define('WIDTHTABLE', 0);														//Ширина таблицы в письме				
define('WIDTHNAME',80);													     	//Ширина столбца с названиями полей формы в письме
define('WIDTHMESSAGE',0);														//Ширина столбца с данными полей формы в письме
define('ALIGNNAME', 'left');													//Выравнивание текста в столбце с названиями полей формы в письме
define('ALIGNMESSAGE', 'right');												//Выравнивание текста в столбце с данными полей формы в письме

/*--Отчет об отправки--*/
//сообщение при удачной отправке:
$good_mail = <<<html
<div class = "error-report">
<div class = "head-report">Спасибо!</div>
<div class = "text-report">
<p>Ваше сообщение отправлено.</p>
</div>
</div>
html;
//сообщение при не удачной отправке:
$bad_mail = <<<html
<div class="error-report">
<div style="margin-top: 20px; font-size: 18px;">
Ваше сообщение не отправлено. Попрбуйте отправить письмо позже.</div>
</div>
html;

/*--Обратное письмо--*/
define('BACK_MAIL', 0);															//Отправка письма, написавшему о поддтверждении получения заказа/письма. Уполя "почта" должно быть аттрибут name = "email"
//сообщение:
$repeat_mail = <<<html
<p>Ваш заказ принят!</p>
html;

/*--Настройка полей фрмы--*/
$dsForma = array(
/*--Заголовок--*/
array(
	'type' => 'freearea',
	'value' => '<div class="form-head">Добавить отзыв</div>',
	),


/*--Кнопка--*/
array(
	'type' => 'input',
	'class' => 'buttonform',
	'attributs' => array(
					'type'=>'submit',
					'value'=>'Отправить',
				   ),
	),

/*--Ваше сообщение--*/
array(
	'type' => 'textarea',
	'error' => 'Поле "Ваш отзыв" заполнено некорректно!',
	'formail' => 1,
	'name_mail'=>'Отзыв',
	'attributs' => array(
					'name'=>'message',
					'type'=>'text',
					'rows'=>'5',
					'cols'=>'35',
					'placeholder'=>'Ваш отзыв (*)',
					'required'=>'',
					'value'=>'',
				   ),
	),


/*--Ваше имя--*/
array(
	'type' => 'input',
	'error' => 'Поле "Ваше имя" заполнено некорректно!',
	'formail' => 1,
	'name_mail'=>'Имя',
	'attributs' => array(
					'id'=>'youname',
					'name'=>'name',
					'type'=>'text',
					'placeholder'=>'Ваше имя (*)',
					'value'=>'',
					'required'=>'',
					'autofocus'=>'',
				   ),
	),
/*--Ваш e-mail--*/
array(
	'type' => 'input',
	'error' => 'Поле "E-mail" заполнено некорректно!',
	'formail' => 1,
	'name_mail'=>'E-mail',
	'attributs' => array(
					'id'=>'youemail',
					'name'=>'email',
					'type'=>'text',
					'placeholder'=>'E-mail',
					'pattern'=>'^([a-z,._,.\-,0-9])+@([a-z,._,.\-,0-9])+(\.([a-z])+)+$',
				   ),
	),

/*--Текст для звездочки--*/
array(
	'type' => 'freearea',
	'value' => '<div class="info">Поля отмеченные "*" обязательны для заполнения</div>',
	),
/*--Блок ошибок--*/
array(
	'type' => 'freearea',
	'value' => '<div class="error_form"></div>',
	),
);
?>