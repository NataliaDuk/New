<?
/*
------- *** Автор программы: Голубев Сергей *** ---------
Связь (dubkidubki@list.ru) Джедай.
Начало разработки - конец 2004 года.
Читаем Пользовательское соглашение и Readme!
Полностью бесплатный продукт! Авторские права защищены законом!
*/
$read = file("tpl/messages.txt");
$sizes=count($read);
if (!IsSet($is) or $is<0) $is=0;
if (!IsSet($dsh)) $dsh=$sizes;
if(phpversion()<4.1) exit("<font face='verdana' size='1' color='#de0000'><b>Версия PHP интерпретатора должна быть 4.1.0 или выше, но никак не ниже (ваша версия интерпретатора: ".phpversion().")</b></font>");
else {
include ("inc.php");
include ("tpl/head.html");
zentr_view(@$imena,$width, $smile_c);
if (is_file($file)) file_ok($is, $dsh, $width, $adminc);
else file_not();
include ("tpl/end.html");
copyr($title, $copyr,$width);
}
?>
