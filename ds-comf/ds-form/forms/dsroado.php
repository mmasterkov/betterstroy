<?php

/*--Кодировка--*/
define('CHARSET', 'utf-8');

/*--Валидация полей--*/
define('VALIDATE_HTML5', 0); //Включить валидацию для html5
define('KOLSIM', 3); //Минимальное кол-во вводимых символов
define('ERROR_EMPTY', 'Поля не заполнены либо слишком короткие'); //Текст ошибок если не задан

/*Настройка SMTP*/
define('SMTP_ON', 0); //Включение SMTP
define('SMTP_HOST', "smtp.mail.ru"); //SMTP хост
define('SMTP_SECURE', "ssl"); //Протокол шифрования
define('SMTP_PORT', 465); //SMTP порт
define('SMTP_AUTH', 1); //Если сервер требует авторизации
define('SMTP_USERNAME', 'email@mail.ru'); //Имя пользователя
define('SMTP_PASSWORD', 'password'); //Пароль
define('SMTP_FROMEMAIL', 1); //Использовать имя пользователя в качестве отправителя

/*--Настройка письма--*/
$to_email = array('better-stroy@yandex.ru', ); //Адрес Email кому доставлять письма								
$cc_email = array(); //Адрес Email кому доставлять копияю письма
define('FROM_EMAIL', 'info@'.str_replace('www.', '', $_SERVER['HTTP_HOST']));	//Адрес Email от кого письма(Email сайта)
define('FROM_NAME', 'Info'); //Имя отправителя
define('SUBJECT', 'Форма обратной связи'); //Тема письма
define('HEADTABLE', 'Сообщение отправлено с сайта '.str_replace('www.', '', $_SERVER['HTTP_HOST']));	//Текст заголовка таблицы в письме
define('WIDTHTABLE', 0); //Ширина таблицы в письме				
define('WIDTHNAME',80); //Ширина столбца с названиями полей формы в письме
define('WIDTHMESSAGE',0); //Ширина столбца с данными полей формы в письме
define('ALIGNNAME', 'left'); //Выравнивание текста в столбце с названиями полей формы в письме
define('ALIGNMESSAGE', 'right'); //Выравнивание текста в столбце с данными полей формы в письме

/*--Отчет об отправке--*/
//сообщение при удачной отправке:
$good_mail = <<<html

<div class = "error-report">
<div class = "head-report">Спасибо!</div>
<div class = "text-report">
<p>Ваше сообщение отправлено.</p>
</div>
</div></span>
                           
html;
//сообщение при неудачной отправке:
$bad_mail = <<<html

<div class="error-report">
<div style="margin-top: 20px; font-size: 18px;">
Ваше сообщение не отправлено. Попробуйте отправить письмо позже.</div>
</div>
                           
html;

/*--Обратное письмо--*/
define('BACK_MAIL', 0); //Отправка письма, написавшему о подтверждении получения заказа/письма. У поля "почта" должно быть аттрибут name = "email"
//сообщение:
$repeat_mail = <<<html

<p>Ваш заказ принят!</p>
                           
html;

/*--Настройка полей формы--*/
$dsForma = array(



/* HTML код */ 
 array(
 'type' => 'freearea', 
 'value'=>'<div class="form-head">Оставить заявку</div>' 
),
 
 
/*--Кнопка--*/
array(
	'type' => 'input',
	'class' => 'buttonform',
	'attributs' => array(
					'type'=>'submit',
					'class' =>'btn btn-primary',
					'value'=>'Отправить',
				   ),
	),
 

  /* Многострочный текст */ 
 array(
 'type' => 'textarea', 
 'label' => 'Комментарий',
 'error'=>'Поле "Комментарий" заполнено некорректно',
 'formail' => 1,
 'name_mail'=>'Комментарий',
 'attributs' => array(
      'id'=>'field-id253887',
      'name'=>'fieldname253887',
      'placeholder'=>'Текст комментария',
      'value'=>'', 
      'rows' => '5', 
      ), 
),
 
/* Однострочный текст */ 
 array(
 'type' => 'input', 
 'label' => 'Телефон (*)',
 'error'=>'Поле "Телефон" заполнено некорректно',
 'formail' => 1,
 'name_mail'=>'Телефон',
 'attributs' => array(
      'id'=>'field-id435515',
      'name'=>'fieldname435515',
      'type'=>'text',
      'placeholder'=>'Телефон', 
      'value'=>'',
       'required'=>'required',
      'pattern'=>'^\+?[\d,\-,(,),\s]+$', 
      ), 
),








/* Однострочный текст */ 
 array(
 'type' => 'input', 
 'label' => 'E-mail',
 'error'=>'Поле "E-mail" заполнено некорректно',
 'formail' => 1,
 'name_mail'=>'E-mail',
 'attributs' => array(
      'id'=>'field-id203788',
      'name'=>'email',
      'type'=>'text',
      'placeholder'=>'E-mail', 
      'value'=>'',
      'pattern'=>'^([a-z,._,.\-,0-9])+@([a-z,._,.\-,0-9])+(\.([a-z])+)+$', 
      ), 
),




/*--Блок ошибок--*/
array(
	'type' => 'freearea',
	'value' => '<div style="clear: both;"></div><div class="error_form"></div>',
	),
	

);

?>
