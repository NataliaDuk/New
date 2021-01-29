<?
/*
------- *** Автор программы: Голубев Сергей *** ---------
Связь (dubkidubki@list.ru) Джедай.
Начало разработки - конец 2004 года.
Читаем Пользовательское соглашение и Readme!
Полностью бесплатный продукт! Авторские права защищены законом!
*/
$mesaga=trim($mesaga);
$name=trim($name);
$email=trim($email);
$email_count=strlen($email);
$name_count=strlen($name);
$mes_count=strlen ($mesaga);
$dlina=0;
$slovo_ein=30;     // максимальнпая длина слова
SetCookie("imena[name]",$name, time()+3600000, "/","$HTTP_HOST");
SetCookie("imena[email]",$email, time()+3600000, "/","$HTTP_HOST");
$mesaga=str_replace("|","l",$mesaga);
$mesaga_slovo=explode(" ",$mesaga); // разделяем сообщение на отдельные слова
for ($i=0;@$mesaga_slovo[$i]>""; $i++){
$valu=strlen($mesaga_slovo[$i]); // подсчитываем, сколько букв в каждом слове
if ($valu>$slovo_ein) { // длина какого то слова оказалось больше допустимой 
$dlina=1;
break;
}
}
if ($email_count>0) { 
$simvol="@";
$prov=strrpos($email,$simvol);
}
else $prov=1;
// поиск пробелов
$probel=" ";
$antiflood_1=strrpos($mesaga,$probel);
$mesaga=strtr($mesaga, "\n", "  ");
include ("inc.php");
print "<title>$title</title>";
require ("tpl/head.html");
$ds=fopen("tpl/mat.txt","r");
$read=fread($ds,"999999");
$read=explode(":",$read);
$count=count($read);
for ($i=0; $i<$count; $i++){
$read[$i]=trim($read[$i]);
$mat=$read[$i];
$mesaga=str_replace($mat,"[***]",$mesaga);
}
fclose ($ds);
print "<br>";
if ($name=="") not_write(  $width); //Ошибка. имя не введено
elseif ($name_count>30) name_error(  $width); //Ошибка. имя более 30 символов
elseif ($prov==0) error_mail(  $width); //Ошибка. ошибка эмаила
elseif ($email_count>30) error_mail(  $width); //Ошибка. эмаил более 30 символов
elseif ($mesaga=="") not1_write(  $width); //Ошибка. нет текста сообщения
elseif ($mes_count>1000) dlinames(  $width); //Ошибка. сообщение слишком крупное
elseif ($dlina==1) dlin_slovo($slovo_ein,   $width); //Ошибка. длина слова ошибочная
elseif ($antiflood_1==0) antiflood_1(  $width); // Ошибка. сообщение из одного слова.
else yes_write($name, $mesaga, $email, $file, $REMOTE_ADDR, $width);
include ("tpl/end.html");
copyr($title, $copyr,   $width);
?>
