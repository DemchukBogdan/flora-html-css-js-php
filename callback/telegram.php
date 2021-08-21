<?php

/* https://api.telegram.org/bot1611665008:AAFwF7VUE3yzfwhU3SXktuAnenQJcOuj2HA/getUpdates,
где, XXXXXXXXXXXXXXXXXXXXXXX - токен вашего бота, полученный ранее */

$name = $_POST['user_name'];
$phone = $_POST['user_phone'];
$email = $_POST['user_email'];
$token = "1611665008:AAFwF7VUE3yzfwhU3SXktuAnenQJcOuj2HA";
$chat_id = "-556066403";




function selected($var, $value) 
{
	if (!is_array($var)) {
		$var = explode(',', $var);
	}
 
	return (in_array($value, $var)) ? ' selected' : '';
}


if (isset($_POST['field'])) {
	$field = $_POST['field'];
} else {
	$field = 0;
}

if (isset($_POST['field2'])) {
	$field2 = $_POST['field2'];
} else {
	$field2 = 0;
}

if (isset($_POST['field3'])) {
	$field3 = $_POST['field3'];
} else {
	$field3 = 0;
}

if (isset($_POST['field4'])) {
	$field4 = $_POST['field4'];
} else {
	$field4 = 0;
}

if (isset($_POST['field5'])) {
	$field5 = $_POST['field5'];
} else {
	$field5 = 0;
}


function checked($var, $value = null) 
{
	if (is_null($value)) {
		return ($var) ? ' checked' : '';
	} else {
		if (!is_array($var)) {
			$var = explode(',', $var);
		}
 
		return (in_array($value, $var)) ? ' checked' : '';
	}
}


$arr = array(
  
  
  'Якість сервісу' => $field,
  'Обслуговування: ' => $field2,
  'Асортимент: ' => $field3,
  'Загальне враження: ' => $field4,
  'Наскільки ймовірно, що Ви порадите нас друзям? ' => $field5
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};


$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
  header('Location: thank-you.html');
} else {
  echo "Error";
}



?>