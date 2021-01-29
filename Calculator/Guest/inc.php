<?
/*
------- *** Автор программы: Голубев Сергей *** ---------
Связь (dubkidubki@list.ru) Джедай.
Начало разработки - конец 2004 года.
Читаем Пользовательское соглашение и Readme!
Полностью бесплатный продукт! Авторские права защищены законом!
*/
$vers="2.2.5";
$file="tpl/messages.txt"; // база данных сообщений! не менять!
include('config.php');
$jedic="<a href=\"mailto:dubkidubki@list.ru\">Джедай</a>"; // Мое мыло и имя - при использование категорически запрещается менять!
$copyr="Разработка програмного кода и дизайна: <a href=http://jedic.h14.ru>Голубев Сергей.</a><br>Все права защищены. 2004 &copy <b>$jedic</b>"; // копирайты - при изменение их, вы нарушаете авторское право, что влечет к уголовной ответственности.
// отображение таблички добавки сообщения, менять не рекомендуется!
function zentr_view($imena,   $width, $smile_c) {
if (!isset ($imena)) @$imena[name]="" & @$imena[email]="";
print "<br><table cellspacing=0 cellpadding=8 width='$width'>";
print "<tr><td><form action=go.php name=bottomform method=post><table style='border:0px;'><tr><td width=50%><font color=limegreen size=2>Имя: *</td><td><input type=text size=\"25\" maxlength=30 name=\"name\" value='".@$imena[name]."' onFocus='smena(\"name\")' onBlur='off(\"name\")'></td></tr>";
print "<tr><td><font color=limegreen size=2>Email:</td><td><input type=text size=\"25\" maxlength=30 name=\"email\" value='".@$imena[email]."' onFocus='smena(\"email\")' onBlur='off(\"email\")'></td></tr>";
print "<tr><td><font color=limegreen size=2>Cообщение: *</td><td><textarea name=\"mesaga\" rows=5 cols=18 onFocus='smena(\"mesaga\")' onBlur='off(\"mesaga\")'></textarea></td></tr>";
echo "  <tr><td align=center width=100% colspan=2>";
print "</td></tr> ";
print "<tr><td align=left>* - поля обязательные для заполнения.</td><td align=center><input type=submit name=\"pimp\" value=\"Отправить\"></form></td></tr></table><center>";
smile($smile_c);
echo "</font></td></tr></table>";
}

// Функция, которая выдает ошибку, если юзер не ввел имя!
function not_write(    $width) {
print "<table cellspacing=0 cellpadding=10 width='$width'>";
print "<tr align=center><td><font color=red  size=3><b><img src=\"img/error.gif\"> Ошибка!!!</b> Вы не ввели своего имени.<br>Сообщение в гостевую книгу <br><b>НЕ ДОБАВЛЕНО</b>!!!<br>Пожалуйста, <a href =\"index.php\">повторите</a> операцию.<script>setTimeout(\"top.location.href='index.php'\",5000);</script></td></tr></table>";
$logfile=fopen("tpl/user_log.txt", "a+");
$date=date("d.m.y - H:i:s");
$str="($date) - ошибка записи!! Попытка отправить сообщение без имени отправителя!\n";
fwrite($logfile,$str);
fclose($logfile);
}

// функция, которая выдает ошибку, если юзер не ввел текст сообщения!
function not1_write(    $width) {
print "<table cellspacing=0 cellpadding=10 width='$width'>";
print "<tr align=center><td><font color=red  size=3><b><img src=\"img/error.gif\"> Ошибка!!!</b> Вы не ввели текст сообщения.<br>Сообщение в гостевую книгу <br><b>НЕ ДОБАВЛЕНО</b>!!!<br>Пожалуйста, <a href =\"index.php\">повторите</a> операцию.<script>setTimeout(\"top.location.href='index.php'\",5000);</script></td></tr></table>";
$logfile=fopen("tpl/user_log.txt", "a+");
$date=date("d.m.y - H:i:s");
$str="($date) - ошибка записи!! Попытка отправить пустое сообщение!\n";
fwrite($logfile,$str);
fclose($logfile);
}

// функция, которая вписывает сообщение в базу и информирует юзера, что оно успешно добавлено.
function yes_write($name, $mesaga, $email, $file, $REMOTE_ADDR,   $width) {
trim($name);
trim($mesaga);
trim($email);
$ip=$REMOTE_ADDR;
$write = fopen("$file", "a+") or die("<tr align=center><td bgcolor='$bgc'><font color=red face='$basefont' size=3><b><img src=\"img/error.gif\"> Не могу открыть базу сообщений на запись. Наверное, у вас кривые руки.</td></tr></table>");
$dat=date("d.m.y - H:i");
$str="$name|$email|$mesaga|$dat|$ip\n";
fwrite ($write,$str);
fclose($write);
print "<table cellspacing=0 cellpadding=10 width='$width'>";
print "<tr align=center><td>Спасибо. Ваше сообщение отправлено. Сейчас вы автоматически перейдете на <a href =\"index.php\">главную страницу.</a><script>setTimeout(\"top.location.href='index.php'\",5000);</script></td></tr></table>";
$logfile=fopen("tpl/user_log.txt", "a+");
$date=date("d.m.y - H:i:s");
$str="($date) - Удачная запись очередного сообщения.\n";
fwrite($logfile,$str);
fclose($logfile);
}

// Если нет базы сообщений. (не найдена)
function file_not(  $width) {
Print "<br><table cellspacing=0 cellpadding=60 width='$width'>";
print "<tr valign=top><td width=100%><font color=red><p align=center><b><i><img src=\"img/error.gif\"> Ошибка. Не могу приконнектиться к базе сообщений.<br></i></b><hr size=1 color=red><img src=\"img/voskl.gif\"> Проверьте наличие файла tpl/messages.txt</p></font></td></tr></table>";
$logfile=fopen("tpl/user_log.txt", "a+");
$date=date("d.m.y - H:i:s");
$str="($date) - ошибка!! База сообщений не найдена или в нее невозможна запись!!!\n";
fwrite($logfile,$str);
fclose($logfile);
}

// сообщений в гоствеой книге нет  (ответ)
function not_mes( $width) {
Print "<br><table cellspacing=0 cellpadding=70 width='$width'>";
print "<tr valign=top><td width=100%><font color=limegreen size=3><p align=center><b><i>Сообщений в гостевой книге нет.</i></b></p></font></td></tr></table>";
}

// отображение сообщений. Менять НЕЛЬЗЯ иначе не будет работать!
function mes_view($file, $is, $dsh, $width, $adminc) {
$file="tpl/messages.txt";
$read = file($file);
$sizes=count($read);
if (!IsSet ($dsh)) $dsh=$sizes;
$read=array_reverse($read);
$golubev=9;
$super=$is+$golubev;
$dsh_prev=$dsh+10;
$is_next=$is+10;
$is_prev=$is-10;
$serega=$sizes-$is;
for ($i=$is; @$read[$i]>""; $i++){
$a=explode("|",$read[$i],5);
if ($a[1]=="") $a[1]="Не указан";
$text=nl2br("$a[2]");
$text=strip_tags($text, "<br>");
$text=ereg_Replace(
'([[:alnum:]]*)([[:space:]]*)(\\[:)([[:alnum:]]+)(\\:])([[:space:]]*)([[:alnum:]]*)([[:alnum:]]*)',
'\\1 \\2 <img src="img/smiley/\\4.gif"> \\6 \\7',
$text
);
// Парс гиперссылок
$w="[:alnum:]";
$p="[:punct:]";
$text=eregi_Replace(
                    "((https?|ftp|gopher)://".
                    "[$w-]+(\\.[$w-]+)*".
                    "(/[$w+&.%]*(\\?+&%)?)?".
                    "(([[:alnum:]]*)(/)([[:alnum:]]*))*".
                    ")",
                    '<a href="\\1">\\1</a> ',
                    $text
);
// конец парса
$comente=explode(":::",$text);
if (Isset ($comente[1])) $re="<table width=100% cellpadding=2 cellspacing=0 class='re'><tr valign=top><td align=left><b>Ответ:</b><i>$comente[1]</i><br></td></tr></table>";
Print "<br><table  cellspacing=0 cellpadding=2 width='$width'>";
 print "<tr valign=top><td width='$width'><p align=center><table width=100% cellpadding=2 cellspacing=0 class='t_dop'><tr><td width=165 class='t_dop'><b>".HtmlSpecialChars($a['0'])."</b></td><td align=center width=165 class='t_dop'><a href=\"mailto:$a[1]\">".HtmlSpecialChars($a['1'])."&nbsp;</a></td></tr></table><br>$comente[0]<p align=left>";
if (isset ($re))
print "$re";
print "</font></td></tr><tr align=right><td class='t_dop' width='$width'><i><u>Сообщение <b>№ $dsh</u> - отправлено ".HtmlSpecialChars($a['3'])."</b> </i></td></tr></table>";
Unset ($re);
$dsh=$dsh-1;
if ($i==$super) {
break;
}
}
$golubevs=$golubev++;
if ($sizes<=$golubevs) {
Print "<br><table  cellspacing=0 cellpadding=0 width='$width'>";
print "<tr valign=top align=center><td width=100% bgcolor='$bgc'><font color=red face='$basefont' size=2>Предыдущая | Следущая</td></tr></table>";
}
elseif ($is==0) {
Print "<br><table  cellspacing=0 cellpadding=0 width='$width'>";
print "<tr valign=top align=center><td width=100%><font color=red>Предыдущая | <a href=index.php?is=$is_next&dsh=$dsh>Следущая</a></td></tr></table>";
}elseif  ($serega<$golubev) {
Print "<br><table cellspacing=0 cellpadding=0 width='$width'>";
print "<tr valign=top align=center><td width=100%><font color=red><a href=index.php?is=$is_prev&dsh=$dsh_prev>Предыдущая</a> | Следущая</td></tr></table>";
}else {
Print "<br><table cellspacing=0 cellpadding=0 width='$width'>";
print "<tr valign=top align=center><td width=100%><font color=red><a href=index.php?is=$is_prev&dsh=$dsh_prev>Предыдущая</a> |<a href=index.php?is=$is_next&dsh=$dsh> Следущая</a></td></tr></table>";
}
}

// отображение страницы.
function file_ok($is, $dsh, $width, $adminc){
$file="tpl/messages.txt";
$fz=filesize("tpl/messages.txt");
if ($fz==0) not_mes( $width);
else mes_view($file, $is, $dsh, $width, $adminc);
}

// еще копирайты - вот тока убирите, дам в шнопак.!
function copyr($title, $copyr,   $width){
$vers="2.2.5";
Print "<br><table  cellspacing=0 cellpadding=0 width='$width'>";
 print "<tr valign=top align=center><td width=100%><font color=red size=1>Jedic Guestbook v.$vers<br>$copyr</td></tr></table>";
}

// ошибка, если маил некорректный.
function error_mail(  $width) {
print "<table cellspacing=0 cellpadding=10 width='$width'>";
print "<tr align=center><td><font color=red size=3><b><img src=\"img/error.gif\"> Ошибка!!!</b> Вы ввели некорректный емаил. Возможно, более 30 сиволов.<br>Сообщение в гостевую книгу <br><b>НЕ ДОБАВЛЕНО</b>!!!<br>Пожалуйста, <a href =\"index.php\">повторите</a> операцию.<script>setTimeout(\"top.location.href='index.php'\",5000);</script></td></tr></table>";
$logfile=fopen("tpl/user_log.txt", "a+");
$date=date("d.m.y - H:i:s");
$str="($date) - ошибка записи!! Попытка отправить сообщение с некорректным email'ом\n";
fwrite($logfile,$str);
fclose($logfile);
}

// ошибка, если месага состоит из одного слова.
function antiflood_1(  $width) {
print "<table cellspacing=0 cellpadding=10 width='$width'>";
print "<tr align=center><td><font color=red size=3><b><img src=\"img/error.gif\"> Извините, на форуме включен Флудконтроль.<br></b> Сообщение не может состоять из одного слова.<br>ОНО <b>НЕ ДОБАВЛЕНО</b><br>в гостевую книгу!!!<br>Пожалуйста, <a href =\"index.php\">повторите</a> операцию.<script>setTimeout(\"top.location.href='index.php'\",7000);</script></td></tr></table>";
$logfile=fopen("tpl/user_log.txt", "a+");
$date=date("d.m.y - H:i:s");
$str="($date) - ошибка записи!! Попытка отправить сообщение, сосотоящее из одного слова!\n";
fwrite($logfile,$str);
fclose($logfile);
}
function dlin_slovo($slovo_ein,   $width){
print "<table cellspacing=0 cellpadding=10 width='$width'>";
print "<tr align=center><td><font color=red size=3><b><img src=\"img/error.gif\"> Извините, на форуме включен Флудконтроль.<br></b> Сообщение не может содержать слова, содержащие более $slovo_ein символов.<br>Сообщение <b>НЕ ДОБАВЛЕНО</b><br>в гостевую книгу!!!<br>Пожалуйста, <a href =\"index.php\">повторите</a> операцию.<script>setTimeout(\"top.location.href='index.php'\",7000);</script></td></tr></table>";
$logfile=fopen("tpl/user_log.txt", "a+");
$date=date("d.m.y - H:i:s");
$str="($date) - ошибка записи!! Попытка отправить сообщение, содержащее слово с недопустимым количеством символов!\n";
fwrite($logfile,$str);
fclose($logfile);
}
function giperssilk($text){
$w="[:alnum:]";
$p="[:punct:]";
$text=eregi_Replace(
                    "((https?|ftp|gopher)://".
                    "[$w-]+(\\.[$w-]+)*".
                    "(/[$w+&.%]*(\\?+&%)?)?".
                    ")",
                    $text,
                    '<a href="\\1">\\1</a>'

);
}
function name_error(  $width){
print "<table  cellspacing=0 cellpadding=10 width='$width'>";
print "<tr align=center><td><font color=red size=3><b><img src=\"img/error.gif\"> Извините, на форуме включен Флудконтроль.<br></b> Имя не должно превышать 30 символов.<br>Сообщение <b>НЕ ДОБАВЛЕНО</b><br>в гостевую книгу!!!<br>Пожалуйста, <a href =\"index.php\">повторите</a> операцию.<script>setTimeout(\"top.location.href='index.php'\",7000);</script></td></tr></table>";
$logfile=fopen("tpl/user_log.txt", "a+");
$date=date("d.m.y - H:i:s");
$str="($date) - ошибка записи!! Попытка отправить сообщение с слишком длинным именем\n";
fwrite($logfile,$str);
fclose($logfile);
}
function dlinames(  $width){
print "<table cellspacing=0 cellpadding=10 width='$width'>";
print "<tr align=center><td><font color=red size=3><b><img src=\"img/error.gif\"> Извините, на форуме включен Флудконтроль.<br></b>Сообщение не может содержать слишком много символов.<br>Сообщение <b>НЕ ДОБАВЛЕНО</b><br>в гостевую книгу!!!<br>Пожалуйста, <a href =\"index.php\">повторите</a> операцию.<script>setTimeout(\"top.location.href='index.php'\",7000);</script></td></tr></table>";
$logfile=fopen("tpl/user_log.txt", "a+");
$date=date("d.m.y - H:i:s");
$str="($date) - ошибка записи!! Попытка отправить сообщение содержащее огромное количество символов!\n";
fwrite($logfile,$str);
fclose($logfile);
}
function smile(){
$d=@opendir("img/smiley");
if(!$d) return;
while(($e=readdir($d))!==false) {
if($e=='.'||$e=='..'||$e=='Thumbs.db') continue;
else {
$cot=strlen($e);
$cots=$cot-4;
$ind=substr($e,"0",$cots);
$ind="[:".$ind.":]";
print "<img src='img/smiley/".$e."' border='0' alt='Добавить смайл' hspace='1' onClick='addSmile(\"".$ind."\")' style='cursor:hand;' onMouseOver='podsk(\"smi\")' onMouseOut='podsk(\"off\")'></a>";
}
}
}
?>