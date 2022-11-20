<?php

/* https://api.telegram.org/bot5715170290:AAFgZAxzeamDigL0xS9boS1uny_bfpj-F-o/getUpdates,
где, XXXXXXXXXXXXXXXXXXXXXXX - токен вашего бота, полученный ранее */

$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$msg = $_POST['msg'];
$token = "5715170290:AAFgZAxzeamDigL0xS9boS1uny_bfpj-F-o";
$chat_id = "-782703677";
$arr = array(
  'Имя пользователя: ' => $name,
  'Телефон: ' => $phone,
  'Email' => $email,
  'Сообщение:' => $msg
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram ) {
  header('Location: thanks.html');
} else {
  echo "Error";
}
?>