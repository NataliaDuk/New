<?
/*
------- *** ����� ���������: ������� ������ *** ---------
����� (dubkidubki@list.ru) ������.
������ ���������� - ����� 2004 ����.
������ ���������������� ���������� � Readme!
��������� ���������� �������! ��������� ����� �������� �������!
*/
$mesaga=trim($mesaga);
$name=trim($name);
$email=trim($email);
$email_count=strlen($email);
$name_count=strlen($name);
$mes_count=strlen ($mesaga);
$dlina=0;
$slovo_ein=30;     // ������������� ����� �����
SetCookie("imena[name]",$name, time()+3600000, "/","$HTTP_HOST");
SetCookie("imena[email]",$email, time()+3600000, "/","$HTTP_HOST");
$mesaga=str_replace("|","l",$mesaga);
$mesaga_slovo=explode(" ",$mesaga); // ��������� ��������� �� ��������� �����
for ($i=0;@$mesaga_slovo[$i]>""; $i++){
$valu=strlen($mesaga_slovo[$i]); // ������������, ������� ���� � ������ �����
if ($valu>$slovo_ein) { // ����� ������ �� ����� ��������� ������ ���������� 
$dlina=1;
break;
}
}
if ($email_count>0) { 
$simvol="@";
$prov=strrpos($email,$simvol);
}
else $prov=1;
// ����� ��������
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
if ($name=="") not_write(  $width); //������. ��� �� �������
elseif ($name_count>30) name_error(  $width); //������. ��� ����� 30 ��������
elseif ($prov==0) error_mail(  $width); //������. ������ ������
elseif ($email_count>30) error_mail(  $width); //������. ����� ����� 30 ��������
elseif ($mesaga=="") not1_write(  $width); //������. ��� ������ ���������
elseif ($mes_count>1000) dlinames(  $width); //������. ��������� ������� �������
elseif ($dlina==1) dlin_slovo($slovo_ein,   $width); //������. ����� ����� ���������
elseif ($antiflood_1==0) antiflood_1(  $width); // ������. ��������� �� ������ �����.
else yes_write($name, $mesaga, $email, $file, $REMOTE_ADDR, $width);
include ("tpl/end.html");
copyr($title, $copyr,   $width);
?>
