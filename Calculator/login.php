<?
/*
------- *** Автор программы: Голубев Сергей *** ---------
Связь (dubkidubki@list.ru) Джедай.
Начало разработки - конец 2004 года.
Читаем Пользовательское соглашение и Readme!
Полностью бесплатный продукт! Авторские права защищены законом!
*/
session_start();
include ("inc.php");
include ("inc_adm.php");
require ("tpl/head.html");
print "<title>$title</title>";
print "<br><table border=1 bordercolor=green cellspacing=0 cellpadding=2 width=430>";
if (isset ($pass)) $passer=md5($pass);
if (!isset ($login)) {
   print "<tr><td bgcolor=green align=center><font color=black face=Verdana size=2><b>Пройдите авторизацию.</font></td></tr>";
   print "<tr><td bgcolor=#tf1101><form action=login.php method=post><table><tr><td width=50%><font color=limegreen face=Verdana size=2><u>Ваш логин:</u></td><td><input type=text size=\"25\" maxlength=30 name=\"login\" style=\"width:300px\"></td></tr>";
   print "<tr><td width=50%><font color=limegreen face=Verdana size=2>Ваш пароль:</td><td><input type=password size=\"25\" maxlength=30 name=\"pass\" style=\"width:300px\"></td></tr>";
   print "<tr><td width=100% align=center colspan=2><br><input type=submit value=\"Войти\" name=\"log\">";
   
   print "</form></td></tr></table></table>";
}
else {
     $read=file("tpl/admin_user.txt");
     $a=explode("|",$read[0],2);
     if (@$login==$a[0] & @$passer==$a[1]) {
session_register("login");
session_register ("pass"); 
if (isset ($pass_edit)){
print "<table border=1 bordercolor=green cellspacing=0 cellpadding=2 width=430><tr valign=top><td width=100% bgcolor=#tf1101 align=center><font color=limegreen face=Verdana size=2>Вы авторизировались как <font color=red><b>$login</b></font>.</td></tr></table>";
           print "<br><table border=1 bordercolor=green cellspacing=0 cellpadding=2 width=430>";
           print "<tr valign=top><td width=100% bgcolor=#tf1101 align=center><font color=blue face=Verdana size=2>";
           print "АДМИНИСТРИРОВАНИЕ<hr color=green width=100%>";
           print "Смена пароля";
           $logfile=fopen("tpl/admin_log.txt", "a+");
$brema=date("d.m.y - H:i:s");
$str="($brema) - $login в разделе смены пароля\n";
fwrite($logfile,$str);
fclose($logfile);
echo "<p align=right><form action='login.php?pass_edit&save' name=pass_edit method=post>";
         echo "Старый логин: <input type=text size=\"25\" maxlength=30 name=\"old_login\" style=\"width:300px;font: 8pt Arial; color: green; BORDER-COLOR:green; background:#fffddd; border-width: 2px\">
           Старый пароль: <input type=password size=\"25\" maxlength=30 name=\"old_pass\" style=\"width:300px;font: 8pt Arial; color: green; BORDER-COLOR:green; background:#fffddd; border-width: 2px\">
           Новый логин: <input type=text size=\"25\" maxlength=30 name=\"new_login\" style=\"width:300px;font: 8pt Arial; color: green; BORDER-COLOR:green; background:#fffddd; border-width: 2px\">
           Новый пароль: <input type=password size=\"25\" maxlength=30 name=\"new_pass\" style=\"width:300px;font: 8pt Arial; color: green; BORDER-COLOR:green; background:#fffddd; border-width: 2px\">
           Подтверждение: <input type=password size=\"25\" maxlength=30 name=\"potdt\" style=\"width:300px;font: 8pt Arial; color: green; BORDER-COLOR:green; background:#fffddd; border-width: 2px\">
           <br><br><input type=submit name=\"pas_e_n\" value=\"Сохранить\" style=\"BORDER-RIGHT:  buttonhighlight 2px outset;BORDER-TOP: buttonhighlight 1px outset;BORDER-LEFT: buttonhighlight 1px outset;BORDER-BOTTOM: buttonhighlight 1px outset;BACKGROUND-COLOR: green; font: 8pt Verdana; BORDER-COLOR:blue; font-weight: bold;\">
           </form></p>";
           if (Isset ($save)) pass_edit($old_login, $new_login, $new_pass, $old_pass, $potdt, $login);
           print "<hr color=green width=100%><a href=login.php>В админку</a>";
           print "</td></tr></table>";
}
elseif (isset ($log_view)){
print "<table border=1 bordercolor=green cellspacing=0 cellpadding=2 width=430><tr valign=top><td width=100% bgcolor=#tf1101 align=center><font color=limegreen face=Verdana size=2>Вы авторизировались как <font color=red><b>$login</b></font>.</td></tr></table>";
           print "<br><table border=1 bordercolor=green cellspacing=0 cellpadding=2 width=430>";
           print "<tr valign=top><td width=100% bgcolor=#tf1101 align=center><font color=blue face=Verdana size=2>";
           print "АДМИНИСТРИРОВАНИЕ<hr color=green width=100%>";
           if ($log_view=="admin"){
           print "<b>Просмотр лог-файла админ-комнаты.</b><br><br>";
           $logfile=fopen("tpl/admin_log.txt", "a+");
			$brema=date("d.m.y - H:i:s");
			$str="($brema) - $login просматривает лог-файл админ комнаты!\n";
		fwrite($logfile,$str);
		fclose($logfile); 
		$logr=file("tpl/admin_log.txt");
			$cor=count($logr);	
			if (!isset ($clear)){	
			echo"<TABLE cellSpacing=0 cellPadding=4 width='98%' border=0>
					<TBODY><TR><TD bordercolor='blue' style='BORDER-RIGHT: 1px inset; BORDER-TOP: 2px inset; BORDER-LEFT: 1px inset; BORDER-BOTTOM: 2px inset'>
					<font face='Lucida Console' color=white size=1>";
					for ($i=0;$i<$cor;$i++){
					print $logr[$i]."<br>";
					}
					echo "</font></TD></TR></TBODY></TABLE><a href='login.php?log_view=admin&clear'>Очистить</a>";
					}
					else {
					$file_cl="admin";
					clear_l($file_cl);
					print "Лог файл пользователей очищен";
				$logfile=fopen("tpl/admin_log.txt", "a+");
$brema=date("d.m.y - H:i:s");
$str="($brema) - $login очистил лог файл админ комнаты!\n";
fwrite($logfile,$str);
fclose($logfile);
					}
           }
           elseif ($log_view=="user"){
           print "<b>Просмотр лог-файла пользовательской комнаты.</b><br><br>"; 
           $logfile=fopen("tpl/admin_log.txt", "a+");
			$brema=date("d.m.y - H:i:s");
			$str="($brema) - $login просматривает лог-файл пользовательской комнаты!\n";
			fwrite($logfile,$str);
			fclose($logfile);
			$logr=file("tpl/user_log.txt");
			$cor=count($logr);		
			if (!isset ($clear)){
			echo"<TABLE cellSpacing=0 cellPadding=4 width='98%' border=0>
					<TBODY><TR><TD bordercolor='blue' style='BORDER-RIGHT: 1px inset; BORDER-TOP: 2px inset; BORDER-LEFT: 1px inset; BORDER-BOTTOM: 2px inset'>
					<font face='Lucida Console' color=white size=1>";
					for ($i=0;$i<$cor;$i++){
					print $logr[$i]."<br>";
					}	
					echo "</font></TD></TR></TBODY></TABLE><br><a href='login.php?log_view=user&clear'>Очистить</a>";
					}
					else {
					$file_cl="user";
					clear_l($file_cl);
					print "Лог файл пользователей очищен";
				$logfile=fopen("tpl/admin_log.txt", "a+");
$brema=date("d.m.y - H:i:s");
$str="($brema) - $login очистил лог файл пользователей!\n";
fwrite($logfile,$str);
fclose($logfile);
					}
           }
           else {
           print "<b>Просмотр лог-файлов</b><br><br>";           
           print "<a href='login.php?log_view=admin'>Лог-файл админ-команты.</a><br><br><a href='login.php?log_view=user'>Лог-файл пользовательской команты.</a>";
           Unset ($read);           
}
print "<hr color=green width=100%><a href=login.php>В админку</a>";
           print "</td></tr></table>";
}   
elseif   (isset ($info)) {
          print "<table border=1 bordercolor=green cellspacing=0 cellpadding=2 width=430><tr valign=top><td width=100% bgcolor=#tf1101 align=center><font color=limegreen face=Verdana size=2>Вы авторизировались как <font color=red><b>$login</b></font>.</td></tr></table>";
           print "<br><table border=1 bordercolor=green cellspacing=0 cellpadding=2 width=430>";
           print "<tr valign=top><td width=100% bgcolor=#tf1101 align=center><font color=blue face=Verdana size=2>";


           print "АДМИНИСТРИРОВАНИЕ<hr color=green width=100%>";
           $fz=filesize("$file");
	if ($fz==0) {      
		$sizes=0;
		$a[3]="нет данных";
		$b[3]="нет данных";
		}
	else {
	$read = file($file);    
           $sizes=count($read);
           $a=explode("|",$read[0],5);
           $jedic=$sizes-1;
           $b=explode("|",$read[$jedic],5);
		}
           print "<b>Информация о гостевой книге.</b><br><br><table><tr><td><font color=blue size=2><font color=limegreen>Версия</font> - $vers<br><font color=limegreen>Название</font> - $title.<br><font color=limegreen>Всего сообщений</font> -  $sizes<br><font color=limegreen>Первое сообщение</font> - $a[3]<br><font color=limegreen>Последее сообщение</font> - $b[3]</font><br>";
           @size_file();
           print "</td></tr></table>";
           Unset ($read);
           print "<a href=login.php>В админку</a>";
           print "</td></tr></table>";
           $logfile=fopen("tpl/admin_log.txt", "a+");
$brema=date("d.m.y - H:i:s");
$str="($brema) - $login просматривает раздел информации о гостевой книге!\n";
fwrite($logfile,$str);
fclose($logfile);
        }
	elseif (isset ($admin_mes)) {
		if (isset ($edit_numb)){
// редактируем сообщения.
$read = file("tpl/messages.txt");
$read=array_reverse($read);	
$sizes=count($read);
$read=array_reverse($read);
$der=$edit_numb-1;
if (@$action=="save") {
edited_save($edit_numb,$name,$email,$edited,$date,$ip);
print "<table border=1 bordercolor=green cellspacing=0 cellpadding=2 width=430><tr valign=top><td width=100% bgcolor=#tf1101 align=center><font color=limegreen face=Verdana size=2>Вы авторизировались как <font color=red><b>$login</b></font>.</td></tr></table>";
           print "<br><table border=1 bordercolor=green cellspacing=0 cellpadding=2 width=430>";
           print "<tr valign=top><td width=100% bgcolor=#tf1101 align=center><font color=blue face=Verdana size=2>";
           print "АДМИНИСТРИРОВАНИЕ<hr color=green width=100%>";
           print "Сообщение номер $edit_numb удачно отредактировано в гостевой книги. Вы можете просмотреть изменения на <br><a href='index.php'>главной странице.</a><hr color=green width=100%><a href=login.php>Админка</a> <a href=login.php?admin_mes>Управление сообщениями.</a>";
           print "</td></tr></table>";
           $logfile=fopen("tpl/admin_log.txt", "a+");
$brema=date("d.m.y - H:i:s");
$str="($brema) - $login отредактировал сообщение № $edit_numb.\n";
fwrite($logfile,$str);
fclose($logfile);
           }
           else {
$messer=explode("|",$read[$der]);
print "<table border=1 bordercolor=green cellspacing=0 cellpadding=2 width=430><tr valign=top><td width=100% bgcolor=#tf1101 align=center><font color=limegreen face=Verdana size=2>Вы авторизировались как <font color=red><b>$login</b></font>.</td></tr></table>";
           print "<br><table border=1 bordercolor=green cellspacing=0 cellpadding=2 width=430>";
           print "<tr valign=top><td width=100% bgcolor=#tf1101 align=center><font color=blue face=Verdana size=2>";
           print "АДМИНИСТРИРОВАНИЕ<hr color=green width=100%>";
           print "Редактируем сообщение $edit_numb.<center><form action='login.php?admin_mes&edit_numb=$edit_numb&action=save' name=edit method=post>";
           if ($messer[1]=="") $messer[1]="none@none.com";
           echo "<input type=text size=\"25\" maxlength=30 name=\"name\" style=\"width:300px;font: 8pt Arial; color: green; BORDER-COLOR:green; background:#fffddd; border-width: 2px\" value='$messer[0]'>
           <input type=text size=\"25\" maxlength=30 name=\"email\" style=\"width:300px;font: 8pt Arial; color: green; BORDER-COLOR:green; background:#fffddd; border-width: 2px\" value='$messer[1]'>
           <textarea name=\"edited\" rows=5 cols=18 style=\"width: 300px; height: 90px; font: 8pt Arial; color: green; BORDER-COLOR:green; background:#fffddd; border-width: 2px; font-weight: bold;\">$messer[2]</textarea>
           <input type=text size=\"25\" maxlength=30 name=\"date\" style=\"width:300px;font: 8pt Arial; color: green; BORDER-COLOR:green; background:#fffddd; border-width: 2px\" value='$messer[3]'>
			<input type=text size=\"25\" maxlength=30 name=\"ip\" style=\"width:300px;font: 8pt Arial; color: green; BORDER-COLOR:green; background:#fffddd; border-width: 2px\" value='$messer[4]'>
           <br><br><input type=submit name=\"save_edit_mes_once\" value=\"Сохранить\" style=\"BORDER-RIGHT:  buttonhighlight 2px outset;BORDER-TOP: buttonhighlight 1px outset;BORDER-LEFT: buttonhighlight 1px outset;BORDER-BOTTOM: buttonhighlight 1px outset;BACKGROUND-COLOR: green; font: 8pt Verdana; BORDER-COLOR:blue; font-weight: bold;\">
           </form>";
          print "<hr color=green width=100%><a href=login.php>Админка</a> <a href=login.php?admin_mes>Управление сообщениями</a>";
           print "</td></tr></table>";
           $logfile=fopen("tpl/admin_log.txt", "a+");
$brema=date("d.m.y - H:i:s");
$str="($brema) - $login вошел в меню редактирования сообщения номер $edit_numb.\n";
fwrite($logfile,$str);
fclose($logfile);
           }
}	
elseif (isset ($re_numb)){
// отвечаем на сообщения.
$read = file("tpl/messages.txt");
$read=array_reverse($read);	
$sizes=count($read);
$read=array_reverse($read);
$der=$re_numb-1;
if (@$action=="save") {
@re_save($re_numb,$login,$re);
print "<table border=1 bordercolor=green cellspacing=0 cellpadding=2 width=430><tr valign=top><td width=100% bgcolor=#tf1101 align=center><font color=limegreen face=Verdana size=2>Вы авторизировались как <font color=red><b>$login</b></font>.</td></tr></table>";
           print "<br><table border=1 bordercolor=green cellspacing=0 cellpadding=2 width=430>";
           print "<tr valign=top><td width=100% bgcolor=#tf1101 align=center><font color=blue face=Verdana size=2>";
           print "АДМИНИСТРИРОВАНИЕ<hr color=green width=100%>";
           print "Вы дали ответ на сообщение $re_numb. Теперь ваш ответ будет виден снизу данного сообщения.</a><hr color=green width=100%><a href=login.php>Админка</a> <a href=login.php?admin_mes>Управление сообщениями.</a>";
           print "</td></tr></table>";
           $logfile=fopen("tpl/admin_log.txt", "a+");
$brema=date("d.m.y - H:i:s");
$str="($brema) - $login ответил на сообщение $re_numb.\n";
fwrite($logfile,$str);
fclose($logfile);
}
else {
print "<table border=1 bordercolor=green cellspacing=0 cellpadding=2 width=430><tr valign=top><td width=100% bgcolor=#tf1101 align=center><font color=limegreen face=Verdana size=2>Вы авторизировались как <font color=red><b>$login</b></font>.</td></tr></table>";
           $logfile=fopen("tpl/admin_log.txt", "a+");
$brema=date("d.m.y - H:i:s");
$str="($brema) - $login вошел в меню комментирования сообщения $re_numb.\n";
fwrite($logfile,$str);
fclose($logfile);
           print "<br><table border=1 bordercolor=green cellspacing=0 cellpadding=2 width=430>";
           print "<tr valign=top><td width=100% bgcolor=#tf1101 align=center><font color=blue face=Verdana size=2>";
           print "АДМИНИСТРИРОВАНИЕ<hr color=green width=100%>";
           print "Отвечаем на сообщение $re_numb.<center><form action='login.php?admin_mes&re_numb=$re_numb&action=save' name=edit method=post>";
           echo "<textarea name=\"re\" rows=5 cols=18 style=\"width: 300px; height: 90px; font: 8pt Arial; color: green; BORDER-COLOR:green; background:#fffddd; border-width: 2px; font-weight: bold;\">Ваш ответ на данное сообщение!</textarea>
           <br><br><input type=submit name=\"save_edit_mes_once\" value=\"Сохранить\" style=\"BORDER-RIGHT:  buttonhighlight 2px outset;BORDER-TOP: buttonhighlight 1px outset;BORDER-LEFT: buttonhighlight 1px outset;BORDER-BOTTOM: buttonhighlight 1px outset;BACKGROUND-COLOR: green; font: 8pt Verdana; BORDER-COLOR:blue; font-weight: bold;\">
           </form>";
          print "<hr color=green width=100%><a href=login.php>Админка</a> <a href=login.php?admin_mes>Управление сообщениями</a>";
           print "</td></tr></table>";
$a=explode("|",$read[$der],5);
if ($a[1]=="") $a[1]="Не указан";
$text=nl2br("$a[2]");
$comente=explode(":::",$text);
if (Isset ($comente[1])) $re="<font color=#fffddd><i>$comente[1]</i></font>";
Print "<br><table style=\"border:1px green solid;\" cellspacing=0 cellpadding=2 width=430>";
 print "<tr valign=top><td width=430 bgcolor=#tf1101><font color=limegreen face=Verdana size=1><p align=center><table width=100% style=\"border:0px green solid;\" cellpadding=2 cellspacing=0><tr><td width=165 bgcolor=#tf2525><font color=#fffddd size=1><b>".HtmlSpecialChars($a['0'])."</b></td><td align=center width=165 bgcolor=#tf2525><font color=black size=1><a href=\"mailto:$a[1]\">".HtmlSpecialChars($a['1'])."&nbsp;</a></td></tr></table><br>$comente[0]<p align=left>";
if (isset ($re))
print "$re<br>";
print "IP: <font face=Verdana size=1 color=red>$a[4] </td></tr><tr align=right><td bgcolor=#tf2525 width=430><font face=Verdana size=1 color=#fffddd><i><u>Сообщение <b>№ $re_numb</u> - отправлено ".HtmlSpecialChars($a['3'])."</b> </i> </td></tr></table>";
}
}
elseif (isset ($del_numb))  {
if (@$action=="yes") {
delete_number($del_numb);
print "<table border=1 bordercolor=green cellspacing=0 cellpadding=2 width=430><tr valign=top><td width=100% bgcolor=#tf1101 align=center><font color=limegreen face=Verdana size=2>Вы авторизировались как <font color=red><b>$login</b></font>.</td></tr></table>";
           print "<br><table border=1 bordercolor=green cellspacing=0 cellpadding=2 width=430>";
           print "<tr valign=top><td width=100% bgcolor=#tf1101 align=center><font color=blue face=Verdana size=2>";
           print "АДМИНИСТРИРОВАНИЕ<hr color=green width=100%>";
           print "Сообщение номер $del_numb удачно удалено из гостевой книги.<br><a href=login.php>Админка</a> <a href=login.php?admin_mes>Управление сообщениями.</a>";
           print "</td></tr></table>";
           $logfile=fopen("tpl/admin_log.txt", "a+");
$brema=date("d.m.y - H:i:s");
$str="($brema) - $login удалил сообщение $del_numb.\n";
fwrite($logfile,$str);
fclose($logfile);
           }
else {
$logfile=fopen("tpl/admin_log.txt", "a+");
$brema=date("d.m.y - H:i:s");
$str="($brema) - $login вошел в меню удаления сообщения $del_numb.\n";
fwrite($logfile,$str);
fclose($logfile);
$read = file("tpl/messages.txt");
$sizes=count($read);
$read=array_reverse($read);
$der=$del_numb-1;
print "<table border=1 bordercolor=green cellspacing=0 cellpadding=2 width=430><tr valign=top><td width=100% bgcolor=#tf1101 align=center><font color=limegreen face=Verdana size=2>Вы авторизировались как <font color=red><b>$login</b></font>.</td></tr></table>";
           print "<br><table border=1 bordercolor=green cellspacing=0 cellpadding=2 width=430>";
           print "<tr valign=top><td width=100% bgcolor=#tf1101 align=center><font color=blue face=Verdana size=2>";
           print "АДМИНИСТРИРОВАНИЕ<hr color=green width=100%>";
           print "Удалить сообщение номер $del_numb.<br><a href=login.php>Админка</a> <a href=login.php?admin_mes>Управление сообщениями</a>";
           print "</td></tr></table>";
$file="tpl/messages.txt";
$read = file($file);
$sizes=count($read);

if (!isset ($read[$der])) print "<br><table style=\"border:1px green solid;\" cellspacing=0 cellpadding=2 width=430><tr valign=top><td align=center width=430 bgcolor=#tf1101><font color=red face=Verdana size=2><b>ОШИБКА: Cообщение № $del_numb не найдено. Всего сообщений в гостевой книге - $sizes.</b></td></tr></table>";
else {
$a=explode("|",$read[$der],5);
if ($a[1]=="") $a[1]="Не указан";
$text=nl2br("$a[2]");
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

$comente=explode(":::",$text);
if (Isset ($comente[1])) $re="<table width=100% cellpadding=2 cellspacing=0 class='re'><tr valign=top><td align=left><b>Ответ:</b><i>$comente[1]</i><br></td></tr></table>";
Print "<br><table style=\"border:1px green solid;\" cellspacing=0 cellpadding=2 width=430>";
 print "<tr valign=top><td width=430 bgcolor=#tf1101><font color=limegreen face=Verdana size=1><p align=center><table width=100% style=\"border:0px green solid;\" cellpadding=2 cellspacing=0><tr><td width=165 bgcolor=#tf2525><font color=#fffddd size=1><b>".HtmlSpecialChars($a['0'])."</b></td><td align=center width=165 bgcolor=#tf2525><font color=black size=1><a href=\"mailto:$a[1]\">".HtmlSpecialChars($a['1'])."&nbsp;</a></td></tr></table><br>$comente[0]<p align=left>";
if (isset ($re))
print "$re<br>";
print "IP: <font face=Verdana size=1 color=red>$a[4] - <a href='login.php?admin_mes&del_numb=".$del_numb."&action=yes'>Удаление подтверждаю.</a></font></td></tr><tr align=right><td bgcolor=#tf2525 width=430><font face=Verdana size=1 color=#fffddd><i><u>Сообщение <b>№ $del_numb</u> - отправлено ".HtmlSpecialChars($a['3'])."</b> </i> </td></tr></table>";
}
}
}
else {
$read = file("tpl/messages.txt");
$sizes=count($read);
if (!IsSet($is) or $is<0) $is=0;
if (!IsSet($dsh)) $dsh=$sizes;
	print "<table border=1 bordercolor=green cellspacing=0 cellpadding=2 width=430><tr valign=top><td width=100% bgcolor=#tf1101 align=center><font color=limegreen face=Verdana size=2>Вы авторизировались как <font color=red><b>$login</b></font>.</td></tr></table>";
           print "<br><table border=1 bordercolor=green cellspacing=0 cellpadding=2 width=430>";
           print "<tr valign=top><td width=100% bgcolor=#tf1101 align=center><font color=blue face=Verdana size=2>";
           print "АДМИНИСТРИРОВАНИЕ<hr color=green width=100%>";
           print "Просматриваем все сообщения гоствевой книги.<br><a href=login.php>Админка</a>";
           print "</td></tr></table>";
           $logfile=fopen("tpl/admin_log.txt", "a+");
$brema=date("d.m.y - H:i:s");
$str="($brema) - $login просматривает все сообщения.\n";
fwrite($logfile,$str);
fclose($logfile);
	if (is_file($file))  admin_mes_view($file, $is, $dsh);
	else file_not();
	}
	
}
                     elseif (isset ($mes_del)) {
           print "<table border=1 bordercolor=green cellspacing=0 cellpadding=2 width=430><tr valign=top><td width=100% bgcolor=#tf1101 align=center><font color=limegreen face=Verdana size=2>Вы авторизировались как <font color=red><b>$login</b></font>.</td></tr></table>";
           print "<br><table border=1 bordercolor=green cellspacing=0 cellpadding=2 width=430>";
           print "<tr valign=top><td width=100% bgcolor=#tf1101 align=center><font color=blue face=Verdana size=2>";
           print "АДМИНИСТРИРОВАНИЕ<hr color=green width=100%>";
           print "Вы хотите очистить базу сообщений.<br>Это действие приведет к удалению всех сообщений из гостевой книги. Продолжить?<br><a href=login.php?yes_del>Да</a>&nbsp;&nbsp;<a href=login.php?no_del>Нет</a>";
           print "</td></tr></table>";
           $logfile=fopen("tpl/admin_log.txt", "a+");
$brema=date("d.m.y - H:i:s");
$str="($brema) - $login вошел в меню очистки гостевой книги.\n";
fwrite($logfile,$str);
fclose($logfile);
           }
             else {
           if (isset ($yes_del)) {
              print "<table border=1 bordercolor=green cellspacing=0 cellpadding=2 width=430><tr valign=top><td width=100% bgcolor=#tf1101 align=center><font color=limegreen face=Verdana size=2>Вы авторизировались как <font color=red><b>$login</b></font>.</td></tr></table>";
              print "<br><table border=1 bordercolor=green cellspacing=0 cellpadding=2 width=430>";
              print "<tr valign=top><td width=100% bgcolor=#tf1101 align=center><font color=blue face=Verdana size=2>";
              print "АДМИНИСТРИРОВАНИЕ<hr color=green width=100%>";
              $wr=fopen("tpl/messages.txt", "r+") or die("<b><img src=\"img/error.gif\"> Не могу открыть базу сообщений на запись. Наверное, у вас кривые руки.");
              ftruncate ($wr, 0);
              fclose ($wr);
              print "Спасибо! Все сообщения были удалены.<br>";
              print "<a href=login.php>Админка</a>";
              print "</td></tr></table>";
              $logfile=fopen("tpl/admin_log.txt", "a+");
$brema=date("d.m.y - H:i:s");
$str="($brema) - $login очистил гостевую книгу.\n";
fwrite($logfile,$str);
fclose($logfile);
        }
                     else {
        print "<table border=1 bordercolor=green cellspacing=0 cellpadding=2 width=430><tr valign=top><td width=100% bgcolor=#tf1101 align=center><font color=limegreen face=Verdana size=2>Вы авторизировались как <font color=red><b>$login</b></font>.</td></tr></table>";
        print "<br><table border=1 bordercolor=green cellspacing=0 cellpadding=2 width=430>";
        print "<tr valign=top><td width=100% bgcolor=#tf1101 align=center><font color=blue face=Verdana size=2>";
        print "АДМИНИСТРИРОВАНИЕ<hr color=green width=100%>";
        print "<a href=login.php?mes_del>Очистить книгу</a><br><br><a href=login.php?info>Информация о книге</a><br><br><a href=login.php?admin_mes>Управления сообщениями</a></a><br><br><a href=login.php?log_view>Просмотр логов</a><br><br><a href=login.php?pass_edit>Смена пароля</a>";
        print "<hr color=green width=100%><a href=\"index.php\">Перейти на главную</a></font>.</td></tr></table>";
     }
}
       }
        else {
       
        print "<table border=1 bordercolor=green cellspacing=0 cellpadding=2 width=430><tr><td width=100% align=center bgcolor=green><font color=black face=Verdana size=2><b>Логин или пароль не верны!</b></td></tr><tr valign=top><td width=100% bgcolor=#tf1101><font color=limegreen face=Verdana size=2>Возможно, вы ошиблись при вводе.<br>Пожалуйста, попробуйте повторить операцию.</td></tr></table>";
        print "<script>setTimeout(\"top.location.href='login.php'\",5000);</script>";
        $logfile=fopen("tpl/admin_log.txt", "a+");
$date=date("d.m.y - H:i:s");

$str="($date) - ошибка входа!! Попытка войти с неверным логином или паролем!\n";
fwrite($logfile,$str);
fclose($logfile);
     }
}
require ("tpl/end.html");
copyr($title, $copyr, $width);
?>
