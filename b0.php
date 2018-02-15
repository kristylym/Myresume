
<meta charset="utf-8"> 
<?php
error_reporting( E_ERROR ); //Отключение предупреждений и нотайсов (warning и notice) на сайте
// print phpinfo();  // текущие настройки пхп на сервере
// создание переменных из полей формы	
// print_r ($_POST); // смотрим что нам прислали (для отладки)	
if (isset($_POST['name']))			{$name			= $_POST['name'];		if ($name == '')	{unset($name);}}
if (isset($_POST['email1']))		{$email1		= $_POST['email1'];		if ($email1 == '')	{unset($email1);}}
if (isset($_POST['text']))			{$text			= $_POST['text'];		if ($text == '')	{unset($text);}}

// if (!isset($name) || !isset($email1) || !isset($text)) {
// echo "<p style='color:#009900;'>Не все поля заполнены. Попробуйте еще раз.</p>"; 
// exit;
// } 

//стирание треугольных скобок из полей формы
if (isset($name) ) {
$name=stripslashes($name);
$name=htmlspecialchars($name);
}
if (isset($email1) ) {
$email1=stripslashes($email1);
$email1=htmlspecialchars($email1);
}
if (isset($text) ) {
$text=stripslashes($text);
$text=htmlspecialchars($text);
}
// адрес почты куда придет письмо
$address="yalinchukk@gmail.com";
// текст письма 
$note_text="Имя : $name \r\n Email : $email1 \r\n Дополнительная информация : $text";
$theme = "Ялинчук";
if (mail($address,$theme,$note_text,"Content-type:text/plain; windows-1251")) {
// сообщение после отправки формы
echo "<p style='color:#009900;'>Уважаемый(ая) <b>$name</b> Ваше письмо отправленно успешно. <br> Спасибо. <br>Вам скоро ответят на почту <b> $email1</b>.</p>";
} else {
echo "<p style='color:#009900;'>Уважаемый(ая), не удалось отправить письмо, сорян.</p>";
}
?>