<?
/*
------- *** ����� ���������: ������� ������ *** ---------
����� (dubkidubki@list.ru) ������.
������ ���������� - ����� 2004 ����.
������ ���������������� ���������� � Readme!
��������� ���������� �������! ��������� ����� �������� �������!
*/

function admin_mes_view ($file, $is, $dsh){
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
if ($a[1]=="") $a[1]="�� ������";
$text=nl2br("$a[2]");
$text=strip_tags($text, "<br>");
$text=ereg_Replace(
'([[:alnum:]]*)([[:space:]]*)(\\[:)([[:alnum:]]+)(\\:])([[:space:]]*)([[:alnum:]]*)([[:alnum:]]*)',
'\\1 \\2 <img src="img/smiley/\\4.gif"> \\6 \\7',
$text
);
// ���� �����������
$w="[:alnum:]";
$p="[:punct:]";
$text=eregi_Replace(
                    "((https?|ftp|gopher)://".
                    "[$w-]+(\\.[$w-]+)*".
                    "(/[$w+&.%]*(\\?+&%)?)?".
                    "(([[:alnum:]]*)(/)([[:alnum:]]*))*".
                    ")",                
                    '<a href="\\1">\\1</a>',
                    $text
);
// ����� �����
$comente=explode(":::",$text);
if (Isset ($comente[1])) $re="<table width=100% cellpadding=2 cellspacing=0 class='re'><tr valign=top><td align=left><b>�����:</b><i>$comente[1]</i><br></td></tr></table>";Print "<br><table style=\"border:1px green solid;\" cellspacing=0 cellpadding=2 width=430>";
 print "<tr valign=top><td width=430 bgcolor=#tf1101><font color=limegreen face=Verdana size=1><p align=center><table width=100% style=\"border:0px green solid;\" cellpadding=2 cellspacing=0><tr><td width=165 bgcolor=#tf2525><font color=#fffddd size=1><b>".HtmlSpecialChars($a['0'])."</b></td><td align=center width=165 bgcolor=#tf2525><font color=black size=1><a href=\"mailto:$a[1]\">".HtmlSpecialChars($a['1'])."&nbsp;</a></td></tr></table><br>$comente[0]<p align=left>";
if (isset ($re))
print "$re<br>";
print "IP: <font face=Verdana size=1 color=red>$a[4] - <a href=login.php?admin_mes&re_numb=$dsh>��������</a> - <a href=login.php?admin_mes&edit_numb=$dsh>�������������</a> - <a href=login.php?admin_mes&del_numb=$dsh>�������</a> </font></td></tr><tr align=right><td bgcolor=#tf2525 width=430><font face=Verdana size=1 color=#fffddd><i><u>��������� <b>� $dsh</u> - ���������� ".HtmlSpecialChars($a['3'])."</b> </i> </td></tr></table>";
Unset ($re);
$dsh=$dsh-1;
if ($i==$super) {
break;
}
}
$golubevs=$golubev++;
if ($sizes<=$golubevs) {
Print "<br><table cellspacing=0 cellpadding=0 width=430>";
print "<tr valign=top align=center><td width=100% bgcolor=#tf1101><font color=red face=Verdana size=2>���������� | ��������</td></tr></table>";
}
elseif ($is==0) {
Print "<br><table cellspacing=0 cellpadding=0 width=430>";
print "<tr valign=top align=center><td width=100% bgcolor=#tf1101><font color=red face=Verdana size=2>���������� | <a href=login.php?admin_mes&is=$is_next&dsh=$dsh>��������</a></td></tr></table>";
}elseif  ($serega<$golubev) {
Print "<br><table  cellspacing=0 cellpadding=0 width=430>";
print "<tr valign=top align=center><td width=100% bgcolor=#tf1101><font color=red face=Verdana size=2><a href=login.php?admin_mes&is=$is_prev&dsh=$dsh_prev>����������</a> | ��������</td></tr></table>";
}else {
Print "<br><table cellspacing=0 cellpadding=0 width=430>";
print "<tr valign=top align=center><td width=100% bgcolor=#tf1101><font color=red face=Verdana size=2><a href=login.php?admin_mes&is=$is_prev&dsh=$dsh_prev>����������</a> |<a href=login.php?admin_mes&is=$is_next&dsh=$dsh> ��������</a></td></tr></table>";
}
}
function delete_number($del_numb){
$dir=file("tpl/messages.txt");
$count=count($dir);
$sad=fopen("tpl/messages.txt","a+");
ftruncate ($sad, 0);
$b=$del_numb-1;
for ($i=0;$i<$b;$i++){
fwrite ($sad,$dir[$i]);
}
$b=$del_numb;
for ($i=$b;$i<$count;$i++){
fwrite ($sad,$dir[$i]);
}
fclose ($sad);
}
function edited_save($edit_numb,$name,$email,$edited,$date,$ip){
$dir=file("tpl/messages.txt");
$count=count($dir);
$sad=fopen("tpl/messages.txt","a+");
ftruncate ($sad, 0);
$b=$edit_numb-1;
for ($i=0;$i<$b;$i++){
fwrite ($sad,$dir[$i]);
}
// ��� ������ ������������������ ���������!
$edited=trim($edited);
$name=trim($name);
$email=trim($email);
$date=trim($date);
$ip=trim($ip);
$edited=strtr($edited, "\n", "  ");
$str="$name|$email|$edited|$date|$ip\n";
fwrite ($sad,$str);
// ����� ������ ����, ����� ��������� ���������!!!
$b=$edit_numb;
for ($i=$b;$i<$count;$i++){
fwrite ($sad,$dir[$i]);
}
fclose ($sad);
}
function re_save($re_numb,$login,$re){
$dir=file("tpl/messages.txt");
$count=count($dir);
$sad=fopen("tpl/messages.txt","a+");
ftruncate ($sad, 0);
$b=$re_numb-1;
for ($i=0;$i<$b;$i++){
fwrite ($sad,$dir[$i]);
}
// ������ ������
$re=trim($re);
$re=strtr($re, "\n", "  ");
$rea=explode("|",$dir[$b]);
$str="$rea[0]|$rea[1]|$rea[2]::: $login - $re|$rea[3]|$rea[4]";
fwrite ($sad,$str);
// ����� ������
$b=$re_numb;
for ($i=$b;$i<$count;$i++){
fwrite ($sad,$dir[$i]);
}
fclose ($sad);
}
function size_file(){
$mas=stat("tpl/messages.txt");
$ml=$mas[7]/1024;
$cou=strlen($ml);
if ($cou>3) {
$ml=substr($ml,0,4);
}
print "<font color=limegreen size=2>������ ���� ��������� </font><font color=blue size=2> - $ml ��<br>";
$mas=stat("tpl/user_log.txt");
$ul=$mas[7]/1024;
$cou=strlen($ul);
if ($cou>3) {
$ul=substr($ul,0,4);
}
print "<font color=limegreen size=2>������ ��� ����� ������������� </font><font color=blue size=2> - $ul ��<br>";
$mas=stat("tpl/admin_log.txt");
$ul=$mas[7]/1024;
$ul=$mas[7]/1024;
$cou=strlen($ul);
if ($cou>3) {
$ul=substr($ul,0,4);
}
print "<font color=limegreen size=2>������ ��� ����� ����� ������� </font><font color=blue size=2> - $ul ��<br>";
}
function clear_l($file_cl){
if ($file_cl=="user"){
$file_null=fopen("tpl/user_log.txt","a+");
ftruncate ($file_null, 0);
fclose ($file_null);
}
else {
$file_null=fopen("tpl/admin_log.txt","a+");
ftruncate ($file_null, 0);
fclose ($file_null);
}
}
function pass_edit($old_login, $new_login, $new_pass, $old_pass, $potdt, $login){
$old_login=trim($old_login);
$new_login=trim($new_login);
$new_pass=trim($new_pass);
$old_pass=trim($old_pass);
$potdt=trim($potdt);
$old_pass=md5($old_pass);
$read=file("tpl/admin_user.txt");
$a=explode("|",$read[0],2);
if (@$old_login==$a[0] & @$old_pass==$a[1]) {
	if ($new_pass!==$potdt) print "<font color=red>������! ���� ������� �� ���������.";
	elseif ($new_login=="") print "<font color=red>������! �� ������ ����� �����.";
	elseif ($new_pass=="") print "<font color=red>������! �� ������ ����� ������.";
	else {
	$new_pass=md5($new_pass);
	$new_f=fopen("tpl/admin_user.txt","a+");
	ftruncate ($new_f, 0);
	$str_new="$new_login|$new_pass";
	fwrite ($new_f,$str_new);
	fclose ($new_f);
	print "<font color=red>������� ��� ������ �������. ������ �� ������ ����� � ������ ������� ������.";
	$logfile=fopen("tpl/admin_log.txt", "a+");
			$brema=date("d.m.y - H:i:s");
			$str="($brema) - $login ������ ����� �� $new_login. ��������� ����� ������.\n";
		fwrite($logfile,$str);
		fclose($logfile); 
		$logr=file("tpl/admin_log.txt");
	session_unregister("login");
	session_unregister("pass");
	}
}
else print "<font color=red>������! ������� ������ ������ ��� �����!";
$logfile=fopen("tpl/admin_log.txt", "a+");
			$brema=date("d.m.y - H:i:s");
			$str="($brema) - $login �������� �������� ������� ������\n";
		fwrite($logfile,$str);
		fclose($logfile); 
		$logr=file("tpl/admin_log.txt");
}
?>