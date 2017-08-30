<?php 
/* 	
If you see this text in your browser, PHP is not configured correctly on this hosting provider. 
Contact your hosting provider regarding PHP configuration for your site.

PHP file generated by Adobe Muse CC 2014.2.1.284
*/

require_once('form_process.php');

$form = array(
	'subject' => 'Отправка Заказать \"ФАСАДЫ\"',
	'heading' => 'Отправка новой формы',
	'success_redirect' => '',
	'resources' => array(
		'checkbox_checked' => 'Отмечено',
		'checkbox_unchecked' => 'Флажок не установлен',
		'submitted_from' => 'Формы, отправленные с веб-сайта: %s',
		'submitted_by' => 'IP-адрес посетителя: %s',
		'too_many_submissions' => 'Недопустимо высокое количество отправок с этого IP-адреса за последнее время',
		'failed_to_send_email' => 'Не удалось отправить сообщение эл. почты',
		'invalid_reCAPTCHA_private_key' => 'Недействительный закрытый ключ reCAPTCHA.',
		'invalid_field_type' => 'Неизвестный тип поля \'%s\'.',
		'unknown_method' => 'Неизвестный метод запроса сервера'
	),
	'email' => array(
		'from' => 'alp-vertikal@mail.ru',
		'to' => 'alp-vertikal@mail.ru'
	),
	'fields' => array(
		'custom_U1389' => array(
			'type' => 'string',
			'label' => 'Ваше имя',
			'required' => true,
			'errors' => array(
				'required' => 'Поле \'Ваше имя\' не может быть пустым.'
			)
		),
		'Email' => array(
			'type' => 'email',
			'label' => 'Ваша электронная почта',
			'required' => true,
			'errors' => array(
				'required' => 'Поле \'Ваша электронная почта\' не может быть пустым.',
				'format' => 'Поле \'Ваша электронная почта\' содержит недействительное сообщение эл. почты.'
			)
		),
		'custom_U1378' => array(
			'type' => 'string',
			'label' => 'Ваш телефон',
			'required' => true,
			'errors' => array(
				'required' => 'Поле \'Ваш телефон\' не может быть пустым.'
			)
		)
	)
);

process_form($form);
?>